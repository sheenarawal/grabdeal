<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Special_wallet;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class WalletController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->id){
                $wallet = Wallet::where('user_id',$request->id)->latest()->get();
            }else{
                $wallet = Wallet::latest()->get();
            }
            return DataTables::of($wallet)
                ->addIndexColumn()
                ->addColumn('user',function ($row){
                    return $row->user?$row->user->name:'No Name';
                })
                ->editColumn('type',function ($row){
                    return txn_type_view($row->type);
                })
                ->editColumn('wallet_type',function ($row){
                    return wallet_type_view($row->wallet_type);
                })
                ->addColumn('total_amount',function ($row){
                    return $row->user?$row->user->total_wallet_amount:'--';
                })
                ->rawColumns(['type','wallet_type'])
                ->make(true);
        }
    }


    public function create()
    {
        $users = User::get();
        return view('Backend.Wallet.create',compact('users'));
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $user = \App\Models\User::query()->firstWhere('id',$request->users);
        $special_amount = $user->special_wallet_amount;
        $wallet_amount = $user->wallet_amount;
        $total_wallet_amount = $user->total_wallet_amount;
        if ($request->type == 'debit'){
            $total_balance = ($request->coin_for == 'special_coin'?$special_amount:$wallet_amount) - $request->amount;
            $total_wallet_amount = $user->total_wallet_amount - $request->amount;
        }else{
            $total_balance = ($request->coin_for == 'special_coin'?$special_amount:$wallet_amount) + $request->amount;
            $total_wallet_amount = $user->total_wallet_amount + $request->amount;
        }
        if ($request->coin_for == 'special_coin'){
            $update_user = [
                'special_wallet_amount'=>$total_balance,
                'total_wallet_amount'=>$total_wallet_amount,
            ];
        }else{
            $update_user = [
                'wallet_amount'=>$total_balance,
                'total_wallet_amount'=>$total_wallet_amount,
            ];
        }
        Wallet::create([
            'user_id'=>$request->users,
            'wallet_type'=>$request->coin_for,
            'type'=>$request->type,
            'amount'=>$request->amount,
            'total_balance'=>$total_balance,
            'description'=>$request->description
        ]);

        $user->update($update_user);


        return Redirect::route('backend.wallet.create')->with('success','Wallet Updated Successfully');
    }


    public function user(User $user)
    {
        $users = User::get();
        return view('Backend.Wallet.create',compact('users','user'));
    }


    public function valid($data)
    {
        Validator::make($data,[
            ''
        ]);
    }


    public function edit(Wallet $wallet)
    {
        //
    }


    public function update(Request $request, Wallet $wallet)
    {
        //
    }


    public function destroy(Wallet $wallet)
    {
        //
    }
}
