@extends('layouts.default')

@section('contenu')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $liste->idList }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $liste->nomList }}</p>
                    <p class="card-text">{{ $liste->date_crea }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('listes.edit', $liste->idList) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('listes.destroy', $liste->idList) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('contenu-footer')
    <p>Gestion des listes</p>
@stop