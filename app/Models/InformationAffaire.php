<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class InformationAffaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_information_affaire',
        'id_acteur',
        'nom',
        'description',
        'date_debut',
        'date_fin',
        'responsable',
        'lieu',
        'statut',
        'budget',

    ];

    public function acteur()
    {
        return $this->belongsTo(Acteur::class, 'id_acteur');
    }

}
