<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function store(Request $request, Check $check) {
        //$validated = $request->validate([
        //    'name'     => 'required | max:20',
        //    'detail'   => 'max:20',
        //    'category' => 'required | max:20',
        //    'place'    => 'required | max:20',
        //    'unit'     => 'required | max:20',
        //    'supplier' => 'required | max:40',
        //    'remark'   => 'max:400'
        //]);
//
        //$validated['user_id'] = auth()->id();
//
        //$article = Article::create($validated);
        //$request->session()->flash('message', '保存しました');
        //return back();
    }
}
