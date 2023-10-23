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

        $article = Article::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index() {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }
}
