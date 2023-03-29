<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Tutor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('nilai', [
            'title' => 'Nilai',
            'dataMahasiswa' => Mahasiswa::all(),

        ]);
    }

    public function tutor()
    {
        return view('tutor', [
            'title' => 'Tutor',
            'dataTutor' => Tutor::all(),

        ]);
    }

    public function detail(Request $request)
    {
        return view('detail', [
            'title' => 'Detail Mahasiswa',
            'id' => $request->id,
            'data' => Mahasiswa::find($request->id)
        ]);
    }

    public function detailtutor(Request $request)
    {
        return view('detailtutor', [
            'title' => 'Detail Tutor',
            'id' => $request->id,
            'datatutor' => Tutor::find($request->id)
        ]);
    }

    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'About',
        ]);
    }
    
}
