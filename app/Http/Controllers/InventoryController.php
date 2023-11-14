<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Check;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //public function store(Check $check) {
    //    $articles = Article::all();
    //    foreach($articles as $article) {
    //        $parameters = [
    //            'inventory_number' => 0,
    //            'shortage_number'  => 0,
    //            'checked'          => false,
    //        ];
    //        $parameters['check_id'] = $check->id;
    //        $parameters['article_id'] = $article->id;
//
    //        $inventory = Inventory::create($parameters);
    //    }
//
    //    $request->session()->flash('message', '新規作成しました');
    //    return back();
    //}

    public function update(Request $request, Check $check) {
        $inventories = Inventory::where('check_id', $check->id)->get();
        foreach($inventories as $inventory) {
            $validated = $request->validate([
                ($inventory->id).'_inventory_number' => 'required | integer | min:0',
                ($inventory->id).'_shortage_number'  => 'required | integer | min:0',
                ($inventory->id).'_checked'          => 'required | boolean'
            ]);
            $parameters = [
                'inventory_number' => $validated[($inventory->id).'_inventory_number'],
                'shortage_number'  => $validated[($inventory->id).'_shortage_number' ],
                'checked'          => $validated[($inventory->id).'_checked'         ]
            ];
            $inventory->update($parameters);
        }
        $request->session()->flash('message', '途中保存しました');
        
        return view('check.show', compact('check', 'inventories'));
    }

    public function latestState() {
        $articles = Article::all();
        $latest_inventories = [];
        $inventories_joined = Inventory::select()->join('checks', 'checks.id' ,'=', 'inventories.check_id')->get();
        
        foreach($articles as $article) {
            $inventory = $inventories_joined
                            ->where('article_id', $article->id)
                            ->where('checked', true)
                            ->where('completed', true)
                            ->sortByDesc('check_start_date')
                            ->sortByDesc('check_start_time')
                            ->first();
            if(isset($inventory)) {
                $latest_inventories[] = $inventory;
            } else {
                //$latest_inventories[] = 'no_data';
            }
        }
        return view('inventory.latest_state', compact('latest_inventories'));
    }
}
