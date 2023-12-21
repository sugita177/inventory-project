<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function create() {
        return view('supplier.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'address' => 'required',
            'posting_code' => 'required',
            'telephone_number' => 'required',
            'fax_number' => 'present',
            'remark' => 'max:400',
        ]);

        $supplier = Supplier::create($validated);
        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index() {
        $suppliers = Supplier::where('name', '!=', '未登録')->get();
        return view('supplier.index', compact('suppliers'));
    }

    public function show(Supplier $supplier) {
        return view('supplier.show', compact('supplier'));
    }

    public function edit(Supplier $supplier) {
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier) {
        $validated = $request->validate([
            'name'     => 'required | max:20',
            'address' => 'required',
            'posting_code' => 'required',
            'telephone_number' => 'required',
            'fax_number' => 'present',
            'remark' => 'max:400',
        ]);

        $supplier->update($validated);
        $request->session()->flash('message', '更新しました');
        return back();
    }

    public function destroy(Request $request, Supplier $supplier) {
        $supplier->delete();
        $request->session()->flash('message', '削除しました');
        return redirect()->route('supplier.index');
    }
}
