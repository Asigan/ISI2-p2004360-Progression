<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenariste extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nom_scenariste', 'prenom_scenariste'];

    public function mangas(){
        return $this->hasMany(Manga::class);
    }
}
