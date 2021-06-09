@extends('layout')

@section('titrePage')
    Liste des collections
@endsection

@section('titreItem')
    <h1>Toutes les collections :</h1>
@endsection

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }} </p>
            </div>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thread>
            <th>#</th>
            <th>Titre</th>
            <th>Prix</th>
            <th></th>
        </thread>
        @foreach($collections as $collection)
            <tr>
                <td> {{ $collection->id }} </td>
                <td> {{ $collection->titre}} </td>
                <td> {{ $collection->prix }}</td>
                <td><a class="btn btn-primary" href="{{ route('collections.show', $collection->id) }}">Voir</a></td>
            </tr>
        @endforeach
    </table>
@endsection