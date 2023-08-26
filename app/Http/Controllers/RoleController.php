<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Tables\Roles;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.roles.index',[
            'roles'=> Roles::class
        ]);
    }

    public function create()
    {
        return view('admin.roles.create',[
            'permissions'=> Permission::pluck('name','id')->toArray(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->validated());
        $role->syncPermissions($request->permissions);

        Splade::toast("Le rôle est créé avec succès")->autoDismiss(3);

        return to_route(route:'roles.index');
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        
        return view('admin.roles.Edit',[
            'role' => $role,
            'permissions'=> Permission::pluck('name','id')->toArray(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateRoleRequest $request, role $role)
    {
        $role->update($request->validated());
        $role->syncPermissions($request->permissions);

        Splade::toast("Le rôle est mis à jour avec succès")->autoDismiss(3);;
        return to_route(route:'roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        Splade::toast("Ce rôle est supprimé avec succès")->autoDismiss(3);

        return back();

    }
}
