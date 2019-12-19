@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Create user</h3>
    <div class="row">
        <div class="col-6 offset-md-3 offset-lg-3">
            <form action="/users" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              
                <button type="submit" class="btn btn-primary">Registrar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
              </form>
        </div>
    </div>
</div>
@endsection