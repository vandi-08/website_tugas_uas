<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $items = Cart::with('product')->get();
        $total = $items->sum(fn($item) => $item->product->price * $item->quantity);
        return view('payment.index', compact('items', 'total'));
    }

    public function checkout(Request $request)
    {
        $items = Cart::all();

        // ✅ Cek apakah keranjang kosong
        if ($items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja kosong!');
        }

        $total = $items->sum(fn($item) => $item->product->price * $item->quantity);

        $payment = Payment::create([
            'payment_id' => Str::uuid(),
            'cart_id' => $items->first()->id, // ✅ pastikan ada isi
            'amount' => $total,
            'payment_method' => 'Transfer Bank',
            'status' => 'Lunas',
            'paid_at' => now(),
        ]);

        // ✅ Hapus data keranjang setelah checkout (dengan aman)
        Cart::query()->delete();

        return view('payment.invoice', compact('payment'));
    }
}
