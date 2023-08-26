    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Mettre à jour</h1>

        <div class="p-4">
            <Link href="{{ route('pharmacies.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <x-splade-form :default="$pharmacy" :action="route('pharmacies.update',$pharmacy)"  
    method="PUT" class="p-4 bg-white rounded-md space-y-2">
        <x-splade-input name="nom" label="Nom" />
        <x-splade-input name="region" label="Région" />
        <x-splade-input name="prefecture" label="Préfecture" />
        <x-splade-input name="quartier" label="Quartier" />
        <x-splade-input name="telephone" label="Téléphone" />
    <x-splade-submit /> 
    
    </x-splade-form > 

</x-admin-layout>