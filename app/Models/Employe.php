<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    
    use HasFactory;
    protected $fillable = [
        
        'email',
        'mot_de_passe',
        'cin',
        'Nom',
        'Prenom',
        'sexe',
        'date_nais',
        'tel',
        'grade',
        'salaire' , 'role', 'ncnss'

    ];
}
