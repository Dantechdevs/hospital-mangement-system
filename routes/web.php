<?php
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\NursesController;
use Illuminate\Support\Facades\Route;






use App\Http\Controllers\block\BlocksController;
use App\Http\Controllers\departments\DepartmentsController;
use App\Http\Controllers\hod\HodController;

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
Route::resource('doctors', DoctorController::class);
Route::resource('nurses',NursesController::class);
Route::resource('medicines',MedicineController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});








Route::resource('hods', HodController::class);
Route::resource('departments', DepartmentsController::class);
Route::resource('blocks', BlocksController::class);