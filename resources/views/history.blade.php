@extends('layouts.app')

@section('content')
<style>
    @font-face {
      font-family: 'Lexend';
      src: url('fonts/Lexend-Medium.ttf');
    }

    body {
      font-family: 'Lexend', sans-serif; 
    }

    .back-image {
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        filter: blur(2px);  
    }
</style>

<div class="container">
    <h2 class="text-center mt-5 mb-4">Riwayat Transaksi</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Lapangan</th>
                <th scope="col">Waktu Main</th>
                <th scope="col">Durasi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>John Doe</td>
                <td>Lapangan Futsal A</td>
                <td>08:00</td>
                <td>2 jam</td>
                <td><span class="badge bg-warning">Booking</span></td>
            </tr>
            <!-- Tambahkan baris riwayat transaksi lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>
@endsection