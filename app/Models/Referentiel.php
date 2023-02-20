<?php

namespace App\Models;
use App\Models\Formation;
use App\Models\Type;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle','validated','horaire','type_id'
    ];
    public function formations()
    {
        return $this->belongsToMany(Formation::class,'formation_refs');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
