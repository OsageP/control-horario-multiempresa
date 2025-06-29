<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí están todas las rutas públicas y protegidas del sistema.
|
*/

// Rutas públicas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/company', [CompanyController::class, 'create'])->name('company.create');
Route::post('/register/company', [CompanyController::class, 'store'])->name('company.store');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Rutas de autenticación (Laravel Breeze)
require __DIR__.'/auth.php';

// Rutas protegidas por login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Perfil de usuario
    Route::prefix('profile')->group(function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Rutas solo para Superadmin
    Route::middleware('role:superadmin')->group(function () {
        Route::get('/superadmin', fn() => view('dashboard.superadmin'))->name('dashboard.superadmin');
    });

    // Rutas solo para Admin de Empresa
    Route::middleware('role:admin_empresa')->group(function () {
        Route::get('/admin_empresa', fn() => view('dashboard.admin_empresa'))->name('dashboard.admin_empresa');
    });

    // Rutas para usuarios normales
    Route::middleware('role:usuario')->group(function () {
        Route::get('/mi-perfil', fn() => view('dashboard.usuario'))->name('dashboard.usuario');
    });
});