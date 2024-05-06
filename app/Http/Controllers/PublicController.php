<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kepengurusan;
use App\Models\galeri;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    //beranda
    public function beranda()
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(6);
        $kepengurusan = kepengurusan::where('jabatan', 'like', '%Ketua%')->get();
        $galeri = Galeri::orderBy('created_at', 'desc')->paginate(6);

        return view('beranda', compact('berita', 'kepengurusan', 'galeri'));
    }
    //berita
    public function berita()
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(12);

        return view('berita', compact('berita'));
    }

    //detail berita
    public function detailBerita($id)
    {
        $berita = berita::find($id);
        return view('detailBerita', compact('berita'));
    }

    //kepengurusan
    public function kepengurusan()
    {
        $kepengurusan = kepengurusan::all();
        return view('kepengurusan', compact('kepengurusan'));
    }

    //galeri
    public function galeri()
    {
        $galeri = Galeri::orderBy('created_at', 'desc')->paginate(12);
        return view('galeri', compact('galeri'));
    }
}
?>