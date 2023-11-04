<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Check;

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
        return back();
    }

    public function index() {
        $checks = Check::all();
        return view('check.index', compact('checks'));
    }
}
