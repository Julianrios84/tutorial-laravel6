@extends('layouts.app')

@section('content')
<div class="container">
    <h3>List user <a class="btn btn-primary float-right btn-sm" href="users/create" role="button">Add</a></h3>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
    
            @foreach ($users as $user)
            <tr>
                <td scope="row">{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary btn-sm">View</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Modify</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection