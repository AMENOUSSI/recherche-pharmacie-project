    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Créer un nouvel utilisateur</h1>

        <div class="p-4">
            <Link href="{{ route('users.index') }}" class="px-4 py-2 bg-pink-500 hover:bg-pink-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <h1 class="text-2xl font-semilbold p-4" >Ajout d'un utilisateur</h1>
    <x-splade-form  :action="route('users.store')"  method="post" class="p-4 bg-white rounded-md space-y-2">
    <x-splade-input name="name" label="Name" />
    <x-splade-input name="email" label="Email address" />
    <x-splade-input type="password" name="password"  label="Password" />
    <x-splade-input type="password" name="password_confirmation" label="Password Confirmation" />
    <x-splade-select name="roles[]" :options="$roles" multiple relation choices  label="Role" placeholder="Choisir une permission" />
    <x-splade-select name="permissions[]" :options="$permissions" multiple relation choices label="Permissions" placeholder="Choisir un rôle" />

 
 
    <x-splade-submit />
</x-splade-form>

</x-admin-layout>