<?php

namespace App\Tables;

use App\Models\Pharmacie;
use App\Models\Pharmacy;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Pharmacies extends AbstractTable
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
                        ->orWhere('region', 'LIKE', "%{$value}%")
                        ->orWhere('prefecture', 'LIKE', "%{$value}%")
                        ->orWhere('quartier', 'LIKE', "%{$value}%")
                        ->orWhere('telephone', 'LIKE', "%{$value}%");
                });
            });
        });
        return QueryBuilder::for(Pharmacie::class)
        ->defaultSort('nom')
        ->allowedSorts([ 'id', 'nom','region','prefecture','quartier','telephone' ])
        ->allowedFilters(['pharmacie_id', 'nom','region','prefecture','quartier',$globalSearch]);
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
            ->withGlobalSearch(columns: ['nom','region','prefecture','quartier'])
            ->column('id', sortable: true)
            ->column('nom', sortable: true)
            ->column('region', sortable: true)
            ->column('prefecture', sortable: true)
            ->column('quartier', sortable: true)
            ->column('telephone', sortable: true)
            ->selectFilter(
                key:'nom',
                options: Pharmacie::pluck('nom', 'nom')->toArray(),
                label: 'Nom'
            )
            ->selectFilter(
                key:'region',
                options: Pharmacie::pluck('region', 'region')->toArray(),
                label: 'Région'
            )
            ->selectFilter(
                key:'prefecture',
                options: Pharmacie::pluck('prefecture', 'prefecture')->toArray(),
                label: 'Prefecture'
            )
            ->selectFilter(
                key:'quartier',
                options: Pharmacie::pluck('quartier', 'quartier')->toArray(),
                label: 'Quartier'
            )

            ->column('action')
            ->paginate(10);

            
    }
}
