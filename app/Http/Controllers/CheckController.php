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

    public function confirmEdit(Check $check) {
        return view('check.confirm_edit', compact('check'));
    }

    public function confirm(Request $request, Check $check) {
        $validated = $request->validate([
            'check_end_date' => 'required',
            'check_end_time' => 'required'
        ]);

        $validated['completed'] = true;

        $check->update($validated);
        $request->session()->flash('message', '在庫チェック完了を確定しました');
        return back();
    }

    public function cancel(Request $request,Check $check) {
        $validated['check_end_date'] = null;
        $validated['check_end_time'] = null;
        $validated['completed'] = false;

        $check->update($validated);
        $request->session()->flash('message', '在庫チェック完了を取り消しました');
        return back();
    }

    public function deleteEdit(Check $check) {
        return view('check.delete_edit', compact('check'));
    }

    public function destroy(Request $request, Check $check) {
        $inventories = Inventory::where('check_id', $check->id)->get();
        foreach($inventories as $inventory) {
            $inventory->delete();
        }
        $check->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('check.index');
    }
}
