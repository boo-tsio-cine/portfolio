<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etude extends Model
{
    //

    use HasFactory;

    protected $table = 'etudes'; //nom de la table

    protected $fillable = [
        'type',
        'lieu',
        'nom',
        'diplome',
        'annee',
    ];
}
