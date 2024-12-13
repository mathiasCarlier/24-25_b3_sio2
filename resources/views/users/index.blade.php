@extends('layouts.default')

@section('contenu')
    <div class="row">
            @foreach ($users as $user)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $user->id }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $user->name }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('users.show', $user->id) }}"
                                        class="btn btn-primary btn-sm">Détail</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('contenu-footer')
    <p>Gestion des utilisateurs</p>
@stop
   
                    



