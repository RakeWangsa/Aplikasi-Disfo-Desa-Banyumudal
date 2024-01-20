<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Display;
use App\Models\Iklan;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(Request $request)
    {        
        $display = DB::table('display')
        ->where('id',1)
        ->select('*')
        ->first();
        $iklan = DB::table('iklan')
        ->select('*')
        ->get();
        $agenda = DB::table('agenda')
        ->select('*')
        ->get();
        $background = DB::table('background')
        ->where('id','1')
        ->select('foto')
        ->first();
        $jumlahAgenda=count($agenda);
        return view('admin.index', [
            'title' => 'Admin',
            'display' => $display,
            'iklan' => $iklan, 
            'agenda' => $agenda,
            'jumlahAgenda' => $jumlahAgenda,
            'background' => $background,
        ]);
    }
    public function updateDisplay(Request $request)
    {
        if ($request->hasFile('profileImage')) {
            $images = $request->file('profileImage');

            foreach ($images as $image) {

                $imageName = $image->getClientOriginalName();
                $image->move(public_path('iklan'), $imageName);
                Iklan::create(['foto' => $imageName]);
            }

        }
        if ($request->hasFile('fotoBackground')) {
            $imageName = DB::table('background')
            ->where('id','1')
            ->select('foto')
            ->first();
            $imagePath = public_path('background') . '/' . $imageName->foto;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $image = $request->file('fotoBackground');
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('background'), $imageName);
                $Background = Background::find(1);
                $Background->update([
                    'foto' => $imageName,
                ]);
        }
        $display = Display::find(1);
        $display->update([
            'tampilan' => $request->input('flexRadioDefault'),
            'header' => $request->header,
            'sub_header' => $request->sub_header,
            'title1' => $request->title1,
            'text1' => $request->text1,
            'title1a' => $request->title1a,
            'text1a' => $request->text1a,
            'title1b' => $request->title1b,
            'text1b' => $request->text1b,
            'title2' => $request->title2,
            'text2' => $request->text2,
            'title3' => $request->title3,
            'text3' => $request->text3,
            'title4' => $request->title4,
            'text4' => $request->text4,
            'title5' => $request->title5,
            'running_text' => $request->running_text,
            'link_youtube' => $request->linkYoutube,
        ]);
    
        return redirect('/admin');
    }
    
    public function deleteIklan($id)
    {
        $imageName = DB::table('iklan')
        ->where('id',$id)
        ->select('foto')
        ->first();
        $imagePath = public_path('iklan') . '/' . $imageName->foto;
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        Iklan::find($id)->delete();
        return redirect()->back()->with('success', 'Iklan berhasil dihapus');
    }

    public function addAgenda(Request $request)
    {

        // if ($request->hasFile('fotoAgenda')) {
        //     $images = $request->file('fotoAgenda');

        //     foreach ($images as $image) {

        //         $imageName = $image->getClientOriginalName();
        //         $image->move(public_path('agenda'), $imageName);
        //         Agenda::create(['foto' => $imageName]);
        //     }

        // }
        $image = $request->file('fotoAgenda');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('agenda'), $imageName);
        
        Agenda::create([
            'nama_agenda' => $request->nama_agenda,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
            'tanggal' => $request->tanggal,
            'bulan_tahun' => $request->bulan_tahun,
            'foto' => $imageName,
        ]);
    
        return redirect('/admin');
    }

    public function deleteAgenda($id)
    {
        $imageName = DB::table('agenda')
        ->where('id',$id)
        ->select('foto')
        ->first();
        $imagePath = public_path('agenda') . '/' . $imageName->foto;
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        Agenda::find($id)->delete();
        return redirect()->back()->with('success', 'Agenda berhasil dihapus');
    }
}
