<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Transaction;
use App\Models\Wallet;
use App\Services\MoneyConverter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        $transaction = new Transaction();
        $transaction->value = MoneyConverter::convertReaisToCentavos($request->value);
        $transaction->name = $request->name;
        $transaction->observation = $request->observation;
        $transaction->date = $request->date;
        $transaction->category_id = $request->category_id;
        $transaction->wallet_id = $request->wallet_id;
        $transaction->save();
        return $transaction;
    }
}
