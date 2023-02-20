<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;
use App\Models\Referentiel;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class,'candidat_forms');
    }


    public function referentiels()
    {
        return $this->belongsToMany(Referentiel::class,'formation_refs');
    }
}
