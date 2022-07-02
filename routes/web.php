<?php

use App\Http\Controllers\NewStudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('form', function (Request $request) {
	return view('form');
});

Route::post('submit', function (Request $request) {

	// dd($request);

	return view('view_data', ['request_pass' => $request]);
});

Route::get('naruto', function () {
	return view('naruto');
});







Route::get('konversi-nilai', function () {
	return view('konversi-nilai');
});





Route::post('konversi-nilai-1', function (Request $request) {

	if (!is_numeric($request->nilai_angka)) {
		die('Input tidak dikenali');
	}

	$nilai_angka = $request->nilai_angka;

	if ($nilai_angka < 60) {
		$keterangan = 'Tidak Lulus';
	}

	if ($nilai_angka >= 60) {
		$keterangan = 'Lulus';
	}



	if ($nilai_angka >= 85 && $nilai_angka <= 100) {
		$nilai_huruf = 'A';
	}

	if ($nilai_angka >= 75 && $nilai_angka <= 84) {
		$nilai_huruf = 'B';
	}

	if ($nilai_angka >= 60 && $nilai_angka <= 74) {
		$nilai_huruf = 'C';
	}

	if ($nilai_angka >= 40 && $nilai_angka <= 59) {
		$nilai_huruf = 'D';
	}

	if ($nilai_angka < 40) {
		$nilai_huruf = 'E';
	}


	echo 'Keterangan: ', $keterangan, "<BR>";
	echo 'Nilai Huruf: ', $nilai_huruf;

});



function print_nilai($nilai)
{
	if ($nilai < 60) {
		$keterangan = 'Tidak Lulus';
	}

	if ($nilai >= 60) {
		$keterangan = 'Lulus';
	}



	if ($nilai >= 85 && $nilai <= 100) {
		$nilai_huruf = 'A';
	}

	if ($nilai >= 75 && $nilai <= 84) {
		$nilai_huruf = 'B';
	}

	if ($nilai >= 60 && $nilai <= 74) {
		$nilai_huruf = 'C';
	}

	if ($nilai >= 40 && $nilai <= 59) {
		$nilai_huruf = 'D';
	}

	if ($nilai < 40) {
		$nilai_huruf = 'E';
	}

	echo 'Nilai: ', $nilai, "<br>";
	echo 'Keterangan: ', $keterangan, "<BR>";
	echo 'Nilai Huruf: ', $nilai_huruf;
}


Route::post('konversi-nilai-2', function (Request $request) {

	$nilai_akhir = ($request->nilai_uts * 0.3) + ($request->nilai_uas * 0.7);

	print_nilai($request->nilai_uts);
	echo '<br><br>';
	print_nilai($request->nilai_uas);
	echo '<br><br>';
	print_nilai($nilai_akhir);

});





Route::resource('new-students', NewStudentController::class);

Route::get('testing-blade', function ()
{
	$students = [
		'Zain',
		'Egin',
		'Test'
	];

	return view('testing', ['students' => $students]);
});