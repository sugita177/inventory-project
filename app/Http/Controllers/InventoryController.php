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

    public function update(Request $request, Check $check) {
        $inventories = Inventory::where('check_id', $check->id)->get();
        foreach($inventories as $inventory) {
            $validated = $request->validate([
                ($inventory->id).'_inventory_number' => 'required | integer | min:0',
                ($inventory->id).'_shortage_number'  => 'required | integer | min:0',
                ($inventory->id).'_checked'          => 'required | boolean',
            ]);
            $parameters = [
                'inventory_number' => $validated[($inventory->id).'_inventory_number'],
                'shortage_number'  => $validated[($inventory->id).'_shortage_number' ],
                'checked'          => $validated[($inventory->id).'_checked'         ]
            ];
            $inventory->update($parameters);
        }
        $request->session()->flash('message', '途中保存しました');
        
        return back();
    }
}
