<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //semua produk ditampilkan
    public function index()
    {
        $products = Product::latest()->get(); 
        
        return view('products.index', compact('products'));
    }

    //hal tambah produk baru
    public function create()
    {
        return view ('products.create');
    }

    //simpan produk di db
    public function store (StoreProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index')->with('success', 'Produk baru berhasil ditambahkan!');
    }

    // 4. Menampilkan halaman form edit untuk produk tertentu 
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // 5. Memperbarui data produk lama di database 
    public function update(StoreProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.index')->with('success', 'Data produk berhasil diperbarui!');
    }

    // 6. Menghapus produk dari database 
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}