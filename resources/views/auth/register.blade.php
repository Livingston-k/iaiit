@extends('layouts.auth')

@section('content')
<div class="pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <form  method="POST" action="{{ route('register') }}" class="col-md-5 p-0 mx-auto">
            @csrf
            <div class="form-group">
                <label class="form-label" for="name">Name:</label>
                <input id="name" type="text" name="name" :value="old('name')" class="form-control" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input id="email" type="email" name="email" :value="old('email')" class="form-control" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label class="form-label" for="phone">Phone:</label>
                <input id="phone" type="text" name="phone" :value="old('phone')" class="form-control" placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
                <label class="form-label">Role:</label>
                <select name="role" class="form-control custom-select">
                    <option value="">SELECT ROLE</option>
                    <option value="instructor">Instructor</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
                <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Confirm Password:</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Your Password">
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
