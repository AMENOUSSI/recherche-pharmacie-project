    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Créer une nouvelle permission</h1>

        <div class="p-4">
            <Link href="{{ route('permissions.index') }}" class="px-4 py-2 bg-pink-500 hover:bg-pink-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <h1 class="text-2xl font-semilbold p-4" >Ajout d'une permission</h1>
    <x-splade-form  :action="route('permissions.store')"  method="post" class="p-4 bg-white rounded-md space-y-2">
    <x-splade-input name="name" label="Nom" />
    <x-splade-select name="roles[]" :options="$roles" multiple relation choices label="Roles" placeholder="Choissir un rôle" />

 
 
    <x-splade-submit />
</x-splade-form>

</x-admin-layout>