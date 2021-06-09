@extends('layout')

@section('titrePage')
    Information sur le Manga
@endsection

@section('contenu')
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset($path)}}" alt="couverture">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Titre : {{ $manga->titre}}</h5>
        <p class="card-text">Dessinateur : {{ $dessinateur->nom_dessinateur . ' '.$dessinateur->prenom_dessinateur }}</p>
        <p class="card-text">Scénariste : {{ $scenariste->nom_scenariste . ' '.$scenariste->prenom_scenariste}}</p>
        <p class="card-text">Genre : {{ $genre->lib_genre}}</p>
        <p class="card-text">Prix : {{ $manga->prix }} </p>
      </div>
    </div>
  </div>
</div>
@endsection