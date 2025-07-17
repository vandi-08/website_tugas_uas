@extends('layouts.app')
@section('title', 'Invoice')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire({
    title: 'Pembayaran Berhasil!',
    html: `<strong>ID Pembayaran:</strong> {{ $payment->payment_id }}<br><strong>Total:</strong> Rp{{ number_format($payment->amount, 0, ',', '.') }}`,
    icon: 'success',
    confirmButtonText: 'OK'
  }).then(() => {
    window.location.href = "/";
  });
</script>
@endsection
