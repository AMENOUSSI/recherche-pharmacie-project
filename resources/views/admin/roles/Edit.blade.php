    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Edition d'un rôle</h1>

        <div class="p-4">
            <Link href="{{ route('roles.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <x-splade-form :default="$role" :action="route('roles.update',$role)"  method="PUT" class="p-4 bg-white rounded-md space-y-2">
    <x-splade-input name="name" label="Nom" />
    <x-splade-select name="permissions[]" :options="$permissions" multiple relation choices label="Permissions"/>

 
 
    <x-splade-submit />
</x-splade-form>

</x-admin-layout>