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

 /* URL 1 */
Route::get('/nama', function () {
 	return 'Nama lengkap <b> Rizky Aspiah </b>';
 });

/* URL 2 */
Route::get('/TTL', function () {
 	return 'Tempat Tanggal Lahir <b> Labangka, 18 Juli 2000 </b>';
 });

/* URL 3 */
Route::get('/prodi', function () {
 	return 'Program Studi<b> Teknik Informatika </b>';
 });

/* URL 4*/
Route::get('/alamat', function () {
 	return 'Alamat<b> Jl. Juanda 7E</b>';
 });

/* URL 5 */
Route::get('/universitas', function () {
 	return 'Kuliah Di<b> Universitas Muhammadiyah Kalimantan Timur </b>';
 });

/* URL CONTROLLER 1 RIZKY */
use App\Http\Controllers\RizkyController;

Route::get("/view/one", [RizkyController:: class, "one"]);
Route::get("/view/two", [RizkyController:: class, "two"]);
Route::get("/view/three", [RizkyController:: class, "three"]);

/* URL CONTROLLER 2 ASPIAH */
use App\Http\Controllers\AspiahController;

Route::get("/rizky/satu", [AspiahController:: class, "satu"]);
Route::get("/rizky/dua", [AspiahController:: class, "dua"]);
Route::get("/rizky/tiga", [AspiahController:: class, "tiga"]);