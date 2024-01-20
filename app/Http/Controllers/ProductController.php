<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function search(Request $request)
    {   
        $query = Product::query();

        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
         // 他のフィールドも必要に応じて追加
        }

        $products = $query->get();

        return view('index', compact('products'));
    }
}
