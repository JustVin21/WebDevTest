<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $columns = [
    //     ['id', 'Primary key'],
    //     ['name', 'Nama produk'],
    //     ['price', 'Harga produk'],
    //     ['stock', 'Jumlah stok tersedia'],
    //     ['created_at', 'Otomatis'],
    // ];
    // return view('product.index', compact('columns'));
    // }

    public function index()
    {
        return Product::all();
    }

   public function store()
{
    $product = Product::create([
        'name' => 'Kipas gaming',
        'price' => 50000,
        'stock' => 10
    ]);

    return response()->json([
        'message' => 'Produk berhasil ditambahkan',
        'data' => $product
    ]);
}

public function update($id)
{
    $product = Product::findOrFail($id);
    $product->update([
        'name' => 'Mouse Gaming',
        'stock' => 5,
        'price' => 750000,
    ]);

    return response()->json([
        'message' => 'Produk berhasil diupdate',
        'data' => $product
    ]);
}

    public function destroy($id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json([
            'message' => 'Produk tidak ditemukan'
        ], 404);
    }

    $product->delete();

    return response()->json([
        'message' => 'Produk berhasil dihapus',
        'data' => $product
    ]);
}

}
