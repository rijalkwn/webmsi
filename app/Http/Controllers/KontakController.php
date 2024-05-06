<?php

namespace App\Http\Controllers;

use App\Models\kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = kontak::orderBy('created_at', 'desc')->paginate(12);
        return view('kontak/arsipKontak', compact('kontak'));
    }

    public function create()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nomor_hp' => 'required|numeric',
            'alamat' => 'required',
            'pesan' => 'required',
        ],
        [
            'nama.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'nomor_hp.required' => 'Nomor HP harus diisi.',
            'nomor_hp.numeric' => 'Nomor HP harus berupa angka.',
            'alamat.required' => 'Alamat harus diisi.',
            'pesan.required' => 'Pesan harus diisi.',
        ]);

        $kontak = new kontak;
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->nomor_hp = $request->nomor_hp;
        $kontak->alamat = $request->alamat;
        $kontak->pesan = $request->pesan;

        if($kontak->save())
        {
            return redirect('kontak')->with('berhasil','Pesan berhasil dikirim, Akan dibalas melalui WA. Terima Kasih!');
        } else {
            return redirect('kontak')->with('gagal','gagal menginput berita!');
        }
    }

    public function show($id)
    {
        $kontak = kontak::find($id);
        return view('kontak/detailKontak', compact('kontak'));
    }

    public function destroy($id)
    {
        kontak::destroy($id);

        return redirect()->route('kontak')
            ->with('success', 'Pesan berhasil dihapus.');
    }
}
