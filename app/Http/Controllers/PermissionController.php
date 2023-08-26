<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use Spatie\Permission\Models\Permission;
use App\Tables\Permissions;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permissions.index',[
            'permissions' => Permissions::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.permissions.create',[
            'roles'=> Role::pluck('name','id')->toArray(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        $permission = Permission::create($request->validated());
        $permission->syncRoles($request->roles);

        Splade::toast("La permission est créée avec succès")->autoDismiss(3);

        return back();
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        
        return view('admin.permissions.Edit',[
            'permission'=>$permission,
            'roles'=> Role::pluck('name','id')->toArray(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->validated());
        $permission->syncRoles($request->roles);

        Splade::toast("La mise à jour est effectuée avec succès")->autoDismiss(3);;
        return to_route(route:'permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        Splade::toast("Cette permission est supprimée avec succès")->autoDismiss(3);

        return back();

    }
}
