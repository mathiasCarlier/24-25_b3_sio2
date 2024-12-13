@extends('layouts.default')

@section('contenu')
    <div class="row">
            @foreach ($listes as $liste)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $liste->id }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $liste->nomList }}</p>
                            <p class="card-text">{{ $liste->date_crea }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('listes.edit', $liste->idList) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <a href="{{ route('listes.show', $liste->idList) }}"
                                        class="btn btn-primary btn-sm">Show</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('listes.destroy', $liste->idList) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-sm">
                <a href="{{ route('listes.create', $listes->idList) }}"
                    class="btn btn-primary btn-sm">Create</a>
            </div>
        </div>
    </div>
@stop

@section('contenu-footer')
    <p>Gestion des listes</p>
@stop
   
                    



