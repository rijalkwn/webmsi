<?php

namespace App\Http\Controllers;

use App\Models\kepengurusan;
use Illuminate\Http\Request;

class KepengurusanController extends Controller
{
    //index
    public function index()
    {
        $kepengurusan = kepengurusan::paginate(12);
        return view('kepengurusan/ArsipKepengurusan', compact('kepengurusan'));
    }

    //create
    public function create()
    {
        return view('kepengurusan/inputKepengurusan');
    }

    //store
    public function store(Request $request)
    {

        $fotoprofil_file = $request->file('fotoProfil');
        $fotoprofil_ekstensi = $fotoprofil_file->extension();
        $fotoprofil_nama = date('ymdhis').".".$fotoprofil_ekstensi;
        $fotoprofil_file->move(public_path('assets/foto_kepengurusan'),$fotoprofil_nama);

        $kepengurusan = new kepengurusan();
        $kepengurusan->fotoprofil = $fotoprofil_nama;
        $kepengurusan->nama = $request->nama;
        $kepengurusan->jabatan = $request->jabatan;

        $kepengurusan->save();

        if($kepengurusan->save())
        {
            return redirect('admin-ArsipKepengurusan')->with('berhasil','Berhasil memasukkan data!');
        } else {
            return redirect('InputKepengurusan')->with('gagal','gagal menginput data!');
        }
    }

    //edit
    public function edit($id)
    {
        $kepengurusan = kepengurusan::find($id);
        return view('kepengurusan/editKepengurusan', compact('kepengurusan'));
    }

    //update
    public function update(Request $request, $id)
    {
        $kepengurusan = kepengurusan::find($id);

        if ($kepengurusan) {
            $fotoprofil_file = $request->file('fotoProfil');
            if($fotoprofil_file){
                $fotoprofil_ekstensi = $fotoprofil_file->extension();
                $fotoprofil_nama = date('ymdhis').".".$fotoprofil_ekstensi;
                $fotoprofil_file->move(public_path('assets/foto_kepengurusan'),$fotoprofil_nama);
                $kepengurusan->fotoprofil = $fotoprofil_nama;
            }
            $kepengurusan->nama = $request->nama;
            $kepengurusan->jabatan = $request->jabatan;

            $kepengurusan->save();

            return redirect()->route('ArsipKepengurusan')->with('success', 'Data berhasil diubah.');
        } else {
            return redirect()->route('ArsipKepengurusan')->with('error', 'Data tidak ditemukan.');
        }
    }

    public function delete($id)
    {
        $kepengurusan = kepengurusan::find($id);

        if ($kepengurusan) {
            $kepengurusan->delete();
            return redirect()->route('ArsipKepengurusan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->route('ArsipKepengurusan')->with('error', 'Data tidak ditemukan.');
        }
    }
}