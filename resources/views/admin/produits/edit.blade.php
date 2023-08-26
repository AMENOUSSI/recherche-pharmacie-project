<x-admin-layout>
    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Edition d'un produit</h1>

        <div class="p-4">
            <Link href="{{ route('pathologies.index') }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <x-splade-form :for="$form"/>

</x-admin-layout>