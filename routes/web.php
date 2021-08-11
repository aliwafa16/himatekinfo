<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'headline' => 'Halaman Home'
    ]);
});

Route::get('/program-kerja', function(){
    return view('program_kerja', [
        'title' => 'Program Kerja',
        'headline' => 'Halaman Program Kerja'
    ]);
});

Route::get('/struktur', function () {
    return view('struktur', [
        'title' => 'Struktur Organisasi',
        'headline' => 'Halaman Struktur Organisasi'
    ]);
});

Route::get('/kegiatan', function () {
    return view('kegiatan', [
        'title' => 'Kegiatan',
        'headline' => 'Halaman Kegiatan'
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        'title' => 'Galeri',
        'headline' => 'Halaman Galeri'
    ]);
});

Route::get('/auth', function () {
    return view('auth', [
        'title' => 'Auth',
        'headline' => 'Halaman Login'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'headline' => 'Halaman About'
    ]);
});
