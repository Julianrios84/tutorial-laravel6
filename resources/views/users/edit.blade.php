@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Modify user</h3>
    <div class="row">
        <div class="col-6 offset-md-3 offset-lg-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
                </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection