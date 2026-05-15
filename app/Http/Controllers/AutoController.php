<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Emocion;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AutoController extends Controller
{
    // REGISTRAR 
    public function register(Request $request)
    {
        User::create([

            'name' => $request->nombre,
            'apellido' => $request->apellido,
            'edad' => $request->edad,
            'genero' => $request->genero,
            'email' => $request->email,
            'password' => Hash::make($request->password)

]);

        return redirect('/')->with('success', 'Usuario registrado correctamente');

    }

    // LOGIN
        public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('/dashboard');
        }

        return redirect('/')->with('error', 'Correo o contraseña incorrectos');

    }

    public function guardarEmocion(Request $request)
    {
        Emocion::create([
            'user_id' => Auth::id(),
            'emocion' => $request->emocion,
            'comentario' => $request->comentario
        ]);
        return redirect('/dashboard')->with('success', 'Emoción guardada correctamente');
    }

    public function eliminar($id)
    {

        $emocion = Emocion::find($id);
        $emocion->delete();
        return redirect('/dashboard')->with('success', 'Emoción eliminada');
}

    public function dashboard()
    {

        $emociones = Emocion::where('user_id', Auth::id())->get();
        return view('dashboard', compact('emociones'));

    }

    public function logout()
    {

        Auth::logout();
        return redirect('/');

    }

    public function editar($id)
    {
        $emocion = Emocion::find($id);
        return view('edit', compact('emocion'));
    }

    public function actualizar(Request $request, $id)
    {

        $emocion = Emocion::find($id);

        $emocion->update([
            'emocion' => $request->emocion,
            'comentario' => $request->comentario

    ]);

    return redirect('/dashboard')->with('success', 'Emoción actualizada');
    }

}