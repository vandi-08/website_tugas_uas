@extends('layouts.app')
@section('title', 'Keranjang Belanja')
@section('content')
<h2 class="text-center mb-5">Keranjang Belanja</h2>

@if($items->count() > 0)
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
      <tr>
        <td>{{ $item->product->name }}</td>
        <td>Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
        <td class="text-center">
          <form action="{{ route('cart.decrease', $item->id) }}" method="POST" style="display:inline">
            @csrf
            <button class="btn btn-sm btn-secondary">-</button>
          </form>

          <span class="mx-2">{{ $item->quantity }}</span>

          <form action="{{ route('cart.increase', $item->id) }}" method="POST" style="display:inline">
            @csrf
            <button class="btn btn-sm btn-secondary">+</button>
          </form>
        </td>
        <td>Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="text-end">
    <a href="{{ route('payment') }}" class="btn btn-success">Bayar Sekarang</a>
  </div>
@else
  <p class="text-center">Keranjang belanja kosong.</p>
@endif
@endsection
