@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Admin</div>
    <div class="card-body">
        <div class="mb-3">
            Dashboard > Admin 
        </div>
        <form method="POST" action="{{ route('store-admin') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">                                 
                        <input id="name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">                                 
                        <input id="name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autocomplete="name" autofocus>
                    </div>
                </div>
            </div>
            <div class="form-group">                           
                <input id="name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="Username" required autocomplete="name" autofocus>
            </div>
            <div class="form-group">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">                           
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                
            </div>
            <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
       
@endsection