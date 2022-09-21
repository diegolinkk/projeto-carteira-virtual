<?php

namespace App\Services;
use App\Models\Wallet;

class TotalBalanceService
{
    static function getTotalBalance($userId)
    {
        //get total balance 
        $totalBalance = 0;
        foreach(Wallet::where('user_id',$userId)->get() as $wallet)
        {
            $totalBalance += $wallet->balance;
        }
        
        $totalBalance = MoneyConverter::convertCentavosToReais($totalBalance);

        return number_format($totalBalance,2);

    }
}