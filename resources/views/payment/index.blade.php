@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
  <h2 class="text-center mb-4">Konfirmasi Pembayaran</h2>

  @if ($items->count() > 0)
    <table class="table text-center table-bordered">
      <thead class="table-dark">
        <tr>
          <th>Produk</th>
          <th>Jumlah</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $item)
          <tr>
            <td>{{ $item->product->name }}</td>
            <td>{{ $item->quantity }}</td>
            <td>Rp{{ number_format($item->product->price * $item->quantity, 0, ',', '.') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <h4 class="text-end">Total: <strong>Rp{{ number_format($total, 0, ',', '.') }}</strong></h4>

    <form action="{{ route('checkout') }}" method="POST" class="text-end mt-3">
      @csrf
      <button class="btn btn-success">Bayar Sekarang</button>
    </form>
  @else
    <div class="alert alert-warning text-center">
      Tidak ada item dalam keranjang untuk dibayar.
    </div>
  @endif
@endsection
