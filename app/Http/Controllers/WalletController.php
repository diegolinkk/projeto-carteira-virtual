<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Services\MoneyConverter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function index()
    {
        $wallets = Wallet::where('user_id',Auth::user()->id)->get();
        return view('wallet.index',['wallets' => $wallets]);
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
