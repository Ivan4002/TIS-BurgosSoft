<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserWasCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;
use App\Role;
use App\SocialProfile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               $user = new User;
               $roles = Role::pluck('name','id');
        return view('admin.users.create', compact('user','roles'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveUserRequest $request)
    {
        $request['password'] = str_random(6);
        //crear usuario
        $user = new User( $request->only('name', 'email', 'password'));
        //damos roles
        $user->save();
        $user->roles()->sync($request->roles);
        //asignamos logo por defecto al usuario
        $socialnet=$user->id;
        $social=SocialProfile::create(['user_id'=>$socialnet, 'avatar'=>'/adminlte/img/user-burgos.jpg']);
        //enviaar credenciales
        UserWasCreated::dispatch($user, $request['password']);
        //regresamos al usuario
        return redirect()->route('admin.users.index')->withFlash('El usuario a sido creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name','id');
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
          $this->validate($request,[
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id)],
        ]);
            $data = $request->only('name','email');
            $user->update($data);
        return back()->withFlash('Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
