<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::paginate(10);
        return view('admin.Kategori.index', compact('data'));
    }

    public function create()
    {
        return view('admin.Kategori.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'required',
        ]);

        Category::create([
            'nama' => $request->input('kategori'),
        ]);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan');
    }


    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('kategori')->with('error', 'Kategori tidak ditemukan');
        }

        $category->delete();

        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
