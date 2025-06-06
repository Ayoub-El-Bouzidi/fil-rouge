<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'heure_debut',
        'heure_fin',
        'duree',
        'etat_validation',
        'formateur_id',
        'module_id',
        'responsable_id',
    ];

    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class, 'responsable_id');
    }
}
