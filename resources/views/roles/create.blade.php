@extends('layouts.default')

@section('contenu')
    <div class="container h-100 mt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h3>Add a Post</h3>
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="label">label</label>
                            <textarea class="form-control" id="label" name="label" rows="3" required></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </form>
                </div>
            </div>
    </div>
@stop

@section('contenu-footer')
    <p>Gestion des rôles</p>
@stop