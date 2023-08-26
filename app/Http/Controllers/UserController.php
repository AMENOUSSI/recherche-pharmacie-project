<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Tables\Users;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index',[
            'users' => Users::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create',[
            'permissions'=> Permission::pluck('name','id')->toArray(),
            'roles'=> Role::pluck('name','id')->toArray(),


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $user->syncRoles($request->roles);
        $user->syncRoles($request->permissions);

        Splade::toast("L'utilisateur est créé avec succès")->autoDismiss(3);

        return to_route(route:'users.index');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        
        return view('admin.users.Edit',[
            'permissions'=> Permission::pluck('name','id')->toArray(),
            'roles'=> Role::pluck('name','id')->toArray(),
            'user' => $user,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->syncRoles($request->roles);
        $user->syncRoles($request->permissions);
        Splade::toast("L'utilisateur mis à jour avec succès")->autoDismiss(3);;
        return to_route(route:'users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        Splade::toast("Cet utilisateur est supprimé avec succès")->autoDismiss(3);

        return back();

    }
}
