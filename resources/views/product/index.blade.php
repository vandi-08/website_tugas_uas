@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<h2 class="text-center text-white mb-5">Daftar Produk</h2>

<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($products as $product)
    <div class="col">
      <div class="card h-100 bg-dark text-white shadow-sm border-secondary">

        {{-- Gambar Produk --}}
        <div class="image-wrapper">
          <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
        </div>

        {{-- Info Produk --}}
        <div class="card-body text-center">
          <h5 class="card-title">{{ $product->name }}</h5>
          <p class="card-text">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

          {{-- Tombol Beli --}}
          <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button class="btn btn-success">Beli</button>
          </form>
        </div>

      </div>
    </div>
  @endforeach
</div>
@endsection
