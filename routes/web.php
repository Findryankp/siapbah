<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarKeanggotaanPokmasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityLogController;

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

//front page
Route::middleware(['auth'])->group(function () {
    Route::get('/',                     [DaftarKeanggotaanPokmasController::class, 'index']);

    //role admin
    Route::group(['middleware' => ['role:Admin']], function () {
        //master user
        Route::resource('/users', UserController::class);
    });

    Route::prefix('data')->group(function () {
        Route::get('/',             [DaftarKeanggotaanPokmasController::class, 'index']);
        Route::post('/',            [DaftarKeanggotaanPokmasController::class, 'store']);
        Route::post('/store-anggota',[DaftarKeanggotaanPokmasController::class, 'storeAnggota']);
        Route::get('/detail-anggota/{id}',[DaftarKeanggotaanPokmasController::class, 'detailAnggota']);
        Route::post('/import',       [DaftarKeanggotaanPokmasController::class, 'import']);
    });
    

    //activity log
    Route::get('activity-log',  [ActivityLogController::class, 'index']);

    //edit password
    Route::get('/users-edit-password',                 [UserController::class, 'edit_password']);
    Route::post('/users-edit-password',                [UserController::class, 'update_password']);
    Route::get('/version',                             [DashboardController::class, 'version']);
});


require __DIR__.'/auth.php';
