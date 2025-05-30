<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
{
     use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    /**
     * Get the sessions validated by the responsable.
     */
    public function validatedSeances()
    {
        return $this->hasMany(Seance::class, 'responsable_id');
    }
}
