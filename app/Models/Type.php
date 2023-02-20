<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Referentiel;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle'
    ];

    public function referentiels()
    {
            return $this->hasMany(Referentiel::class);
    }
}
