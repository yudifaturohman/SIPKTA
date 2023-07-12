<?php

use App\Http\Controllers\ChangepasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanpengaduanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserprofileController;
use App\Models\Pengaduan;
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
    $dataPengaduan = Pengaduan::select(DB::raw("count(*) as pengaduan"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('pengaduan');

    $tahun = Pengaduan::select(DB::raw("YEAR(created_at) as year"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->pluck('year');

    $results = Pengaduan::select('jenis_kelamin_korban', DB::raw('COUNT(*) as total'))
        ->groupBy('jenis_kelamin_korban')
        ->get();

    $totalCases = $results->sum('total');

    if ($results->count()) {
        foreach ($results as $result) {
            $gender = $result->jenis_kelamin_korban;
            $total = $result->total;
            $presentase = ($total / $totalCases) * 100;
        }
    } else {
        $gender = '-';
        $presentase = 0;
    }



    return view('home', [
        'title' => 'SIPKTA',
        'dataPengaduan' => $dataPengaduan,
        'tahun' => $tahun,
        'presentase' => $presentase,
        'gender' => $gender
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'SIPKTA | About'
    ]);
});


Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::resource('/', DashboardController::class)->middleware('admin');
    Route::resource('/myprofile/user', UserprofileController::class);
    Route::put('/updatepassword/{user:id}', [ChangepasswordController::class, 'updatepassword']);
    Route::resource('/pengaduan', PengaduanController::class);
    Route::get('/pengaduan/tanggapan/{pengaduan:id}', [PengaduanController::class, 'tanggapan'])->middleware('admin');
    Route::put('/pengaduan/tanggapan/{pengaduan:id}', [PengaduanController::class, 'konfirmasiTanggapan'])->middleware('admin');
    Route::put('/pengaduan/verifikasi/{pengaduan:id}', [PengaduanController::class, 'verifikasi'])->middleware('admin');
    Route::get('/cetakpdf', [PengaduanController::class, 'cetakPdf'])->middleware('admin');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__ . '/auth.php';
