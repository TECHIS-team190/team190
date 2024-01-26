<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    //カテゴリーをプルダウンのオプションタグに指定
    public function type_add(Request $request)
    {
        $types = Type::all();
        //dd($types);
        return view('item.add', compact('types'));
    }

    //カテゴリーをプルダウンのオプションタグに指定
    public function type_edit(Request $request)
    {
        $types = Type::all();
        //dd($types);
        return view('item.edit', compact('types'));
    }
}
