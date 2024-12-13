@extends('layouts.default')

@section('contenu')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $user->id }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $user->name }}</p>
                    <p class="card-text">{{ $user->email }}</p>
                    <p class="card-text">{{ $user->created_at }}</p>
                    <p class="card-text">{{ $user->updated_at }}</p>
                    <p class="card-text">{{ $user->first_name }}</p>
                    <p class="card-text">{{ $user->last_name }}</p>
                    <p class="card-text">{{ $user->comment }}</p>
                </div>
                <div class="card-footer">
                    <form action="{{ route('users.destroy', $role->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('contenu-footer')
    <p>Gestion des utilisateurs</p>
@stop