<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $categories = Kategori::all();
        return view('kategori.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $jenis = [
            'A',
            'M',
            'BHP', 
            'BTHP',
        ];
        return view('kategori.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'deskripsi' => 'required|min:5',
        ]);

        Kategori::create([
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('categories.index')->with(['success'=>'Data tersimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        // $options = [
        //     'A' => 'Alat',
        //     'M' => 'Modal',
        //     'BHP' => 'Bahan Habis Pakai', 
        //     'BTHP' => 'Bahan Tidak Habis Pakai',
        // ];
        $showCategories = Kategori::findOrFail($id);
        return view('kategori.show', compact('showCategories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $categories = Kategori::findOrFail($id);
        $options = [
            'A' => 'Alat',
            'M' => 'Modal',
            'BHP' => 'Bahan Habis Pakai', 
            'BTHP' => 'Bahan Tidak Habis Pakai',
        ];
        return view('kategori.edit', compact('categories', 'options'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $request->validate([
            'kategori' => 'required',
            'deskripsi'=> 'required',
        ]);

        $category = Kategori::findOrFail($id);

        $category->update($request->all());
        // dd($category);

        return redirect()->route('categories.index')->with(['success'=> 'Data edited successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Kategori::findOrFail($id);
        $categories->delete();

        return redirect()->route('categories.index')->with(['success'=>'Data deleted successfuly']);
    }
    public function apiKategori(){
        $categories = Kategori::select('id', 'kategori', 'deskripsi')->get();
        $data = array("data" => $categories);
        return response()->json($data); 
    }
}
