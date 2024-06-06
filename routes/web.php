<?php

use App\Http\Controllers\DashboardController\DashboardController;
use App\Http\Controllers\DyeingController\BukaResepController;
use App\Http\Controllers\DyeingController\CekScheduleController;
use App\Http\Controllers\DyeingController\HasilCelupController;
use App\Http\Controllers\DyeingController\LotKeluarController;
use App\Http\Controllers\DyeingController\MasalahCelupanController;
use App\Http\Controllers\DyeingController\MatchingDyeingController;
use App\Http\Controllers\DyeingController\MonitoringTempelanController;
use App\Http\Controllers\DyeingController\ScheduleController;
use App\Http\Controllers\DyeingController\SettingMesinController;
use App\Http\Controllers\DyeingController\StatusMesinController;
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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/buka-resep', [BukaResepController::class, 'index'])->name('buka-resep');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/status-mesin', [StatusMesinController::class, 'index'])->name('status-mesin');
Route::get('/lot-keluar', [LotKeluarController::class, 'index'])->name('lot-keluar');
Route::get('/monitoring-tempelan', [MonitoringTempelanController::class, 'index'])->name('monitoring-tempelan');
Route::get('/hasil-celup', [HasilCelupController::class, 'index'])->name('hasil-celup');
Route::get('/matching-dyeing', [MatchingDyeingController::class, 'index'])->name('matching-dyeing');
Route::get('/cek-schedule', [CekScheduleController::class, 'index'])->name('cek-schedule');
Route::get('/masalah-celupan', [MasalahCelupanController::class, 'index'])->name('masalah-celupan');
Route::get('/setting-mesin', [SettingMesinController::class, 'index'])->name('setting-mesin');

Route::get('/', function () {
    return view('welcome');
});
