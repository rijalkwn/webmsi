<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = berita::paginate(12);
        return view('berita/ArsipBerita', compact('berita'));
    }

    public function create()
    {
        return view('berita/inputBerita');
    }

    public function store(Request $request)
{
    $request->validate([
        'thumbnail' => 'required|image',
        'judul' => 'required',
        'isi' => 'required',
    ], [
        'thumbnail.required' => 'Gambar thumbnail harus diisi.',
        'thumbnail.image' => 'Gambar thumbnail harus berupa file gambar (jpg, png, dll).',
        'judul.required' => 'Judul berita harus diisi.',
        'isi.required' => 'Isi berita harus diisi.',
    ]);

    $thumbnail_file = $request->file('thumbnail');
    $thumbnail_ekstensi = $thumbnail_file->extension();
    $thumbnail_nama = date('ymdhis').".".$thumbnail_ekstensi;
    $thumbnail_file->move(public_path('thumb_berita'),$thumbnail_nama);

    $berita = new berita;
    $berita->thumbnail = $thumbnail_nama;
    $berita->judul = $request->judul;
    $berita->isi = $request->isi;

    if($berita->save())
    {
        return redirect('admin-ArsipBerita')->with('berhasil','Berhasil memasukkan berita!');
    } else {
        return redirect('admin-inputBerita')->with('gagal','gagal menginput berita!');
    }
}


    public function edit($id)
    {
        $berita = berita::find($id);
        return view('berita/editBerita', compact('berita'));
    }

    //update
    public function update(Request $request, $id)
    {
        $berita = berita::find($id);

        if ($berita) {
            $thumbnail_file = $request->file('thumbnail');
            if($thumbnail_file){
                $thumbnail_ekstensi = $thumbnail_file->extension();
                $thumbnail_nama = date('ymdhis').".".$thumbnail_ekstensi;
                $thumbnail_file->move(public_path('thumb_berita'),$thumbnail_nama);
                $berita->thumbnail = $thumbnail_nama;
            }
            $berita->JudulBerita = $request->JudulBerita;
            $berita->IsiBerita = $request->IsiBerita;

            $berita->save();

            return redirect()->route('admin-ArsipBerita')->with('success', 'Berita berhasil diupdate.');
        } else {
            return redirect()->route('admin-ArsipBerita')->with('error', 'Berita tidak ditemukan.');
        }
    }

    //delete
    public function delete($id)
    {
        $berita = berita::find($id);

        if ($berita) {
            return view('berita.delete', compact('berita'));
        } else {
            return redirect()->route('ArsipBerita')->with('error', 'Berita tidak ditemukan.');
        }
    }
}