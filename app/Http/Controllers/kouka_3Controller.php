<?php

namespace App\Http\Controllers;

use App\Memo;
use App\User;
use Illuminate\Http\Request;

class kouka_3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = User::all();
        $param = ['input' => '','items' => $items];
        return view('kouka_3.index', $param);
    }

    public function find(Request $request)
    {
        $item = User::where('name',$request->input)->first();
        return view('kouka_3.show', ['item' => $item]);
    }

    public function show(Request $request)
    {
        $item = Memo::where('id', $request->id)->first();
        $item = User::where('id', $request->id)->first();
        return view('kouka_3.show', ['item' => $item]);
    }

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
    public function edit(Request $request)
    {
        $item = Memo::find($request->id);
        $data = User::find($request->id);
        return view('kouka_3.edit', ['item' => $item, 'data' => $data]);
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
