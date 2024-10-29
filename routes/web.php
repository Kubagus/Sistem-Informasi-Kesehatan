<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    // return view('welcome');
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('role',RoleController::class);
        Route::resource('users',UserController::class);
        Route::resource('dokter',DoctorController::class);
    });
});

// Doctor Routes
// Route::middleware(['auth', 'role:dokter'])->group(function () {
//     Route::get('/doctor/medical_records', [DoctorController::class, 'indexMedicalRecords'])->name('doctor.medical_records.index');
//     Route::get('/doctor/medical_records/create', [DoctorController::class, 'createMedicalRecord'])->name('doctor.medical_records.create');
//     Route::post('/doctor/medical_records', [DoctorController::class, 'storeMedicalRecord'])->name('doctor.medical_records.store');
// });

// Nurse Routes
Route::middleware(['auth', 'role:perawat'])->group(function () {
    Route::get('/nurse/checkups', [NurseController::class, 'indexCheckups'])->name('nurse.checkups.index');
    Route::get('/nurse/checkups/create', [NurseController::class, 'createCheckup'])->name('nurse.checkups.create');
    Route::post('/nurse/checkups', [NurseController::class, 'storeCheckup'])->name('nurse.checkups.store');
});

// Pharmacist Routes
Route::middleware(['auth', 'role:apoteker'])->group(function () {
    Route::get('/pharmacist/medications', [PharmacistController::class, 'indexMedications'])->name('pharmacist.medications.index');
    Route::get('/pharmacist/medications/create', [PharmacistController::class, 'createMedication'])->name('pharmacist.medications.create');
    Route::post('/pharmacist/medications', [PharmacistController::class, 'storeMedication'])->name('pharmacist.medications.store');
});

// tes
// Tambahkan rute lain untuk role lain jika diperlukan
