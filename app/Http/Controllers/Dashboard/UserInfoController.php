<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class UserInfoController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function user_info()
    {
        return view('dashboard.user_info.user_info');
    }

    public function user_dashboard()
    {
        $all_offers = DB::table('offers')->select('id','product_id','title','product_cat','offer_cat','offer_end','status','visible')->where('user_id', Auth::user()->id)->get();
        return view('frontend.dashboard',compact('all_offers'));
    }

    public function user_info_dt(Request $request)
    {
        $dataSet = DB::table("users")
            ->select('id','username','fullname','email','mobile','created_at','status', DB::raw('(SELECT IFNULL(count(offers.id),0) FROM `offers` WHERE users.id=offers.user_id) as total_product'))
            ->where('user_type', 'user')
            ->orderBy('created_at', 'DESC');

        return Datatables::of($dataSet)->make(true);
    }

    public function user_info_modal(Request $request)
    {
        $user_info = DB::table('users')->select('fullname','country','organization','address', DB::raw('(SELECT IFNULL(count(offers.id),0) FROM `offers` WHERE users.id=offers.user_id) as event_count'))->where('id', $request->id)->first();
        echo json_encode($user_info);
    }

    public function suspend_user(Request $request)
    {
        $data = [
            'status' => $request->status == 1 ? 0 : 1
        ];
        try {
            DB::beginTransaction();
            $dataSet = DB::table('users')->where('id', $request->id)->update($data);
            DB::commit();
            return 1;
        } catch (\Throwable $th) {
            DB::rollback();
            return 0;
        }
    }

    public function about_us()
    {
        $about_us = DB::table('about_us')->select('about')->first();
        return view('dashboard.user_info.about_us',compact('about_us'));
    }

    public function about_us_update(Request $request)
    {
        $data = [
            'about' => $request->about,
            'updated_at' => Date('Y-m-d H:i:s')
        ];
        try {
            $about_us = DB::table('about_us')->where('id', 1)->update($data);
            return back()->with('flashMessageSuccess','Information Updated successfully !');
        } catch (Exeption $th) {
            return back()->with('flashMessageDanger',$th->getMessage());
        }
    }

    public function add_user()
    {
        return view('dashboard.user_info.add_user');
    }

    public function user_details($id)
    {
        $single_user = DB::table('users')->where('id', $id)->first();
        return view('dashboard.user_info.single_user', compact('single_user'));
    }

    public function update_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username,' . $request->id,
            'email' => 'required|unique:users,email,' . $request->id,
            // 'email' => Rule::unique('users')->ignore($request->email,$request->id),
            // 'email' => [ 
            //     'required', 
            //     Rule::unique('users', 'email')->ignore($request->email, 'email'), 
            // ],
            
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator);
            }else{
                try {
                    $update_data=[
                        "username"=> $request->username,
                        "fullname"=> $request->fullname,
                        "mobile"=> $request->mobile,
                        "address"=> $request->address,
                        "city"=> $request->city,
                        "post_code"=> $request->post_code,
                        "country"=>$request->country,
                    ];
                    if ($request->password != null) {
                        $update_data['password'] = bcrypt($request->password);
                    }
                    DB::table('users')->where('id', $request->id)->update($update_data);
                    return redirect()->back()->with('flashMessageSuccess', "Account Information Updated Successfully !");
                } catch (Exeption $th) {
                    return redirect()->back()->with('flashMessageDanger', $th->getMessage());
                }
            }
    }

    public function delete_user(Request $request)
    {
        $data = DB::table('offers')->where('user_id' ,$request->id)->delete();
        $data = DB::table('users')->where('id' ,$request->id)->delete();
        if ($data == true) {
            return 1;
        }else{
            return 0;
        }
    }
}