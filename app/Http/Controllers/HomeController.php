<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\UserUpdateRequest;

class HomeController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Dhaka');
    }
        public function All_clear(){
            $exitCode1 = Artisan::call('cache:clear');
            $exitCode2 = Artisan::call('route:clear');
            $exitCode3 = Artisan::call('config:clear');
            $exitCode1 = Artisan::call('cache:clear');
            $exitCode1 = Artisan::call('view:clear');
            return redirect('/');
        }

    public function index_page()
    {
            $start_date = date_validate(date('Y-m-d'));

        $exlusive_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status')
            ->where('offer_cat','Exclusive')
            ->where('status','active')
            ->where('visible','on')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        $special_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status')
            ->where('offer_cat','Special')
            ->where('status','active')
            ->where('visible','on')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        $regular_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status')
            ->where('offer_cat','Regular')
            ->where('status','active')
            ->where('visible','on')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        $expired_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status')
            ->where('status','active')
            ->where('visible','on')
            ->where("offer_end","<",$start_date . " 00:00:00")
            ->orderBy('created_at', 'DESC')
            ->take(3)
            ->get();
        return view('frontend.index',compact('exlusive_offers','special_offers','regular_offers','expired_offers'));
    }
    public function domain_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('product_cat','Domain')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.domain_offers',compact('all_offers'));
    }
    public function hosting_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('product_cat','Hosting')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.domain_offers',compact('all_offers'));
    }
    public function combo_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('product_cat','Combo')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.domain_offers',compact('all_offers'));
    }
    public function webserver_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('product_cat','Web-Server')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.domain_offers',compact('all_offers'));
    }
    public function all_exclusive_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('offer_cat','Exclusive')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.more_offers',compact('all_offers'));
    }
    public function all_special_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('offer_cat','Special')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.more_offers',compact('all_offers'));
    }
    public function all_regular_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where('offer_cat','Regular')
            ->whereBetween('offer_end', [$start_date . " 00:00:00", "offer_end"])
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.more_offers',compact('all_offers'));
    }
    public function all_expired_offer()
    {
        $start_date = date_validate(date('Y-m-d'));
        $all_offers = DB::table("offers")
            ->select('id','product_id','promo_code','price','title','sub_title','provider','offer_note','offer_start','offer_end','created_at','currency','affiliate_link','product_cat','status','offer_cat')
            ->where('status','active')
            ->where('visible','on')
            ->where("offer_end","<",$start_date . " 00:00:00")
            ->orderBy('created_at', 'DESC')
            ->get();
        return view('frontend.more_offers',compact('all_offers'));
    }
    public function submit_offer($id = null)
    {
        $single_offer = DB::table("offers")
            ->select('id','promo_code','product_link','price','title','sub_title','provider','offer_note','offer_start','offer_end','currency','product_cat','offer_cat','visible','description')
            ->where('user_id', Auth::user()->id)
            ->where('id', $id)
            ->first();
        return view('frontend.submit_offer', compact('single_offer'));
    }
    public function account_info()
    {
        $user_info = DB::table('users')->select('id','mobile','fullname','email','username','country','organization','address','post_code','city')->where('id', Auth::user()->id)->first();
        return view('frontend.account',compact('user_info'));
    }

    public function update_user_info(UserUpdateRequest $request)
    {
        $update_data=[
            "fullname"=> $request->fullname,
            "mobile"=> $request->mobile,
            "address"=> $request->address,
            "city"=> $request->city,
            "post_code"=> $request->post_code,
            "country"=>$request->country,
        ];

        try {
            DB::table('users')->where('id', Auth::user()->id)->update($update_data);
            return redirect()->back()->with('flashMessageSuccess', "Your Account Information Updated.");
        } catch (\Exception $th) {
            
        return redirect()->back()->with('flashMessageDanger', $th->getMessage());
        }
    }

    public function Update_password(Request $request){

        $user_credentials = array('email'=> Auth::user()->email, 'password' => $request->old_password);

        if (Auth::attempt($user_credentials)) {
     
            try {
                DB::table('users')->where('id', Auth::user()->id)->update(['password' => bcrypt($request->new_password)]);
                return redirect()->back()->with('flashMessageSuccess', 'Password Updated Succesfully ! Now login With New Password.'); 
            } catch (\Exception $th) {
                return redirect()->back()->with('flashMessageDanger', $th->getMessage()); 
            }
        
        }else{
            return redirect()->back()->with('flashMessageDanger',"Old password did not match ! Try again or do forget password.");
        }

    }













    public function demo_view()
    {
        return View('files.demo');
    }
    public function demo_order_view()
    {
        return View('files.demo_order_form');
    }
    public function demo_order_q()
    {
        return View('files.demo_form_question');
    }
    public function index()
    {
        return redirect('sign-in');
    }
    public function login()
    {
        return View('files.login');
    }
    public function register()
    {
        return View('files.register');
    }
    public function user_setting()
    {
        $total_credit_admin = 0;
        $event_details = DB::table('events')
        ->where('events.user_id', Auth::user()->id)
        ->orderBy('id', 'ASC')
        //need collection and soldout form order table
        ->get();

        foreach ($event_details as $value) {
            
            $total_credit = DB::table('orders')->select('sold_amount')->where('event_id', $value->id)->get();
            foreach ($total_credit as $group144) {
                $total_credit_admin += $group144->sold_amount;
            }
        }

        return View('files.user_dashboard',compact('total_credit_admin'));
    }
    public function edit_basic_info(Request $request)
    {
        $validatedData = $request->validate([
            "fullname" => "required|string",
            "mobile" => "nullable|numeric",
            "country" => "nullable|string",
            "organaization" => "nullable|string",
        ]);
        $data=[
            'fullname' => $request->fullname,
            'mobile' => $request->mobile,
            'country' => $request->country,
            'organization' => $request->organaization
        ];
        try {
            $dataSet = DB::table('users')->where('id', Auth::user()->id)->update($data);
            return redirect()->route('UserSetting')->with('UserinfoSuccess','Information updated succeessfully !');
        } catch (\Exception $th) {
            return redirect()->route('UserSetting')->with('userinfoDanger',$th->getMessage());
        }
    }
    public function edit_user_avatar(Request $request)
    {
        $validatedData = $request->validate([
            "avatar" => "nullable|mimes:jpeg,bmp,png",
            "avatar_bg" => "nullable|mimes:jpeg,bmp,png|dimensions:width=1280,height=518",
        ]);

        if (!empty($request->avatar)) {
            $upload_path1=EventImageUpload($request->file('avatar'),'profile_pic');
        }else{
            $upload_path1 = DB::table('users')->select('image')->where('id', Auth::user()->id)->first();
            $upload_path1=$upload_path1->image;
        }
        if (!empty($request->avatar_bg)) {
            $upload_path2=EventImageUpload($request->file('avatar_bg'),'profile_cover');
        }else{
            $upload_path2 = DB::table('users')->select('cover_pic')->where('id', Auth::user()->id)->first();
            $upload_path2=$upload_path2->cover_pic;
        }

        $data=[
            'image' => $upload_path1,
            'cover_pic' => $upload_path2,
        ];
        try {
            $dataSet = DB::table('users')->where('id', Auth::user()->id)->update($data);
            return redirect('user-setting/profile')->with('UseravatarSuccess','Information updated succeessfully !');
        } catch (\Exception $th) {
            return redirect('user-setting/profile')->with('UseravatarDanger',$th->getMessage());
        }
    }
    public function edit_user_email(Request $request)
    {
        $validatedData = $request->validate([
            "email" => "required|email|unique:users",
        ]);
        $old_email = DB::table('users')->select('email')->where('id', Auth::user()->id)->first();

        if ($old_email->email == $request->old_email) {
            try {
                $dataSet = DB::table('users')->where('id', Auth::user()->id)->update(['email'=> $request->email]);
                return redirect('user-setting/email')->with('UseremailSuccess','Information updated succeessfully !');
            } catch (\Exception $th) {
                return redirect('user-setting/email')->with('UseremailDanger',$th->getMessage());
            }
        }else{
            return redirect('user-setting/email')->with('UseremailDanger','Old email address is invalid !');
        }
    }
    public function edit_user_pass(Request $request)
    {
        $user_credentials = array('email'=> Auth::user()->email,'password' => $request->old_pass);

        if (Auth::attempt($user_credentials)) {
     
            try {
                DB::table('users')->where('id', Auth::user()->id)->update(['password' => bcrypt($request->pass)]);
                return redirect('user-setting/passsword')->with('UserpassSuccess', 'Password Updated Succesfully ! Now login With New Password.'); 
            } catch (\Exception $th) {
                return redirect('user-setting/passsword')->with('UserpassDanger', $th->getMessage()); 
            }
        
        }else{
            return redirect('user-setting/passsword')->with('UserpassDanger',"Old password is not matched !"); 
        }
    }
}
