<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Place;
use App\Models\Supplier;

use Goodby\CSV\Import\Standard\LexerConfig;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;

class ArticleController extends Controller
{
    public function create() {
        $categories = Category::All();
        $places = Place::All();
        $suppliers = Supplier::All();
        return view('article.create', compact('categories', 'places', 'suppliers'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'detail'   => 'max:20',
            'category_id' => 'required | integer',
            'place_id'    => 'required | integer',
            'unit'     => 'required | max:20',
            'supplier_id' => 'required | integer',
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
        $categories = Category::All();
        $places = Place::All();
        $suppliers = Supplier::All();
        return view('article.edit', compact('article', 'categories', 'places', 'suppliers'));
    }

    public function update(Request $request, Article $article) {
        $validated = $request->validate([
            'detail'   => 'max:20',
            'category_id' => 'required | integer',
            'place_id'    => 'required | integer',
            'unit'     => 'required | max:20',
            'supplier_id' => 'required | integer',
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
        //$file_name = $request->file('csv_file');
        $validated = $request -> validate(
            [
                'csv_file' => 'required | file | mimetypes:text/csv'
            ],
            [
                'csv_file.required' => 'ファイルは必ず指定してください。',
                'csv_file.file' => 'ファイルを指定してください。',
                'csv_file.mimetypes' => 'CSVファイルを指定してください。'
            ]
        );


        $config      = new LexerConfig();
        $interpreter = new Interpreter();
        $lexer       = new Lexer($config);

        $config->setToCharset("UTF-8");
        $config->setFromCharset("UTF-8");
        $config->setIgnoreHeaderLine(true);

        $data_list = [];

        $interpreter->addObserver(function (array $row) use (&$data_list){
            $category = Category::where('name', $row[2])->first();
            if(is_null($category)) {
                $category_id = Category::where('name', '未登録')->first()->id;
            } else {
                $category_id = $category->id;
            }

            $place    = Place::where('name', $row[3])->first();
            if(is_null($place)) {
                $place_id = Place::where('name', '未登録')->first()->id;
            } else {
                $place_id = $place->id;
            }

            $supplier = Supplier::where('name', $row[5])->first();
            if(is_null($supplier)) {
                $supplier_id = Supplier::where('name', '未登録')->first()->id;
            } else {
                $supplier_id = $supplier->id;
            }

            $data_list[] = [
                'name'        => $row[0],
                'detail'      => $row[1],
                'category_id' => $category_id,
                'place_id'    => $place_id,
                'unit'        => $row[4],
                'supplier_id' => $supplier_id,
                'remark'      => $row[6],
                'user_id'     => auth()->id()
            ];
        });

        $lexer->parse($validated['csv_file'], $interpreter);

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
