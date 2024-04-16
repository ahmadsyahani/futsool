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
    <h2 class="text-center mb-4">List Booking</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penyewa</th>
                    <th>Nama Lapangan</th>
                    <th>Mulai Main</th>
                    <th>Selesai Main</th>
                    <th>Lama Main</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ujang</td>
                    <td>Lapangan Futsal A</td>
                    <td>08:00</td>
                    <td>10:00</td>
                    <td>2 jam</td>
                    <td><span class="badge bg-warning">Booking</span></td>
                </tr>                
                <tr>
                    <td>2</td>
                    <td>Slamet</td>
                    <td>Lapangan Futsal B</td>
                    <td>10:00</td>
                    <td>12:00</td>
                    <td>1 jam</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                </tr>
                <!-- Tambahkan baris sesuai dengan data yang dimiliki -->
            </tbody>
        </table>
    </div>
</div>

@endsection