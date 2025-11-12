<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Devuelve la vista con el listado con los últimos 10 usuarios
        $users = User::all();

        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Devuelve la vista con el formulario para la creacion de un nuevo usuario
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // Obtiene los datos balidados por el store request
        $validated = $request->validated();

        // Crea y almacena un nuevo usuario
        $user = new User;

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Retorna los datos del usuario especificado mediante la URL
        return view('users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Devuelve la vista para editar los datos de un usuario
        return view('users.edit')->with('user',$user);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Obtiene los datos validados por el Update Request
        $validated = $request->validated();

        // Actualiza y guarda los cambios hechos en el usuario seleccionado
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();

        return redirect()->route('users.index');
    }
}
