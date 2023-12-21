<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'detail'   => 'max:400',
        ]);

        $category = Category::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index() {
        $categories = Category::where('name', '!=', '未登録')->get();
        return view('category.index', compact('categories'));
    }

    public function show(Category $category) {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category) {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'detail'   => 'max:400',
        ]);

        $category->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Category $category) {
        $category->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('category.index');
    }
}
