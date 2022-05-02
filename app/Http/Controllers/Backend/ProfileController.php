<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('Backend.dashboard');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Wallet $wallet)
    {
        //
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
