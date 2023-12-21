<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Place;

class PlaceController extends Controller
{
    public function create() {
        return view('place.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'detail'   => 'max:400',
        ]);

        $place = Place::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index() {
        $places = Place::where('name', '!=', '未登録')->get();
        return view('place.index', compact('places'));
    }

    public function show(Place $place) {
        return view('place.show', compact('place'));
    }

    public function edit(Place $place) {
        return view('place.edit', compact('place'));
    }

    public function update(Request $request, Place $place) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'detail'   => 'max:400',
        ]);

        $place->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Place $place) {
        $place->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('place.index');
    }
}
