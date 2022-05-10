<?php

namespace App\Http\Controllers;

use App\Models\CoinProfit;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class DashboardController extends Controller
{

    public function index()
    {
        return view('frontend.dashboard');
    }


    public function profile(Request $request)
    {
        $user = User::firstWhere('id',Auth::id());
        if ($request->all()) {
            $valid = Validator::make($request->all(), [
                "profile_name" => ['required'],
                "last_name" => ['required'],
                "country" => ['required'],
                "address" => ['required'],
                "city" => ['required'],
                "postcode" => ['required'],
            ]);
            if ($valid->fails()){
                return Redirect::back()->withErrors($valid->messages())->withInput();
            }
            $user->update([
                'name'=>$request->profile_name,
                'last_name'=>$request->last_name,
            ]);
            return Redirect::route('frontend.profile')->with('success','Profile update successfully');
        }
        return view('frontend.user.profile',compact('user'));
    }


    public function wallet(Request $request)
    {
        $coinProfit = CoinProfit::latest()->get();
        if ($request->all()){
            if (isset($request->coin_profit)&&$request->coin_profit){

            }
            dd($request->all());
        }
        return view('frontend.user.wallet',compact('coinProfit'));
    }


    public function refer_code()
    {
        $users = [];
        if(Auth::user()->refer_code != ''){
            $users = User::where('refer_by',Auth::user()->refer_code)->latest()->get();
        }
        return view('frontend.user.refer',compact('users'));
    }
}
