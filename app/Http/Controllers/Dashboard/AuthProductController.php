<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddOfferRequest;

class AuthProductController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
    }
    
    public function product_info($id = null)
    {
        return view('dashboard.product_info.product_info',compact('id'));
    }

    public function product_info_dt(Request $request)
    {
        $date = $request->get('columns')[5]['search']['value'];
        if ($date != '') {
            list($start_date, $end_date) = explode('~', preg_replace('/\s+/', '', $date));
            $start_date = date_validate($start_date);
            $end_date = date_validate($end_date);
        } else {
            $time = strtotime(date('Y-m-d') . '365 days');
            $end_date = date_validate(date('Y-m-d', $time));
            $start_date = date_validate(date('Y-m-d'));
        }
        $dataSet = DB::table("offers")
            ->join('users', 'users.id', 'offers.user_id')
            ->select('offers.id','offers.product_id','offers.title','offers.offer_start','offers.offer_end','offers.created_at','offers.product_cat','offers.status','users.username')
            ->whereBetween('offers.offer_end', [$start_date . " 00:00:00", $end_date . " 23:59:59"])
            ->where('offers.offer_end', '>=' , date_validate(date('Y-m-d')) . " 00:00:00")
            ->orderBy('offers.created_at', 'DESC');
            if ($request->user_id != null) {
                $dataSet->where('offers.user_id', $request->user_id);
            }
        return Datatables::of($dataSet)->make(true);
    }

    public function ExpiredProductList()
    {
        return view('dashboard.product_info.expired_product_info');
    }

    public function expired_product_info_dt(Request $request)
    {
        $date = $request->get('columns')[5]['search']['value'];
        if ($date != '') {
            list($start_date, $end_date) = explode('~', preg_replace('/\s+/', '', $date));
            $start_date = date_validate($start_date);
            $end_date = date_validate($end_date);
        } else {
            $time = strtotime(date('Y-m-d') . '-365 days');
            $start_date = date_validate(date('Y-m-d', $time));
            $end_date = date_validate(date('Y-m-d'));
        }
        $dataSet = DB::table("offers")
            ->join('users', 'users.id', 'offers.user_id')
            ->select('offers.id','offers.product_id','offers.title','offers.offer_start','offers.offer_end','offers.created_at','offers.product_cat','offers.status','users.username')
            ->whereBetween('offers.offer_end', [$start_date . " 00:00:00", $end_date . " 23:59:59"])
            ->where('offers.offer_end', '<' ,date_validate(date('Y-m-d')) . " 00:00:00")
            ->orderBy('offers.created_at', 'DESC');
            if ($request->user_id != null) {
                $dataSet->where('offers.user_id', $request->user_id);
            }
        return Datatables::of($dataSet)->make(true);
    }

    public function product_info_single($id)
    {
        $product_info = DB::table('offers')
                    ->select('offers.*', 'users.fullname', 'users.email')
                    ->join('users', 'users.id', 'offers.user_id')
                    ->where('offers.id', $id)->first();

        return view('dashboard.product_info.product_info_single',compact('product_info'));

    }

    public function auth_edit_offer(AddOfferRequest $request){

        $old_data = DB::table('offers')->where('id', $request->id)->first();
        $data_old= [
            "product_cat" => $old_data->product_cat,
            "offer_cat" => $old_data->offer_cat,
            "title" => $old_data->title,
            "sub_title" => $old_data->sub_title,
            "provider" => $old_data->provider,
            "promo_code" => $old_data->promo_code,
            "offer_start" => datetime_validate_24($old_data->offer_start),
            "offer_end" => datetime_validate_24($old_data->offer_end),
            "offer_note" => $old_data->offer_note,
            "price" => $old_data->price,
            "currency" => $old_data->currency,
            "product_link" => $old_data->product_link,
            "affiliate_link" => $old_data->affiliate_link,
            "description" => $old_data->description,
            "product_id" => $old_data->product_id,
            'user_id' => $old_data->user_id,
            'user_type' => "admin",
            'status' => $old_data->status,
            'visible' => $old_data->visible,
            'created_at'=>date('Y-m-d H:i:s')
        ];

        $new_data= [
            "product_cat" => $request->product_cat,
            "offer_cat" => $request->offer_cat,
            "title" => $request->title,
            "sub_title" => $request->sub_title,
            "provider" => $request->provider,
            "promo_code" => $request->promo_code,
            "offer_start" => datetime_validate_24($request->offer_start),
            "offer_end" => datetime_validate_24($request->offer_end),
            "offer_note" => $request->offer_note,
            "price" => $request->price,
            "currency" => $request->currency,
            "product_link" => $request->product_link,
            "affiliate_link" => $request->affiliate_link,
            "description" => $request->description,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'visible' => $request->visible == 'on' ? 'on' :'off',
            'updated_at'=>date('Y-m-d H:i:s')
        ];
        
        try {
            
        DB::table('product_history')->insert($data_old);
        DB::table('offers')->where('id', $request->id)->update($new_data);
       
        return redirect('/single-product-info/'.$request->id)->with('flashMessageSuccess','Information updated successfully');

        } catch (\Exception $th) {
            return redirect('/single-product-info/'.$request->id)->with('flashMessageDanger',$th->getMessage());
        }
    }

    public function auth_edit_offer_view(Request $request)
    {
        $product_info = DB::table('offers')
            ->select('offers.*', 'users.fullname', 'users.email')
            ->join('users', 'users.id', 'offers.user_id')
            ->where('offers.id', $request->id)->first();

            echo json_encode($product_info);
    }

    public function promo_code_append(Request $request)
    {
        $promo_code = DB::table('offers')->select('promo_code')->where('id',$request->id)->first();
        echo json_encode($promo_code);
    }

    public function product_detail(Request $request)
    {
        $product_info = DB::table('offers')->where('id', $request->id)->first();

        echo json_encode($product_info);
    }

    public function offer_delete(Request $request)
    {
        $DataSet = DB::table('offers')->where('id', $request->id)->delete();
        if ($DataSet == true) {
            return 1;
        }
        else{
            return 0;
        }
    }

    public function auth_add_offer($id)
    {
        $user_name = DB::table('users')->select('username')->where('id', $id)->first();
        return view('dashboard.product_info.auth_offer',compact('user_name'));
    }

    public function submit_offer(AddOfferRequest $request){
        if ($request->id == 0) {
            if ($request->product_cat == "Web-Server") {
                $sub_title = "CPU: ~".$request->sub_title1."~ RAM: ~".$request->sub_title2."~ Storage: ~".$request->sub_title3;
            }else if($request->product_cat == "Hosting"){
                $sub_title = "Storage: ~".$request->sub_title4."~ Bandwidth: ~".$request->sub_title5;
            }else{
                $sub_title = $request->sub_title;
            }
            $product_id = 'DHO-'.mt_rand(100000, 999999);

            $data= [
            "product_cat" => $request->product_cat,
            "offer_cat" => $request->offer_cat,
            "title" => $request->title,
            "sub_title" => $sub_title,
            "provider" => $request->provider,
            "promo_code" => $request->promo_code,
            "offer_start" => datetime_validate_24($request->offer_start),
            "offer_end" => datetime_validate_24($request->offer_end),
            "offer_note" => $request->offer_note,
            "price" => $request->price,
            "currency" => $request->currency,
            "product_link" => $request->product_link,
            "affiliate_link" => $request->affiliate_link,
            "description" => $request->description,
            "product_id" => $product_id,
            'user_id' => $request->user_id,
            'status' => $request->status,
            'created_at'=>date('Y-m-d H:i:s')
            ];
            try {
        
            DB::table('offers')->insert($data);
    
            return back()->with('flashMessageSuccess','Offer added successfully !');

            } catch (\Exception $th) {
                return back()->with('flashMessageDanger',$th->getMessage());
            }
        }else{

            $old_data = DB::table('offers')->where('id', $request->id)->where('user_id', $request->user_id)->first();
        
            $data_old= [
            "product_cat" => $old_data->product_cat,
            "offer_cat" => $old_data->offer_cat,
            "title" => $old_data->title,
            "sub_title" => $old_data->sub_title,
            "provider" => $old_data->provider,
            "promo_code" => $old_data->promo_code,
            "offer_start" => datetime_validate_24($old_data->offer_start),
            "offer_end" => datetime_validate_24($old_data->offer_end),
            "offer_note" => $old_data->offer_note,
            "price" => $old_data->price,
            "currency" => $old_data->currency,
            "product_link" => $old_data->product_link,
            "affiliate_link" => $old_data->affiliate_link,
            "description" => $old_data->description,
            "product_id" => $old_data->product_id,
            'user_id' => $old_data->user_id,
            'user_type' => "user",
            'status' => $old_data->status,
            'visible' => $old_data->visible,
            'created_at'=>date('Y-m-d H:i:s')
            ];

        if ($request->product_cat == "Web-Server") {
            $sub_title = "CPU: ~".$request->sub_title1."~ RAM: ~".$request->sub_title2."~ Storage: ~".$request->sub_title3;
        }else if($request->product_cat == "Hosting"){
            $sub_title = "Storage: ~".$request->sub_title4."~ Bandwidth: ~".$request->sub_title5;
        }else{
            $sub_title = $request->sub_title;
        }
            $new_data= [
            "product_cat" => $request->product_cat,
            "offer_cat" => $request->offer_cat,
            "title" => $request->title,
            "sub_title" => $sub_title,
            "provider" => $request->provider,
            "promo_code" => $request->promo_code,
            "offer_start" => datetime_validate_24($request->offer_start),
            "offer_end" => datetime_validate_24($request->offer_end),
            "offer_note" => $request->offer_note,
            "price" => $request->price,
            "currency" => $request->currency,
            "product_link" => $request->product_link,
            "affiliate_link" => $request->affiliate_link,
            "description" => $request->description,
            'status' => $request->status,
            'updated_at'=>date('Y-m-d H:i:s')
            ];
            try {
            DB::table('product_history')->insert($data_old);
            DB::table('offers')->where('id', $request->id)->where('user_id', $request->user_id)->update($new_data);
    
            return back()->with('flashMessageSuccess','Information updated successfully');

            } catch (\Exception $th) {
                return back()->with('flashMessageDanger',$th->getMessage());
            }
        }

    }

    public function auth_edit_offer_status(Request $request)
    {
        $dataSet = DB::table('offers')->where('id', $request->id)->update(['status' => $request->status]);
    }

    public function auth_multy_select(Request $request)
    {
        if (isset($request->id) && !empty($request->id)) {
            foreach ($request->id as $offer_id) {
                DB::table('offers')->where('id', $offer_id)->update(['status' => $request->status_multi]);
            }
            return back()->with('flashMessageSuccess','Status updated successfully !');
        }else{
            return back()->with('flashMessageDanger','Please select at least one offer !');
        }
    }
    public function aaa()
    {
        $all_offers = DB::table('offers')->get();
        echo '<pre>'; 
        echo '======================<br>';
        print_r($all_offers);
        echo '<br>======================';
        exit();
    }
}
