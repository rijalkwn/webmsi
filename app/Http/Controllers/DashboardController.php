<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\berita;
use App\Models\inbox_pengirim;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('/Dashboard');
    }
}