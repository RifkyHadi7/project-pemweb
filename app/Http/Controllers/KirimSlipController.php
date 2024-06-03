<?php

namespace App\Http\Controllers;
use App\Models\KaryawanAsli;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KirimSlipController extends Controller
{
    public function index()
    {
        $karyawans = KaryawanAsli::all();
        return view('admin.kirimslip', compact('karyawans'));
    }
    public function store(Request $request)
    {
        $karyawan_id = $request->input('nama');
        $tahun = $request->input('tahun');
        $bulan = $request->input('bulan');
        $file_slip_gaji = $request->input('file_slip_gaji');

        $tableName = 'slipgaji_'. $karyawan_id;

        DB::table($tableName)->insert([
            'id' => $karyawan_id,
            'tahun' => $tahun,
            'bulan' => $bulan,
            'slip_gaji' => $file_slip_gaji,
        ]);

        return redirect()->back()->with('success', 'Slip gaji berhasil dikirim!');
    }
}
