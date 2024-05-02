<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $products = Barang::all();
        return view('products.index', compact('products'));
    }

    public function create() : View
    {
        return view('products.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'seri' => 'required',
            'spesifikasi' => 'required',
            'stok' => 'required',
            'kategori_id' => 'required',
        ]);
        Barang::create([
            'merk' => $request->merk,
            'seri' =>  $request->seri,
            'spesifikasi' => $request->spesifikasi,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori_id,
        ]);
        return redirect()->route('products.index')->with(['success'=>'Data stored successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $products = Barang::findOrFail($id);
        return view('products.show', compact('products'));
    }

    public function edit(string $id) : View
    {
        $products = Barang::findOrFail($id);
        return view('products.edit',  compact('products'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateTarget = Barang::findOrFail($id);
        $request->validate([
            'merk' => 'required',
            'seri' => 'required',
            'spesifikasi' => 'required',
            'stok' => 'required',
            'kategori_id' => 'required',
        ]);
        $updateTarget->update($request->all());
        return redirect()->route('products.index')->with(['success'=>'Data updated successfuly']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteTarget = Barang::findOrFail($id);
        $deleteTarget->delete();
        return redirect()->route('products.index')->with(['success'=>'Product deleted successfully']);
    }
}
