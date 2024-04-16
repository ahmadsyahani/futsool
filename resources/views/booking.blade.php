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
    <h2 class="text-center mb-4">Booking Lapangan</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Rumah</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Booking</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="mulai_main" class="form-label">Mulai Main</label>
                            <input type="time" class="form-control" id="mulai_main" name="mulai_main" required>
                        </div>
                        <div class="mb-3">
                            <label for="selesai_main" class="form-label">Selesai Main</label>
                            <input type="time" class="form-control" id="selesai_main" name="selesai_main" required>
                        </div>
                        <div class="mb-3">
                            <label for="lapangan" class="form-label">Lapangan</label>
                            <select class="form-select" id="lapangan" name="lapangan" required>
                                <option value="" disabled selected>Pilih Lapangan</option>
                                <optgroup label="Indoor">
                                    <option value="indoor1">Indoor Reguler</option>
                                    <option value="indoor2">Indoor Matras</option>
                                    <option value="indoor3">Indoor Rumput</option>
                                </optgroup>
                                <optgroup label="Outdoor">
                                    <option value="outdoor1">Outdoor Reguler</option>
                                    <option value="outdoor2">Outdoor Matras</option>
                                    <option value="outdoor3">Outdoor Rumput</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="mb-3 mt-4">
                            <h4>Opsi Penyewaan</h4>
                            <div class="form-check form-check-inline mt-3">
                                <input type="checkbox" class="form-check-input" id="sepatu" name="sepatu">
                                <label class="form-check-label" for="sepatu">Sewa Sepatu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="kostum" name="kostum">
                                <label class="form-check-label" for="kostum">Sewa Kostum</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pembayaran</h4>
                    <!-- Tambahkan form pembayaran di sini -->
                    <!-- ... -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection