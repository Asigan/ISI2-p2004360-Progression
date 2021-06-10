@extends('layout')

@section('contenu')
    @auth 
        <br/>
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Ajouter un manga</h4>
                <div class="card-body">
                    <form action="{{ route('mangas.store') }}" method="POST">
                        @csrf 
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nomDessinateur') is-invalid @enderror" 
                                name="nomDessinateur" id="nomDessinateur" placeholder="Nom du dessinateur">
                                @error('nomDessinateur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="text" class="form-control @error('nomScenariste') is-invalid @enderror"
                            name="nomScenariste" id="nomScenariste" placeholder="Nom du scenariste">
                            @error('nomScenariste')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror 
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="text" class="form-control @error('genre') is-invalid @enderror"
                            name="genre" id="genre" placeholder="Genre du Manga">
                            @error('genre')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror 
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="text" class="form-control @error('prix') is-invalid @enderror"
                            name="prix" id="prix" placeholder="Prix du Manga">
                            @error('prix')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror 
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="text" class="form-control @error('titre') is-invalid @enderror"
                            name="titre" id="titre" placeholder="Titre du manga">
                            @error('titre')
                                <div class="alert alert-danger">{{ $message }} </div>
                            @enderror 
                        </div>
                        <br />
                        <div class="form-group">
                            <input type="text" class="form-control" name="couverture"
                                id="couverture" placeholder="Couverture">
                        </div>
                        <br />
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    @else 
        <div class="container">
            <div class="row card text-white bg-dark">
                <h4 class="card-header">Accès interdit</h4>
                <div class="card-body"><div class="card-text">Vous n'avez pas les autorisations requises pour accéder à cette page</div>
            </div>
        </div>
    @endauth 
@endsection