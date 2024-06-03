<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SlipgajiController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        if($userId == null){
            return view('auth.login');
        } else {
            $tableName = 'slipgaji_' . $userId;
            $slipGajis = DB::table($tableName)->get(); 
            if(Auth::user()->admin){
                return view('admin.slipgaji', compact('slipGajis'));
            } else {
                return view('slipgaji.index', compact('slipGajis'));
            }
        } 
       
    }
}
