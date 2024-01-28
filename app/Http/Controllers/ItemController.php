<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Type;

use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{


    // ログインしていない場合はログインページへ移動させる
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 商品一覧取得
    public function index(Request $request)
    {
        $items = Item::all();
        $keyword = "";
        return view('item.index', compact('items', 'keyword'));
    }

    //登録画面表示
    public function add(Request $request)
    {
        $types = Type::all();

        return view('item.add', compact('types'));
    }

    //編集画面表示
    public function edit(Request $request)
    {
        //指定されたidと同じidのレコードを取得する
        $item = Item::where('id', '=', $request->id)->first();
        $types = Type::all();
        //ddは処理が止まるでデバック
        //dd($item);
        return view('item.edit', [
            'item' => $item,
            'types' => $types
        ]);
    }

    //商品登録
    public function create(Request $request)
    {
        // バリデーション
        $this->validate($request, [
            'name' => 'required|max:100',
        ]);

        Item::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'type_id' => $request->type_id,
            'detail' => $request->detail,
        ]);

        return redirect('/items');
    }

    //商品更新
    public function update(Request $request)
    {
        //指定されたidと同じidのレコードを取得して更新する
        Item::find($request->id)->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'detail' => $request->detail,
        ]);
        return redirect('/items');
    }

    //商品削除
    public function destroy(Request $request)
    {
        Item::find($request->id)->delete();
        return redirect('/items');
    }
}
