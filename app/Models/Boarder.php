<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boarder extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'situation_matrimoniale',
        'date_entree',
        'date_sortie',
        'nombre_enfants',
        'tranche_age_enfants',
        'lieu_residence',
        'formes_violence_identifiees',
        'recit_histoire',
    ];
}
