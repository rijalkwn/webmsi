<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kepengurusan;
use App\Models\galeri;
use Illuminate\Http\Request;

class PublicController extends Controller
{
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