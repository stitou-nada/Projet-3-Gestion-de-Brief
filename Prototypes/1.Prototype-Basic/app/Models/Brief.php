<?php

namespace App\Models;
use App\Models\tache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;
     public function OneToManyTaches(){
            return $this->hasMany(tache::class);
     }
}
