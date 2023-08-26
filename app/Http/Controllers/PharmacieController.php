<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePharmacieRequest;
use App\Http\Requests\UpdatePharmacieRequest;
use App\Models\Pharmacie;
use App\Tables\Pharmacies;
use Illuminate\Http\Request;
use App\Tables\Users;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\SpladeForm;

class PharmacieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pharmacies.index',[
            'pharmacies' => Pharmacies::class
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pharmacies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePharmacieRequest $request)
    {
        Pharmacie::create($request->validated());
        Splade::toast("La pharmacie est créée avec succès")->autoDismiss(3);

        return to_route(route:'pharmacies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pharmacie $pharmacy)
    {
        return view('admin.pharmacies.edit',[
            'pharmacy'=>$pharmacy
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePharmacieRequest $request, Pharmacie $pharmacy)
    {
        $pharmacy->update($request->validated());
        Splade::toast("La pharmacie mise à jour avec succès ")->autoDismiss(3);

        return to_route(route:'pharmacies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pharmacie $pharmacy)
    {
        $pharmacy->delete();
        Splade::toast("La pharmacie est supprimée avec succès ")->autoDismiss(3);

        return to_route(route:'pharmacies.index');
    }
}
