<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Check;
use App\Models\Article;
use App\Models\Inventory;

class CheckController extends Controller
{
    public function create() {
        return view('check.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'check_start_date' => 'required',
            'check_start_time' => 'required'
        ]);

        $validated['user_id'] = auth()->id();

        $check = Check::create($validated);
        $request->session()->flash('message', '新規作成しました');

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

    public function index() {
        $checks = Check::all();
        return view('check.index', compact('checks'));
    }

    public function show(Check $check) {
        $inventories = Inventory::where('check_id', $check->id)->get();
        return view('check.show', compact('check', 'inventories'));
    }
}
