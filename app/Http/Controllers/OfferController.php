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
        $product_id = 'DHO-'.mt_rand(100000, 999999);

        $data= [
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

    }
}
