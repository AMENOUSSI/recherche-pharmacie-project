<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['nom','description','date_fabrication','date_expiration','categorie','pharmacie_id','prix'];

    public function pharmacie()
    {
        return $this->BelongsTo(Pharmacie::class);
    }

    
}
