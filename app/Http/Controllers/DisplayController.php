<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisplayController extends Controller
{
    public function index()
    {
        $iklan = DB::table('iklan')
        ->select('*')
        ->get();
        $display = DB::table('display')
        ->where('id',1)
        ->select('*')
        ->first();
        return view('display.index', [
            'title' => 'Display',
            'display' => $display,
            'iklan' => $iklan
        ]);
    }
}
