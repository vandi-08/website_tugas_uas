@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')

<div class="text-center mb-5">
  <h2>Tentang Website Ini</h2>
</div>

<div class="card bg-dark border-0">
  <div class="card-body">
    <p class="fs-5">
      Selamat datang di <strong>BlazkStore</strong>, sebuah website e-commerce sederhana yang dirancang sebagai bagian dari tugas UAS <em>Perancangan & Pemograman Web (PPW)</em>.
    </p>

    <p class="fs-5">
      Website ini dibangun menggunakan framework <strong>Laravel</strong> versi 12 dan berjalan di atas lingkungan <strong>XAMPP</strong>. Fitur utama yang tersedia meliputi:
    </p>

    <ul class="fs-5">
      <li>Halaman daftar produk</li>
      <li>Keranjang belanja dinamis</li>
      <li>Proses pembayaran dan tampilan invoice</li>
    </ul>

    <p class="fs-5">
      Pengembangan ini dilakukan oleh:
    </p>
    <ul class="fs-5">
      <li><strong>Nama:</strong> Vandi Marselino</li>
      <li><strong>NIM:</strong> 412311002</li>
      <li><strong>Universitas:</strong> [NIIT]</li>
    </ul>

    <p class="fs-5">
      Harapan saya, website ini dapat menjadi contoh aplikasi e-commerce sederhana untuk user yang mudah digunakan dan dikembangkan lebih lanjut ke depannya.
    </p>
  </div>
</div>

@endsection
