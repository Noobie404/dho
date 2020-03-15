<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $offer_count = DB::table('offers')->count();
        $user_count = DB::table('users')->where('user_type', 'user')->count();
        $pending_count = DB::table('offers')->where('status', 'pending')->count();
        $active_count = DB::table('offers')->where('status', 'active')->whereDate('offer_end', '>=', Carbon::now()->toDateString())->count();
        $fexpire_count = DB::table('offers')->where('status', 'expire')->count();
        $dexpire_count = DB::table('offers')->whereDate('offer_end', '<', Carbon::now()->toDateString())->count();
        return view('dashboard.index',compact('offer_count','user_count','pending_count','active_count','fexpire_count','dexpire_count'));
    }
}