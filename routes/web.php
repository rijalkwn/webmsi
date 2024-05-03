<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/test-koneksi-database', function() {
	try {
		DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});

Route::get('/', function () {
    return view('master');
});

//berita
Route::get('/berita', [PublicController::class, 'berita'])->name('berita');
Route::get('/berita{id}', [PublicController::class, 'detailBerita'])->name('berita.detail');

//kepengurusan
Route::get('/kepengurusan', [PublicController::class, 'kepengurusan'])->name('kepengurusan');

//galeri
Route::get('/galeri', [PublicController::class, 'galeri'])->name('galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/tentang-kami', function () {
    return view('tentang_kami');
})->name('tentang.kami');

Route::get('/', function () {
    return view('master');
})->name('halaman.utama');


////////////////////////////////////////////////////////////////////
//                        ONLY ADMIN                              //
////////////////////////////////////////////////////////////////////

//LOGIN
Route::get('Login', [SessionController::class, 'index']);
Route::post('ProsesLogin', [SessionController::class, 'login']);
Route::get('logout', [SessionController::class, 'logout']);

//DASHBOARD
Route::get('Dashboard', [DashboardController::class, 'index'])->middleware('isLogin');

//BERITA
Route::get('admin-ArsipBerita', [BeritaController::class, 'index'])->middleware('isLogin')->name('ArsipBerita');
Route::get('admin-InputBerita', [BeritaController::class, 'create'])->middleware('isLogin')->name('berita.create');
Route::post('admin-storeBerita', [BeritaController::class, 'store'])->middleware('isLogin')->name('berita.store');
Route::get('admin-EditBerita{id}', [BeritaController::class, 'edit'])->middleware('isLogin')->name('berita.edit');
Route::put('admin-updateBerita/{id}', [BeritaController::class, 'update'])->middleware('isLogin')->name('berita.update');
Route::delete('admin-hapusBerita/{id}', [BeritaController::class, 'delete'])->middleware('isLogin')->name('berita.hapus');

// KEPENGURUSAN
Route::get('admin-ArsipKepengurusan', [KepengurusanController::class, 'index'])->middleware('isLogin')->name('ArsipKepengurusan');
Route::get('admin-InputKepengurusan', [KepengurusanController::class, 'create'])->middleware('isLogin')->name('kepengurusan.create');
Route::post('admin-storeKepengurusan', [KepengurusanController::class, 'store'])->middleware('isLogin')->name('kepengurusan.store');
Route::get('admin-ditKepengurusan{id}', [KepengurusanController::class, 'edit'])->middleware('isLogin')->name('kepengurusan.edit');
Route::put('admin-updateKepengurusan/{id}', [KepengurusanController::class, 'update'])->middleware('isLogin')->name('kepengurusan.update');
Route::get('admin-hapusKepengurusan/{id}', [KepengurusanController::class, 'delete'])->middleware('isLogin')->name('kepengurusan.hapus');

//GALERI
Route::get('admin-ArsipGaleri', [GaleriController::class, 'index'])->middleware('isLogin')->name('ArsipGaleri');
Route::get('admin-InputGaleri', [GaleriController::class, 'create'])->middleware('isLogin')->name('galeri.create');
Route::post('admin-storeGaleri', [GaleriController::class, 'store'])->middleware('isLogin')->name('galeri.store');
Route::get('admin-EditGaleri{id}', [GaleriController::class, 'edit'])->middleware('isLogin')->name('galeri.edit');
Route::put('admin-updateGaleri/{id}', [GaleriController::class, 'update'])->middleware('isLogin')->name('galeri.update');
Route::get('admin-hapusGaleri/{id}', [GaleriController::class, 'delete'])->middleware('isLogin')->name('galeri.hapus');

//INBOX
Route::get('admin-ArsipInbox', [InboxController::class, 'index'])->middleware('isLogin')->name('ArsipInbox');
Route::get('admin-hapusInbox/{id}', [InboxController::class, 'delete'])->middleware('isLogin')->name('inbox.hapus');