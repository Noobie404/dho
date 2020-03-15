<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOfferRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class OfferController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
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
            "description" => $request->description,
            "product_id" => $product_id,
            'user_id' => Auth::user()->id,
            'status' => "pending",
            'created_at'=>date('Y-m-d H:i:s')
        ];
        try {
        
        DB::table('offers')->insert($data);
       
        return redirect()->route('SubmitOffer')->with('flashMessageSuccess','Offer send successfully to admin ! Please wait for varification');

        } catch (\Exception $th) {
            return redirect()->route('SubmitOffer')->with('flashMessageDanger',$th->getMessage());
        }
    }else{

        $old_data = DB::table('offers')->where('id', $request->id)->where('user_id', Auth::user()->id)->first();
        
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
            "description" => $request->description,
            'status' => "pending",
            'updated_at'=>date('Y-m-d H:i:s')
        ];
        try {
            
        DB::table('product_history')->insert($data_old);
        DB::table('offers')->where('id', $request->id)->where('user_id', Auth::user()->id)->update($new_data);
       
        return redirect('/submit-offer/'.$request->id)->with('flashMessageSuccess','Information updated successfully');

        } catch (\Exception $th) {
            return redirect('/submit-offer/'.$request->id)->with('flashMessageDanger',$th->getMessage());
        }
    }
    
}

public function putonhold(Request $request)
{
    if ($request->action == 0) {
        $DataSet = DB::table('offers')->where('id', $request->id)->where('user_id', Auth::user()->id)->update(['visible' => 'off']);
        if ($DataSet == true) {
            return 1;
        }
        else{
            return 0;
        }
    }else{
        $dataSet = DB::table('offers')->where('id', $request->id)->where('user_id', Auth::user()->id)->update(['visible' => 'on']);
        if ($dataSet == true) {
            return 2;
        }
        else{
            return 0;
        }
    }
}

public function offer_delete(Request $request)
{
    $DataSet = DB::table('offers')->where('id', $request->id)->where('user_id', Auth::user()->id)->delete();
    if ($DataSet == true) {
        return 1;
    }
    else{
        return 0;
    }
}
}
