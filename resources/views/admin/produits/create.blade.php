<x-admin-layout>

    <div class="flex justify-between">
        <h1 class="text-2xl font-semilbold p-4" >Ajouter un produit</h1>

        <div class="p-4">
            <Link href="{{ route('produits.index') }}" class="px-4 py-2 bg-pink-500 hover:bg-pink-700 rounded font-semibold text-white">Retour</Link>
        </div>

    </div>
    <x-splade-form :for="$form"/>

</x-admin-layout>