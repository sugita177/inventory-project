<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'detail'   => 'max:20',
            'category' => 'required | max:20',
            'place'    => 'required | max:20',
            'unit'     => 'required | max:20',
            'supplier' => 'required | max:40',
            'remark'   => 'max:400'
        ]);

        $validated['user_id'] = auth()->id();

        $article = Article::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index() {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function show(Article $article) {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article) {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article) {
        $validated = $request->validate([
            'detail'   => 'max:20',
            'category' => 'required | max:20',
            'place'    => 'required | max:20',
            'unit'     => 'required | max:20',
            'supplier' => 'required | max:40',
            'remark'   => 'max:400'
        ]);

        $validated['user_id'] = auth()->id();

        $article->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Article $article) {
        $article->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('article.index');
    }

    public function csvImport() {
        
    }
}
