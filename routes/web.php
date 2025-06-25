<?php

use App\Livewire\Diagnosa\CreateDiagnosa;
use App\Livewire\Diagnosa\IndexDiagnosa;
use App\Livewire\Diagnosa\ShowDiagnosa;
use App\Livewire\Gejala\CreateGejala;
use App\Livewire\Gejala\IndexGejala;
use App\Livewire\Penyakit\DetailPenyakit;
use App\Livewire\Penyakit\IndexPenyakit;
use App\Livewire\Rule\IndexRule;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
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

Route::view('/', 'welcome', [
    'penyakits' => Penyakit::orderBy("kode_penyakit", "asc")->get()
]);

Route::view('dashboard', 'dashboard', [
    'title' => 'Dashboard',
    'penyakit' => Penyakit::all()->count(),
    'gejala' => Gejala::all()->count(),
])->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('penyakit/{penyakit}', DetailPenyakit::class)->name('penyakit.show');

Route::middleware('admin')->group(function () {
    Route::get('gejala', IndexGejala::class)->name('gejala.index');
    Route::get('penyakit', IndexPenyakit::class)->name('penyakit.index');
    Route::get('rule', IndexRule::class)->name('rule.index');
});


Route::middleware('auth')->group(function () {
    Route::get('diagnosa', IndexDiagnosa::class)->name('diagnosa.index');
    Route::get('diagnosa/create', CreateDiagnosa::class)->name('diagnosa.create');
    Route::get('diagnosa/{diagnosa}', ShowDiagnosa::class)->name('diagnosa.show');
});

require __DIR__ . '/auth.php';