<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Display;

class AdminController extends Controller
{
    public function index()
    {        
        $display = DB::table('display')
        ->where('id',1)
        ->select('*')
        ->first();
        return view('admin.index', [
            'title' => 'Admin',
            'display' => $display
        ]);
    }
    public function updateDisplay(Request $request)
    {
        $display = Display::find(1);
        $display->update([
            'title1' => $request->title1,
            'text1' => $request->text1,
            'title2' => $request->title2,
            'text2' => $request->text2,
            'title3' => $request->title3,
            'text3' => $request->text3,
            'title4' => $request->title4,
            'text4' => $request->text4,

        ]);
        return redirect('/admin');  
    }
}
