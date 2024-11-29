@extends('layouts.default')

@section('contenu')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Role</h3>
                <form action="{{ route('roles.update', $role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="label">Label</label>
                        <textarea type="text" class="form-control" id="label" name="label" value="{{ $role->label }}" rows="3" required> </textarea>
                            
                    </div>
                    <button type="submit" class="btn btn-primary">Update Role</button>
                </form>
            </div>
        </div>
    </div>

@stop

@section('contenu-footer')
    <p>Gestion des rôles</p>
@stop