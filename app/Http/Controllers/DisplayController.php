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
        $agenda = DB::table('agenda')
        ->select('*')
        ->get();
        $display = DB::table('display')
        ->where('id',1)
        ->select('*')
        ->first();
        $background = DB::table('background')
        ->where('id','1')
        ->select('*')
        ->first();
        $jumlahAgenda=count($agenda);
        if($display->tampilan=="Tampilan 1"){
            return view('display.index', [
                'title' => 'Display',
                'display' => $display,
                'iklan' => $iklan,
                'agenda' => $agenda,  
                'jumlahAgenda' => $jumlahAgenda,  
                'background' => $background
            ]);
        }else{
            return view('display.index2', [
                'title' => 'Display',
                'display' => $display,
                'iklan' => $iklan,
                'agenda' => $agenda,  
                'jumlahAgenda' => $jumlahAgenda,  
                'background' => $background
            ]);
        }

    }
}
