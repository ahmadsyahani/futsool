<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Lapangan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        // berisi data booking user saat ini
        $bs = Booking::where('user_id', Auth::user()->id)->get();
        return view('booking', compact('bs'));
    }

    // menampilkan halaman checkout
    public function checkout(Request $request)
    {
        $selected_lapangan = Lapangan::query()
            ->where('lokasi', $request->lokasi)
            ->where('jenis', $request->jenis)
            ->first();
        $date_start = $request->date_start;
        $date_end = $request->date_end;

        // total durasi dalam satuan menit (date_end - date_start)
        $total_durasi = Carbon::parse($request->date_end)->diffInMinutes($request->date_start);

        // Menghitung total harga tanpa biaya tambahan
        $total_harga = ($selected_lapangan->price / 60) * $total_durasi;

        // Menghitung biaya sewa tambahan berdasarkan durasi
        $sewa_sepatu = 50000 * ceil($total_durasi / 60); // Rp. 50.000 per jam
        $sewa_kostum = 45000 * ceil($total_durasi / 60); // Rp. 45.000 per jam

        // Menambahkan biaya sewa tambahan ke total harga
        $total_harga += $sewa_sepatu + $sewa_kostum;

        return view('checkout', compact('selected_lapangan', 'date_start', 'date_end', 'total_harga', 'sewa_sepatu', 'sewa_kostum'));
    }

    public function booking(Request $request)
    {
        $selected_lapangan = Lapangan::query()
            ->where('lokasi', $request->lokasi)
            ->where('jenis', $request->jenis)
            ->first();

        // total durasi dalam satuan menit (date_end - date_start)
        $total_durasi = Carbon::parse($request->date_end)->diffInMinutes($request->date_start);

        // Menghitung total harga tanpa biaya tambahan
        $total_harga = ($selected_lapangan->price / 60) * $total_durasi;

        // Menghitung biaya sewa tambahan berdasarkan durasi
        $sewa_sepatu = 50000 * ceil($total_durasi / 60); // Rp. 50.000 per jam
        $sewa_kostum = 45000 * ceil($total_durasi / 60); // Rp. 45.000 per jam

        // Menambahkan biaya sewa tambahan ke total harga
        $total_harga += $sewa_sepatu + $sewa_kostum;

        Booking::create([
            'lapangan_id' => $selected_lapangan->id,
            'price' => $selected_lapangan->price,
            'total_price' => $total_harga,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/')->with('success-booking');
    }
}
