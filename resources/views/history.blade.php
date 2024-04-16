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
                <th scope="col">Penyewa</th>
                <th scope="col">Jenis</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Harga perjam</th>
                <th scope="col">Total harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $b)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $b->user->name }}</td>
                <td>{{ $b->lapangan->jenis }}</td>
                <td>{{ $b->lapangan->loksai }}</td>
                <td>Rp. {{ number_format($b->lapangan->price) }}</td>
                <td>Rp. {{ number_format($b->total_price) }}</td>
                <td><span class="badge bg-warning">Booking</span></td>
            </tr>
            @endforeach
            <!-- Tambahkan baris riwayat transaksi lainnya sesuai kebutuhan -->
        </tbody>
    </table>
</div>
@endsection