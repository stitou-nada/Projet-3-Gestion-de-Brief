<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brief extends Model
{
    use HasFactory;
    public $timestamps = FALSE;
    protected $fillable=[
       "Nom_du_brief",
       "Date_heure_de_livraison",
       "Date_heure_de_récupération"
   ];
}
