<?php

namespace App\Tables;

use App\Models\ListTable;
use App\Models\Pharmacie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ListTables extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('nom', 'LIKE', "%{$value}%")
                        ->orWhere('description', 'LIKE', "%{$value}%")
                        ->orWhere('date_fabrication', 'LIKE', "%{$value}%")
                        ->orWhere('date_expiration', 'LIKE', "%{$value}%")
                        ->orWhere('categorie', 'LIKE', "%{$value}%")
                        ->orWhere('pharmacie_id', 'LIKE', "%{$value}%")
                        ->orWhere('prix', 'LIKE', "%{$value}%");
                });
            });
        });
        return QueryBuilder::for(Produit::class)
        ->defaultSort('nom')
        ->allowedSorts([ 'id', 'nom' ])
        ->allowedFilters(['id','nom','pharmacie_id','categorie', 'description',$globalSearch]);
       
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
        ->withGlobalSearch(columns: ['nom'])
        ->column('id', sortable: true)
        ->column('nom', sortable: true)
        ->column('description', sortable: true)
        ->column('date_fabrication', sortable: true)
        ->column('date_expiration', sortable: true)
        ->column('categorie', sortable: true)
        ->column('prix', sortable: true)
        ->column(key:'pharmacie.nom',label: 'Pharmacie')
        
        ->selectFilter(
            key:'pharmacie_id',
            options: Pharmacie::pluck('nom', 'id')->toArray(),
            label: 'Pharmacie'
        )

       
        
        ->paginate(10);


            
    }
}
