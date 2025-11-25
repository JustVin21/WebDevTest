<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function createTransactionViaBrowser()
{

    $productId = 1;
    $quantity = 2;

    $product = Product::find($productId);

    if (!$product) {
        return "Produk tidak ditemukan!";
    }

    if ($product->stock < $quantity) {
        return "Stok tidak mencukupi!";
    }

    $totalPrice = $product->price * $quantity;

    $product->stock -= $quantity;
    $product->save();

    $transaction = Transaction::create([
        'product_id' => $productId,
        'quantity' => $quantity,
        'total_price' => $totalPrice
    ]);

    return "
        Transaksi berhasil!<br><br>
        Produk: {$product->name}<br>
        Quantity: {$quantity}<br>
        Total Price: {$totalPrice}<br><br>
        Sisa Stok: {$product->stock}
    ";
}

}

