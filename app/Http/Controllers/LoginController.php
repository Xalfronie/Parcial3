<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario; // Asegúrate de que esté correctamente importado

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login'); // Asegúrate de que 'login' sea el nombre correcto de tu vista de formulario de inicio de sesión
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario por su correo electrónico
        $user = Usuario::where('email', $request->email)->first();

        // Verificar si se encontró un usuario y si la contraseña coincide
        if ($user && Hash::check($request->password, $user->password)) {
            // Autenticación exitosa
            Auth::login($user);
            return redirect()->route('materias'); // Cambio aquí
        } else {
            // Autenticación fallida
            return redirect()->back()->withInput()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros.']);
        }
    }
}
