<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);

Route::get('/tentang', function () {
    return view('tentangsekolah');
});
Route::get('/visi', function () {
    return view('visisekolah');
});
Route::get('/osis', function () {
    return view('tentangosis');
});

Auth::routes([
    'register' => false, // Registration Routes...
]);

//tabel
Route::get('/berita/data', [App\Http\Controllers\BeritaController::class, 'anyData'])->name('berita.data');
Route::get('/gallery/data', [App\Http\Controllers\GaleriController::class, 'anyData'])->name('gallery.data');
Route::get('/video/data', [App\Http\Controllers\VideoController::class, 'anyData'])->name('video.data');
Route::get('/tentangsekolah/data', [App\Http\Controllers\AboutschoolController::class, 'anyData'])->name('tentangsekolah.data');
//Route::get('/visidanmisi/data', [App\Http\Controllers\VisionController::class, 'anyData'])->name('visidanmisi.data');
Route::get('/pejabat/data', [App\Http\Controllers\PejabatController::class, 'anyData'])->name('pejabat.data');
Route::get('/jurusan/data', [App\Http\Controllers\KeahlianController::class, 'anyData'])->name('jurusan.data');
Route::get('/kompetensi/data', [App\Http\Controllers\PostingkompetensiController::class, 'anyData'])->name('kompetensi.data');
Route::get('/achievement/data', [App\Http\Controllers\PrestasiController::class, 'anyData'])->name('achievement.data');
Route::get('/sarana/data', [App\Http\Controllers\SarprasController::class, 'anyData'])->name('sarana.data');
Route::get('/gurusekolah/data', [App\Http\Controllers\GuruController::class, 'anyData'])->name('gurusekolah.data');
Route::get('/tenagapendidik/data', [App\Http\Controllers\PendidikController::class, 'anyData'])->name('tenagapendidik.data');
Route::get('/matapelajaran/data', [App\Http\Controllers\MapelController::class, 'anyData'])->name('matapelajaran.data');
Route::get('/bidangpendidik/data', [App\Http\Controllers\BidangController::class, 'anyData'])->name('bidangpendidik.data');
Route::get('/siswasekolah/data', [App\Http\Controllers\SiswaController::class, 'anyData'])->name('siswasekolah.data');
Route::get('/infosekolah/data', [App\Http\Controllers\PengumumanController::class, 'anyData'])->name('infosekolah.data');
Route::get('/agendasekolah/data', [App\Http\Controllers\AgendaController::class, 'anyData'])->name('agendasekolah.data');
Route::get('/jadwalmapel/data', [App\Http\Controllers\JadwalpelajaranController::class, 'anyData'])->name('jadwalmapel.data');
Route::get('/jadwalexam/data', [App\Http\Controllers\JadwalujianController::class, 'anyData'])->name('jadwalexam.data');
Route::get('/ekskul/data', [App\Http\Controllers\EkstrakurikulerController::class, 'anyData'])->name('ekskul.data');
Route::get('/tentangosis/data', [App\Http\Controllers\AboutosisController::class, 'anyData'])->name('tentangosis.data');
Route::get('/pengurus/data', [App\Http\Controllers\PengurusosisController::class, 'anyData'])->name('pengurus.data');
Route::get('/kegosis/data', [App\Http\Controllers\KegiatanosisController::class, 'anyData'])->name('kegosis.data');
Route::get('/appschool/data', [App\Http\Controllers\AplikasiController::class, 'anyData'])->name('appschool.data');
Route::get('/infoppdb/data', [App\Http\Controllers\PpdbController::class, 'anyData'])->name('infoppdb.data');
Route::get('/pendapat/data', [App\Http\Controllers\OpiniController::class, 'anyData'])->name('pendapat.data');


//resources
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('berita', \App\Http\Controllers\BeritaController::class);
Route::resource('gallery', \App\Http\Controllers\GaleriController::class);
Route::resource('video', \App\Http\Controllers\VideoController::class);
Route::resource('tentangsekolah', \App\Http\Controllers\AboutschoolController::class);
Route::resource('visidanmisi', \App\Http\Controllers\VisionController::class);
Route::resource('pejabat', \App\Http\Controllers\PejabatController::class);
Route::resource('jurusan', \App\Http\Controllers\KeahlianController::class);
Route::resource('kompetensi', \App\Http\Controllers\PostKompController::class);
Route::resource('achievement', \App\Http\Controllers\PrestasiController::class);
Route::resource('sarana', \App\Http\Controllers\SarprasController::class);
Route::resource('matapelajaran', \App\Http\Controllers\MapelController::class);
Route::resource('gurusekolah', \App\Http\Controllers\GuruController::class);
Route::resource('bidangpendidik', \App\Http\Controllers\BidangController::class);
Route::resource('tenagapendidik', \App\Http\Controllers\PendidikController::class);
Route::resource('siswasekolah', \App\Http\Controllers\SiswaController::class);
Route::resource('infosekolah', \App\Http\Controllers\PengumumanController::class);
Route::resource('agendasekolah', \App\Http\Controllers\AgendaController::class);
Route::resource('jadwalmapel', \App\Http\Controllers\JadwalpelajaranController::class);
Route::resource('jadwalexam', \App\Http\Controllers\JadwalujianController::class);
Route::resource('ekskul', \App\Http\Controllers\EkstrakurikulerController::class);
Route::resource('tentangosis', \App\Http\Controllers\AboutosisController::class);
Route::resource('pengurus', \App\Http\Controllers\PengurusosisController::class);
Route::resource('kegosis', \App\Http\Controllers\KegiatanosisController::class);
Route::resource('appschool', \App\Http\Controllers\AplikasiController::class);
Route::resource('infoppdb', \App\Http\Controllers\PpdbController::class);
Route::resource('pendapat', \App\Http\Controllers\OpiniController::class);




