<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function mangas(){
        return $this->belongsToMany(Manga::class);
    }
}
