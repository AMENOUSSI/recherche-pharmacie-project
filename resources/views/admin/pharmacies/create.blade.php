    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Ajouter une pharmacie</h1>

        <div class="p-4">
            <Link href="{{ route('pharmacies.index') }}" class="px-4 py-2 bg-pink-500 hover:bg-pink-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <x-splade-form  :action="route('pharmacies.store')"  method="POST" class="p-4 bg-white rounded-md space-y-2">
    <x-splade-input name="nom" label="Nom" />
    <x-splade-input name="region" label="Région" />
    <x-splade-input name="prefecture" label="Préfecture" />
    <x-splade-input name="quartier" label="Quartier/Adresse" />
    <x-splade-input name="telephone" label="Téléphone" />
    
    <x-splade-submit />
</x-splade-form>

</x-admin-layout>