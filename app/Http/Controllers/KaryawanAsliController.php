<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanAsli;

class KaryawanAsliController extends Controller
{
    public function index()
    {
        $karyawans = KaryawanAsli::all();
        return view('karyawan.index', compact('karyawans'));
    }
}
