<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $categories = Category::whereUserId($user_id)->get();
        return view('category.index',['categories' => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        Category::create($request->except('_token'));
        return redirect()->route('category.index');
    }
}
