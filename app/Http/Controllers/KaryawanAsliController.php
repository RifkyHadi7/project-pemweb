<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanAsli;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KaryawanAsliController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->admin){
            $karyawans = KaryawanAsli::all();
            return view('karyawan.index', compact('karyawans'));
        }
    }

    public function profil($id)
    {
        $user = Auth::user();
        if($user->admin){
            $user = KaryawanAsli::find($id);
            return view('karyawan.profile', compact('user'));
        }
    }

    public function slipgaji($id)
    {
        $tableName = 'slipgaji_' . $id;
        $user = Auth::user();
        if($user->admin){
            $slipGajis = DB::table($tableName)->get();
            return view('karyawan.slipgaji', compact('slipGajis', 'id'));
        }
    }
    public function edit($id)
    {
        $karyawan = KaryawanAsli::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = KaryawanAsli::find($id);
        $karyawan->nama = $request->input('nama');
        $karyawan->ttl = $request->input('ttl');
        $karyawan->jabatan = $request->input('jabatan');
        $karyawan->foto = $request->input('foto');

        $karyawan->save();

        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diupdate');
    }
}
