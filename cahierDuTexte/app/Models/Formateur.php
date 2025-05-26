<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Formateur extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    /**
     * Get the sessions planned by the formateur.
     */
    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    // RelationShips with Groupes
    public function groupes()
    {
        return $this->belongsToMany(Groupe::class, 'formateur_groupe', 'formateur_id', 'groupe_id');
    }
}
