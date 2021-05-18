<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Manga extends Model
{
    use HasFactory;

    public function getAll()
    {
        $mangas = DB::table('manga')->select('id_manga', 'titre', 'prix', 'couverture', 'nom_dessinateur', 'prenom_dessinateur')
        ->join('dessinateur', 'dessinateur.id_dessinateur', '=', 'manga.id_dessinateur')
        ->get();
        return $mangas;
    }

}
