<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Offre;


class Userpost extends Model
{
    use HasFactory;

    public function offres(){

        return $this->belongsToMany(Offre::class);
    }
}
