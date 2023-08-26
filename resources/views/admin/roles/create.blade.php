    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-4xl font-semilbold p-4 text-bold " class="p-4 bg-white rounded-md space-y-2">Créer un nouveau rôle</h1>

        <div class="p-4">
            <Link href="{{ route('roles.index') }}" class="px-4 py-2 bg-pink-500 hover:bg-pink-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <h1 class="text-2xl font-semilbold p-4" >Ajout d'un nouveau rôle</h1>
    <x-splade-form  :action="route('roles.store')"  method="post" class="p-4 bg-white rounded-md space-y-2">
    <x-splade-input name="name" label="Nom" />
    <x-splade-select name="permissions[]" :options="$permissions" multiple relation choices label="Permission" placeholder="Choissir une permission" />
    
 
    <x-splade-submit />
</x-splade-form>

</x-admin-layout>