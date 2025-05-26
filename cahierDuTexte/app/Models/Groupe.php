<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Groupe extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function formateurs()
    {
        return $this->belongsToMany(Formateur::class, 'formateur_groupe', 'groupe_id', 'formateur_id');
    }
}
