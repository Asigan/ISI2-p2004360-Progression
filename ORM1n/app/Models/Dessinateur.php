<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillabe = ['nom_dessinateur', 'prenom_dessinateur'];
    public function mangas(){
        return $this->hasMany(Manga::class);
    }
}
