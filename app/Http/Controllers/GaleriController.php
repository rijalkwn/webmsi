<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //index
    public function index()
    {
        $galeri = galeri::paginate(12);
        return view('galeri/ArsipGaleri', compact('galeri'));
    }

    //create
    public function create()
    {
        return view('galeri/inputGaleri');
    }

    //store
    public function store(Request $request)
    {

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_ekstensi;
        $foto_file->move(public_path('assets/galeri'),$foto_nama);

        $Galeri = new galeri();
        $Galeri->foto = $foto_nama;
        $Galeri->judul = $request->judul;

        $Galeri->save();

        if($Galeri->save())
        {
            return redirect('admin-ArsipGaleri')->with('berhasil','Berhasil memasukkan data!');
        } else {
            return redirect('admin-InputGaleri')->with('gagal','gagal menginput data!');
        }
    }

    //edit
    public function edit($id)
    {
        $galeri = galeri::find($id);
        return view('galeri/EditGaleri', compact('galeri'));
    }

    //update
    public function update(Request $request, $id)
    {
        $galeri = galeri::find($id);

        if ($galeri) {
            $foto_file = $request->file('foto');
            if ($foto_file) {
                $foto_ekstensi = $foto_file->extension();
                $foto_nama = date('ymdhis').".".$foto_ekstensi;
                $foto_file->move(public_path('assets/galeri'),$foto_nama);
                $galeri->foto = $foto_nama;
            }
            $galeri->judul = $request->judul;

            $galeri->save();

            if($galeri->save())
            {
                return redirect('admin-ArsipGaleri')->with('berhasil','Berhasil memasukkan data!');
            } else {
                return redirect('admin-InputGaleri')->with('gagal','gagal menginput data!');
            }
        }
    }

    //delete
    public function delete($id)
    {
        try {
            $galeri = galeri::findOrFail($id);
            $galeri->delete();

            return redirect('admin-ArsipGaleri')->with('berhasil', 'Berhasil menghapus data galeri!');
        } catch (\Exception $e) {
            return redirect('admin-ArsipGaleri')->with('gagal', 'Gagal menghapus data galeri: ' . $e->getMessage());
        }
    }

}