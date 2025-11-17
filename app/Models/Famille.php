<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{

    use HasFactory; // Enable factory methods

    // Define fillable attributes
    protected $fillable = [
        'nom',
    ];

    // Relation famille - acticles
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
