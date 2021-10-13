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
    return view('welcome');
});

//route basic
Route::get('about', function () {
    return '<h1>hello</h1>'
    . 'selamat datang di webapp saya'
    . 'laravel, emang keren';
});

Route::get('profile', function () {
    $nama = "uus";
    return "nama saya adalah <b>$nama</b>";
});

//route parameter
Route::get('post/{id}', function ($a) {
    return "halaman post ke - $a";
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return "nama saya - $a"
    ."<br>umur saya - $b"
    ."<br>alamat - $c";
});

//route optional para
Route::get('page/{page}', function ($hal = 1) {
    return "halaman <b>$hal</b>";
});

Route::get('pesan/{makan?}/{minum?}/{cemilan?}',
 function ($a = null, $b = null, $c = null) {
     if ($a == null && $b == null && $c == null){
         $pesan = "anda tidak pesan, silahkan pulang";
     }
     if ($a != null){
        $pesan = "anda memesan"
        . "<br>makan   :  <b>$a</b>";
    }
     if ($a != null && $b != null){
        $pesan = "anda memesan"
        . "<br>makan   :  <b>$a</b>"
        . "<br>minum   :  <b>$b</b>";
    }
     if ($a != null && $b != null && $c != null){
         $pesan = "anda memesan"
         . "<br>makan   :  <b>$a</b>"
         . "<br>minum   :  <b>$b</b>"
         . "<br>cemilan :  <b>$c</b>";
     }
     return $pesan;
});