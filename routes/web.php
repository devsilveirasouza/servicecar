<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas OS
// Route::resource('clients', ClientController::class);
// Route::resource('vehicles', VehicleController::class);
// Route::resource('service-orders', ServiceOrderController::class);
// Route::resource('service-items', ServiceItemController::class);
// Route::resource('employees', EmployeeController::class);
// Route::resource('parts', PartController::class);
// Route::resource('stocks', StockController::class);
// Route::resource('invoices', InvoiceController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
