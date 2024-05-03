<?php

namespace App\Http\Controllers;

use App\Models\inbox_pengirim;

class InboxController extends Controller
{
    public function index()
    {
        $inbox = inbox_pengirim::paginate(12);
        return view('inbox/ArsipInbox', compact('inbox'));
    }
    public function delete($id)
    {
        $inbox = inbox_pengirim::find($id);
        $inbox->delete();

        return redirect('ArsipInbox')->with('berhasil','Berhasil menghapus inbox!');
    }
}