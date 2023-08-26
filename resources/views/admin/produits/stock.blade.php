    

<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Les Rôles</h1>

        <div class="p-4">
            <Link href="{{ route('admin.roles.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded font-semibold text-white">Nouveau</Link>
        </div>

    </div>
    <x-splade-table :for="$produits">
        
    </x-splade-table>
    

</x-admin-layout>