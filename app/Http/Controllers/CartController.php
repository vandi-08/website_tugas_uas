<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::with('product')->get();
        return view('cart.index', compact('items'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');

        $existing = Cart::where('product_id', $productId)->first();
        if ($existing) {
            $existing->quantity += 1;
            $existing->save();
        } else {
            Cart::create([
                'product_id' => $productId,
                'quantity' => 1,
                'added_at' => now(),
            ]);
        }

        return redirect()->route('cart.index');
    }

    // ✅ Tambahan untuk tombol +
    public function increase($id)
    {
        $item = Cart::findOrFail($id);
        $item->quantity += 1;
        $item->save();

        return redirect()->route('cart.index');
    }

    // ✅ Tambahan untuk tombol -
    public function decrease($id)
    {
        $item = Cart::findOrFail($id);
        if ($item->quantity > 1) {
            $item->quantity -= 1;
            $item->save();
        } else {
            $item->delete(); // Hapus kalau quantity = 0
        }

        return redirect()->route('cart.index');
    }
}
