<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SlipgajiController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // Get the ID of the currently logged-in user
        $tableName = 'slipgaji_' . $userId; // Construct the table name
        $slipGajis = DB::table($tableName)->get(); // Fetch the data from the table
        return view('slipgaji.index', compact('slipGajis'));
    }
}
