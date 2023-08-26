<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProduitRequest;
use App\Http\Requests\updateProduitRequest;
use App\Models\Pathologie;
use App\Models\Pharmacie;
use App\Models\Produit;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\FormBuilder\Text;
use ProtoneMedia\Splade\SpladeForm;

class StockController extends Controller
{
    public function index()
    {
        return view('admin.produits.stock',[
            'produits' => Produits::class,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $form = SpladeForm::make()
        ->action(route('admin.produits.store'))
        ->fields([
                Select::make('pathologie_id')
                ->label('Choisir une Pathologie',)
                ->options(Pathologie::pluck('nom','id')->toArray()),
                Input::make('nom')->label('Nom'),
                Text::make('description')->label('Description'),
                Input::make('date_fabrication')->label('Date Fabrcation'),
                Input::make('date_expiration')->label('Date Expiration'),
                Input::make('quantite_en_stock')->label('Stock Present'),
                Select::make('pharmacie_id')
                ->label('Choisir une Pharmacie')
                ->options(Pharmacie::pluck('nom','id')->toArray()),
                Input::make('prix')->label('Prix'),
                Submit::make()->label('Enrégistrer'),
            ])
            -> class(" space-y-4 p-4 bg-white rounded-md");
 
        return view('admin.produits.create', [
            'form' => $form,
            
        ]);
    
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProduitRequest $request)
    {
        Produit::create($request->validated());
        Splade::toast("Le produit est ajouté avec succès")->autoDismiss(3);

        return to_route(route:'admin.produits.index');
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
    public function edit(Produit $produit)
    {
        $form = SpladeForm::make()
        ->action(route('admin.produits.update',$produit))
        ->fields([
                Select::make('pathologie_id')
                ->label('Choisir une Pathologie',)
                ->options(Pathologie::pluck('nom','id')->toArray()),
                Input::make('nom')->label('Nom'),
                Text::make('description')->label('Description'),
                Input::make('date_fabrication')->label('Date Fabrcation'),
                Input::make('date_expiration')->label('Date Expiration'),
                Input::make('quantite_en_stock')->label('Stock Present'),
                Select::make('pharmacie_id')
                ->label('Choisir une Pharmacie')
                ->options(Pharmacie::pluck('nom','id')->toArray()),
                Input::make('prix')->label('Prix'),
                Submit::make()->label('Enrégistrer'),
            ])->fill($produit)
            -> class(" space-y-4 p-4 bg-white rounded-md")
            ->method('PUT');

            return view('admin.produits.edit', [
                'form' => $form,
                'produits' => $produit
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateProduitRequest $request, Produit $produit)
    {
        $produit->update($request->validated());

        Splade::toast("Le produit mis à jour avec succès")->autoDismiss(3);

        return to_route(route:'admin.produits.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();

        Splade::toast("Le produit est supprimé avec succès")->autoDismiss(3);

        return to_route(route:'admin.produits.index');
    }
}
