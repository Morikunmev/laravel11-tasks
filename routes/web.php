<?php

use Illuminate\Support\Facades\Route; // Importa la clase Route para definir rutas.
use App\Http\Controllers\DashboardController;  // Importa el controlador DashboardController.

// Route::view('/', 'welcome');
Route:: redirect('/','/dashboard'); // Redirecciona la ruta raíz '/' a '/dashboard'.

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])  // El middleware de autenticación
    ->name('dashboard');


Route::view('profile', 'profile') // Define la ruta 'profile' que carga una vista directamente.
    ->middleware(['auth']) // Esta ruta solo está disponible para usuarios autenticados.
    ->name('profile'); // Nombre de la ruta: 'profile'.

require __DIR__.'/auth.php'; // Importa las rutas relacionadas con la autenticación (como login, registro, etc.).
