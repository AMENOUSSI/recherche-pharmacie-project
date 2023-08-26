    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Edition d'un utilisateur</h1>

        <div class="p-4">
            <Link href="{{ route('users.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <x-splade-form :default="$user" :action="route('users.update',$user)"  method="put" class="p-4 bg-white rounded-md space-y-2">
    <x-splade-input name="name" label="Name" />
    <x-splade-input name="email" label="Email address" />
    <x-splade-select name="roles[]" :options="$roles" multiple relation choices label="Roles" />
    <x-splade-select name="permissions[]" :options="$permissions" multiple relation choices label="Permissions" />

 
 
    <x-splade-submit />
</x-splade-form>

</x-admin-layout>