@extends('layouts.auth')

@section('content')
<div class="pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <form  method="POST" action="{{ route('login') }}" class="col-md-5 p-0 mx-auto">
            @csrf
            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input id="email" type="text" name="email" :value="old('email')" class="form-control" placeholder="Your email address ...">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
                <input id="password" name="password" type="password" class="form-control" placeholder="Your first and last name ...">
                <p class="text-right"><a href="reset-password.html" class="small">Forgot your password?</a></p>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection