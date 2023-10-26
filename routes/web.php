<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ReturController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Content.Dashboard');
});

Route::get('/Profile', function () {
    return view('Vendor.Create');
});

Route::get('Karyawan/restore', [UserController::class, 'show_restore']);
Route::get('Satuan/restore', [SatuanController::class, 'show_restore']);
Route::get('Role/restore', [RoleController::class, 'show_restore']);
Route::get('Barang/restore', [BarangController::class, 'show_restore']);
Route::get('vendor/restore', [VendorController::class, 'show_restore']);


Route::resource('Barang', BarangController::class);
Route::resource('Satuan', SatuanController::class);
Route::resource('Karyawan', UserController::class);
Route::resource('Role', RoleController::class);
Route::resource('vendor', VendorController::class);

Route::match(['put', 'patch'],'Karyawan/restore/{item}', [UserController::class, 'restore']);
Route::match(['put', 'patch'],'Satuan/restore/{item}', [SatuanController::class, 'restore']);
Route::match(['put', 'patch'],'Role/restore/{role}', [RoleController::class, 'restore']);
Route::match(['put', 'patch'],'Barang/restore/{item}', [BarangController::class, 'restore']);
Route::match(['put', 'patch'],'vendor/restore/{item}', [VendorController::class, 'restore']);

Route::DELETE('Karyawan/destroy/{item}', [UserController::class, 'delete']);
Route::DELETE('Satuan/destroy/{item}', [SatuanController::class, 'delete']);
Route::DELETE('Role/destroy/{item}', [RoleController::class, 'delete']);
Route::DELETE('Barang/destroy/{item}', [BarangController::class, 'delete']);
Route::DELETE('vendor/destroy/{item}', [VendorController::class, 'delete']);
