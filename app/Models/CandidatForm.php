<?php

namespace App\Models;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\FormationRef;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'duree','description','started','dateDeb','formation_id','candidat_id'
    ];
}
