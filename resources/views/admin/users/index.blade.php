    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Les Utilisateurs</h1>

        <div class="p-4">
            <Link href="{{ route('users.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded font-semibold text-white">Nouveau</Link>
        </div>

    </div>
    <x-splade-table :for="$users">
        @cell('action',$user)
        <div class="space-x-4">
            <Link href="{{ route('users.edit',$user)}}" class="px-3 py-2 bg-green-400 hover:bg-green-700 rounded text-white">Edit</Link>
        <Link
            href="{{ route('users.destroy',$user)}}"
            method="DELETE" 
            class="px-3 py-2 bg-red-400 hover:bg-red-700 rounded text-white"
            confirm="Vous êtes sur le point de supprimer cet élément"
            confirm-button="Continuer"
            cancel-button="Annuler"
            href="/danger">
            
            Supprimer
        </Link>
        </div>
        
        @endcell
    </x-splade-table>
    

</x-admin-layout>