<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Fillable(['titre', 'auteur', 'description', 'image_couverture', 'est_disponible'])] /* Nouveau methode pour version  13 de Mass Assgninment */
class Livre extends Model
{
    use HasFactory;

    // Version 12 pour Mass assginment
    
    // protected $fillable = [
    //     'titre',
    //     'auteur',
    //     'description',
    //     'image_couverture',
    //     'est_disponible',
    // ];
}
