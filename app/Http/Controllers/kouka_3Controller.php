<?php

namespace App\Http\Controllers;

use App\Memo;
use Illuminate\Http\Request;

class kouka_3Controller extends Controller
{

    // メイン画面
    public function index(Request $request)
    {
        $items = Memo::all();
        $param = ['input' => '','items' => $items];
        return view('kouka_3.index', $param);
    }

    // 検索
    public function find(Request $request)
    {
        $item = Memo::where('name',$request->input)->first();
        return view('kouka_3.show', ['item' => $item]);
    }

    // 詳細画面
    public function show(Request $request)
    {
        $item = Memo::where('id', $request->id)->first();
        return view('kouka_3.show', ['item' => $item]);
    }

    // 新規登録
    public function add(Request $request)
    {
        return view('kouka_3.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Memo::$rules);
        $memo = new Memo;
        $form = $request->all();
        unset($form['_token']);
        $memo->fill($form)->save();
        return redirect('/kouka3');
    }

    // 更新
    public function edit(Request $request)
    {
        $item = Memo::find($request->id);
        return view('kouka_3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Memo::$rules);
        $memo = Memo::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $memo->fill($form)->save();
        return redirect('/kouka3');
    }

    // 削除
    public function del(Request $request)
    {
        $item = Memo::find($request->id);
        return view('kouka_3.del', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Memo::find($request->id)->delete();
        return redirect('/kouka3');
    }
}
