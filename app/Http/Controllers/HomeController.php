<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    public function index()
    {
        if (!Gate::allows('isMahasiswa')) {
            abort(403, "Anda Tidak Memiliki Akses");
        }
        return view('nilai', [
            'title' => 'Nilai',
            'dataMahasiswa' => Mahasiswa::paginate(2),

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


    public function indexAddMahasiswa()
    {
        return view('form-mahasiswa', [
            'title' => 'Tambah Data Mahasiswa'
        ]);
    }
    public function StoreMahasiswa(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required|min:3",
            "nim" => "required|min:9|max:9|unique:mahasiswas",
            "nilai" => "required|between:0,100|integer",
            "alamat" => "required",
            "gender" => "required",
            "usia" => "required|integer|between:0,100",
        ], [
            "nama.required" => "Nama tidak boleh kosong",
            "nim.required" => "NIM tidak boleh kosong",
            "nim.min" => "NIM terdiri dari 9 digit angka",
            "nim.max" => "NIM terdiri dari 9 digit angka",
            "nim.unique" => "NIM sudah ada",
            "nilai.required" => "Nilai tidak boleh kosong",
            "alamat.required" => "Alamat tidak boleh kosong",
            "gender.required" => "Jenis kelamin tidak boleh kosong",
            "usia.required" => "Usia tidak boleh kosong",

        ]);
        Mahasiswa::create($validatedData);
        return redirect('/nilai')->with('success', 'Berhasil Tambah Data Mahasiswa!');
    }

    public function indexUpdateMahasiswa(Request $request)
    {
        return view('form-edit-mahasiswa', [
            'title' => 'Edit Data Mahasiswa',
            'data' => Mahasiswa::find($request->id)
        ]);
    }
    public function storeUpdateMahasiswa(Request $request, $id)
    {
        $validatedData = $request->validate([
            "nama" => "required|min:3",
            "nim" => "required|min:9|max:9|",
            "nilai" => "required|between:0,100|integer",
            "alamat" => "required",
            "gender" => "required",
            "usia" => "required|integer|between:0,100",
        ]);
        Mahasiswa::find($id)->update($validatedData);
        
        return redirect("/detail/$id")->with('success', 'Berhasil Ubah Data Mahasiswa!');
    }
    

       
    public function deleteMahasiswa($id)
    {
        Mahasiswa::destroy($id);
        return redirect("/nilai/")->with('success', 'Berhasil Hapus Data Mahasiswa!');
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
