<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

use Goodby\CSV\Import\Standard\LexerConfig;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;

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

    public function csvImport(Request $request) {
        $file_name = $request->file('csv_file');

        $config      = new LexerConfig();
        $interpreter = new Interpreter();
        $lexer       = new Lexer($config);

        $config->setToCharset("UTF-8");
        $config->setFromCharset("UTF-8");
        $config->setIgnoreHeaderLine(true);

        $data_list = [];

        $interpreter->addObserver(function (array $row) use (&$data_list){
            $data_list[] = [
                'name'     => $row[0],
                'detail'   => $row[1],
                'category' => $row[2],
                'place'    => $row[3],
                'unit'     => $row[4],
                'supplier' => $row[5],
                'remark'   => $row[6],
                'user_id'  => auth()->id()
            ];
        });

        $lexer->parse($file_name, $interpreter);

        $count = 0;
        foreach($data_list as $row){
            //$validated = $request->validate([
            //    'name'     => 'required',
            //    'detail'   => 'max:20',
            //    'category' => 'required | max:20',
            //    'place'    => 'required | max:20',
            //    'unit'     => 'required | max:20',
            //    'supplier' => 'required | max:40',
            //    'remark'   => 'max:400'
            //]);
    //
            //$validated['user_id'] = auth()->id();
            Article::create($row);
            $count++;
        }

        $request->session()->flash('message', $count.'個の在庫対象品データを登録しました');
        return back();
    }
}
