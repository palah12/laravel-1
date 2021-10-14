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
    return view('post',['post' => $a]);
});

Route::get('biodata/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return "nama saya - $a"
    ."<br>umur saya - $b"
    ."<br>alamat - $c";
});

Route::get('bio/{nama}/{umur}/{alamat}', function ($a,$b,$c) {
    return view('bio', compact('a','b','c'));
});

Route::get('blog',function () {
    $posts= [
        ['id' => 1, 'title' => 'lorem ipsum 1', 'content' => 'content ke satu'],
        ['id' => 2, 'title' => 'lorem ipsum 2', 'content' => 'content ke dua'],
        ['id' => 3, 'title' => 'lorem ipsum 3', 'content' => 'content ke tiga']
    ];
    return view('blog',compact('posts'));
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

Route::get('biodata', function () {
    $nama = "uus";
    $umur = "12 thn";
    $alamat = "cedok city";
    $sekolah = "smk atuh";
    $kelas = "kelas a ajah";
    $hobi = "banyak tidur biar banyak mimpi";
    return view('biodata', compact('nama','umur','alamat','sekolah','kelas','hobi'));
});

Route::get('format', function(){
    $data =[
        ['id' => 1, 'name' => 'palah','username' => 'palah','email' => 'palah@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 2, 'name' => 'uus','username' => 'uus','email' => 'uusaja@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 3, 'name' => 'Sadul','username' => 'sadul','email' => 'saduladul@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 4, 'name' => 'resky','username' => 'resky','email' => 'Rsaja@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],
        ['id' => 5, 'name' => 'atep','username' => 'atep','email' => 'atep7@gmail.com' ,'alamat' => 'bandung','mapel'=>[
            'mapel1' => 'Matematika',
            'mapel2' => 'Fisika',
            'mapel3' => 'Kimia'

        ]],

    ];
    return view ('format' , compact('data'));
});
