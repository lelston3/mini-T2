<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory; // Enable factory methods

    // Define fillable attributes
    protected $fillable = [
        'nom',
        'prix_ht',
        'prix_achat',
        'taux_TGC',
        'famille_id',
    ];

    // Relation article - famille
    public function famille(){
        return $this->belongsTo(Famille::class);
    }
}
