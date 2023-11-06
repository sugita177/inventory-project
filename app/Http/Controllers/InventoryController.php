<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Check;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function store(Check $check) {
        $articles = Article::all();
        foreach($articles as $article) {
            $parameters = [
                'inventory_number' => 0,
                'shortage_number'  => 0,
                'checked'          => false,
            ];
            $parameters['check_id'] = $check->id;
            $parameters['article_id'] = $article->id;

            $inventory = Inventory::create($parameters);
        }

        $inventories = Inventory::where('check_id', $check->id)->get();
        return view('check.show', compact('check', 'inventories'));

    }

    public function update() {
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
