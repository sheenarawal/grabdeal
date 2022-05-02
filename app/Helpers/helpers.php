<?php


if (!function_exists('updateCoins')) {

    function updateCoins($amount,$user_id,$description,$type)
    {

        $user = \App\Models\User::query()->firstWhere('id',$user_id);
        if ($type == 'debit'){
            $total_balance = $user->wallet_amount - $amount;
            $total_wallet_amount = $user->total_wallet_amount - $amount;
        }else{
            $total_balance = $user->wallet_amount + $amount;
            $total_wallet_amount = $user->total_wallet_amount + $amount;
        }
        \App\Models\Wallet::create([
            'user_id'=>$user_id,
            'type'=>$type,
            'amount'=>$amount,
            'total_balance'=>$total_balance,
            'description'=>$description
        ]);
        $user->update([
                'wallet_amount'=>$total_balance,
                'total_wallet_amount'=>$total_wallet_amount,
            ]);

        return \App\Models\User::query()->firstWhere('id',$user_id);


    }

}

if (!function_exists('special_coins_update')) {

    function special_coins_update($amount,$user_id,$description,$type)
    {


        return \App\Models\User::query()->firstWhere('id',$user_id);


    }

}

if (!function_exists('txn_type_view')) {

    function txn_type_view($type)
    {
        $data = '';
        if ($type == 'credit'){
            $data = '<span class="badge bg-primary">'.$type.'</span>';
        }
        if ($type == 'debit'){
            $data = '<span class="badge bg-danger">'.$type.'</span>';
        }
        return $data;
    }

}
if (!function_exists('wallet_type_view')) {

    function wallet_type_view($type)
    {
        $data = '';
        if ($type == 'special_coin'){
            $data = '<span class="badge bg-info">'.str_replace('_',' ',$type).'</span>';
        }
        if ($type == 'coin'){
            $data = '<span class="badge bg-secondary">'.str_replace('_',' ',$type).'</span>';
        }
        return $data;
    }

}
if (!function_exists('user_type')) {

    function user_type($type)
    {
        $data = '';
        switch ($type){
            case 0 :
                $data = 'developer';
                break;
            case 1 :
                $data = 'admin';
                break;
            case 3 :
                $data = 'vendor';
                break;
            default :
                $data = 'customer';
                break;
        }
        return $data;
    }

}

if (!function_exists('create_refer_code')) {

    function create_refer_code($user_id)
    {
        $user = \App\Models\User::firstWhere('id',$user_id);
        $timestamp  = \Carbon\Carbon::parse($user->created_at)->format('hsi');
        return $user->name.$user->id.$timestamp;

    }

}
