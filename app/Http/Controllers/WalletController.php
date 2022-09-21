<?php

namespace App\Http\Controllers;

use App\Models\{Wallet,Transaction};
use App\Services\MoneyConverter;
use App\Services\TotalBalanceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::where('user_id',Auth::user()->id)->get();
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();

        $totalBalance = TotalBalanceService::getTotalBalance(Auth::user()->id);


        return view('wallet.index',[
            'wallets' => $wallets,
            'transactions' => $transactions,
            'totalBalance' => $totalBalance]);
    }

    public function create()
    {
        return view('wallet.create');
    }

    public function store(Request $request)
    {
        $wallet = new Wallet();
        $wallet->name = $request->name;
        $wallet->user_id = Auth::user()->id;
        $wallet->balance = 0;
        $wallet->save();
        return redirect()->route('index') ;

    }

}
