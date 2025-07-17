@extends('layouts.app')

@section('title', 'Keranjang Belanja')

@section('content')
  <h2 class="text-center mb-4">Keranjang Belanja</h2>

  @if ($items->count() > 0)
    <table class="table table-bordered text-center">
      <thead class="table-dark">
        <tr>
          <th>Produk</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @php $total = 0; @endphp
        @foreach ($items as $item)
          @php
            $subtotal = $item->product->price * $item->quantity;
            $total += $subtotal;
          @endphp
          <tr>
            <td>{{ $item->product->name }}</td>
            <td>Rp{{ number_format($item->product->price, 0, ',', '.') }}</td>
            <td>{{ $item->quantity }}</td>
            <td>Rp{{ number_format($subtotal, 0, ',', '.') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="text-end">
      <h4>Total: <strong>Rp{{ number_format($total, 0, ',', '.') }}</strong></h4>
      <a href="{{ route('payment') }}" class="btn btn-success mt-3">Bayar Sekarang</a>
    </div>
  @else
    <div class="alert alert-info text-center">
      Keranjang belanja masih kosong.
    </div>
  @endif
@endsection
