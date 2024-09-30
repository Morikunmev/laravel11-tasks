<?php

namespace App\Http\Controllers;  // Define el namespace del controlador.

use Illuminate\Http\Request;  // Importa la clase Request, que se utiliza para manejar las peticiones HTTP.
use Illuminate\Support\Facades\Auth; // Importa el facade Auth, que permite acceder a la autenticación del usuario.

class DashboardController extends Controller // El controlador extiende de la clase base Controller de Laravel.
{
    public function index(){ // Método index: será llamado cuando el usuario acceda a la ruta del dashboard.
        $user= Auth::user(); // Obtiene al usuario actualmente autenticado mediante el facade Auth.
        $tasks= $user->tasks; // Usa la relación 'tasks' para obtener las tareas del usuario. Esto asume que el modelo `User` tiene una relación con las tareas.
        return view('dashboard', compact('tasks'));// Retorna la vista 'dashboard' y pasa las tareas a la vista usando la función compact().
    }
}
