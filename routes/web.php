<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PathologieController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PharmacieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/login', function () {
        return view('login');
    });

    Route::middleware('auth')->group(function () {
         Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard'); 

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::middleware(['auth'])->group(function () {

        Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
        Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
        Route::get('/produits/{produit/edit', [ProduitController::class, 'edit'])->name('produits.edit');
        Route::put('/produits/{produit}', [ProduitController::class, 'update'])->name('produits.update');
        Route::delete('/produits/{produit}', [ProduitController::class, 'destroy'])->name('produits.destroy');

        Route::get('/pharmacies/create', [PharmacieController::class, 'create'])->name('pharmacies.create');
        Route::post('/pharmacies', [PharmacieController::class, 'store'])->name('pharmacies.store');
        Route::get('/pharmacies/{pharmacy}/edit', [PharmacieController::class, 'edit'])->name('pharmacies.edit');
        Route::put('/pharmacies/{pharmacy}', [PharmacieController::class, 'update'])->name('pharmacies.update');
        Route::delete('/pharmacies/{pharmacy}', [PharmacieController::class, 'destroy'])->name('pharmacies.destroy');

        Route::resource('/users', UserController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/permissions', PermissionController::class);

    });

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');


    Route::get('/pharmacies', [PharmacieController::class, 'index'])->name('pharmacies.index');


    require __DIR__ . '/auth.php';
});