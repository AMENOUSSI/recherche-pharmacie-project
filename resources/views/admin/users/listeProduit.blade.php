{{-- @foreach ($produits as $produit)
    <div class="produit">
        <h2>{{ $produit->nom }}</h2>
        <p>{{ $produit->description }}</p>
        <p>{{ $produit->date_fabrication }}</p>
        <p>{{ $produit->date_expiration }}</p>
        <p>{{ $produit->categorie }}</p>
        <p>Prix : {{ $produit->prix }}</p>
        <!-- Affichez d'autres informations du produit ici -->
    </div>
@endforeach --}}

<table class="min-w-full divide-y divide-green-500">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de fabrication</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date d'expiration</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categorie</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
            <!-- Ajoutez d'autres en-têtes de colonne ici -->
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($produits as $produit)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $produit->nom }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $produit->description }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $produit->date_fabrication }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $produit->date_expiration }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $produit->categorie }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $produit->prix }}</td>
                <!-- Ajoutez d'autres cellules de données ici -->
            </tr>
        @endforeach
    </tbody>
</table>

