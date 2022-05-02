<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CoinProfit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class CoinProfitController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()){
            $profit = CoinProfit::latest()->get();
            return DataTables::of($profit)
                ->addIndexColumn()
                ->addColumn('action',function ($row){
                    return $this->action($row);
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }


    public function create()
    {
        return view('Backend.CoinProfit.create');
    }

    public function edit(CoinProfit $coinProfit)
    {

        return view('Backend.CoinProfit.edit',compact('coinProfit'));
    }


    public function store(Request $request)
    {
        $valid = $this->valid($request->all());
        if ($valid->fails()){
            return Redirect::back()->withInput()->withErrors($valid->messages());
        }
        CoinProfit::create([
            'coins'=>$request->amount,
            'profit'=>$request->profit,
            'coin_profit'=>$request->total_amount,
            'description'=>$request->description,
        ]);
        return Redirect::route('backend.coinProfit.create')->with('success','Coin Profit Add Successfull');
    }


    public function action($value)
    {
        $data = '<a class="btn btn-success p-2" href="'.route('backend.coinProfit.edit',$value).'"><i class="bx bxs-edit"></i></a>
                <a class="btn btn-danger p-2 ms-2 " href="'.route('backend.coinProfit.delete',$value).'"><i class="bx bxs-trash"></i></a>';
        return $data;
    }


    public function valid($data)
    {
        return Validator::make($data, [
            'amount'=>['required'],
            'profit'=>['required'],
            'total_amount'=>['required'],
            'description'=>['required'],
        ]);
    }


    public function update(Request $request, CoinProfit $coinProfit)
    {
        $valid = $this->valid($request->all());
        if ($valid->fails()){
            return Redirect::back()->withInput()->withErrors($valid->messages());
        }
        $coinProfit->update([
            'coins'=>$request->amount,
            'profit'=>$request->profit,
            'coin_profit'=>$request->total_amount,
            'description'=>$request->description,
        ]);
        return Redirect::route('backend.coinProfit.create')->with('success','Coin Profit Add Successfull');
    }


    public function destroy(CoinProfit $coinProfit)
    {
        $coinProfit->delete();
        return Redirect::route('backend.coinProfit.create')->with('success','Coin Profit Delete successfull');
    }
}
