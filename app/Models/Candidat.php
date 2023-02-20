<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom','age','sexe','email','niveauEtude'
    ];

    public function formations()
    {
        return $this->belongsToMany(Formation::class,'candidat_forms');
    }
}
