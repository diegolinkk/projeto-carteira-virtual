<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Services\MoneyConverter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    function create()
    {
        $userId = Auth::user()->id;
        $userWallets = Wallet::where(['user_id' => $userId])->get();
        $userCategories = Category::where(['user_id' => $userId])->get();
        return view('transaction.create',[
            'userWallets' => $userWallets,
            'userCategories' => $userCategories
        ]);
    }

    function store(Request $request)
    {
        //convert Reais value to Centavos
        $value = MoneyConverter::convertReaisToCentavos($request->value);

        //getting wallet
        $walletId = $request->wallet_id;
        $wallet = Wallet::find($walletId);
        
        DB::beginTransaction();
        
        $transaction = new Transaction();
        $transaction->value = $value;
        $transaction->name = $request->name;
        $transaction->observation = $request->observation;
        $transaction->date = $request->date;
        $transaction->category_id = $request->category_id;
        $transaction->wallet_id = $walletId;
        $transaction->user_id = Auth::user()->id;
        $transaction->save();

        //add balance to wallet
        $wallet->balance = $wallet->balance + $value;
        $wallet->save();

        DB::commit();

        return redirect()->route('index');
    }
}
