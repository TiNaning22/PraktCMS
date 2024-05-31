@extends('layouts.main')

@section('contents')

<div class="row">
    <div class="col-md-4">
        <form action="/dashboard/" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-user @error('username')is-invalid @enderror" id="username" name="username"
                    placeholder="Username" required value="{{ old('username') }}">
                
            </div>
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="name" name="name"
                    placeholder="Name" required value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-user" id="email" name="email"
                    placeholder="Email Address" required value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="password" name="password"
                    placeholder="Password">
            </div>
            
            <button class="btn btn-primary btn-user btn-block" type="submit">Register</button>
            <hr>
        </form>
    </div>
</div>
@endsection