@extends('layouts.auth')

@section('content')
<div class="pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
            <div class="page-separator">
                <div class="page-separator__text">Register</div>
            </div>
            <form  method="POST" action="{{ route('register') }}" class="col-md-10 p-0 mx-auto">
                @csrf
                <div class="card overlay--primary-dodger-blue p-4">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-soft-accent alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="d-flex flex-wrap align-items-start">
                                    <div class="mr-8pt">
                                        <i class="material-icons">access_time</i>
                                    </div>
                                    <div class="flex" style="min-width: 180px">
                                        <small class="text-white-100">
                                            {{ $error }}
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="name">Name:</label>
                                <input id="name" type="text" name="name" :value="old('name')" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="email">Email:</label>
                                <input id="email" type="email" name="email" :value="old('email')" class="form-control" placeholder="Enter Your Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="phone">Phone:</label>
                                <input id="phone" type="text" name="phone" :value="old('phone')" class="form-control" placeholder="Enter Your Phone Number">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Role:</label>
                                <select name="role" class="form-control custom-select">
                                    <option value="">SELECT ROLE</option>
                                    <option value="instructor">Instructor</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="password">Password:</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="password">Confirm Password:</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Your Password">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>
        
    </div>
</div>
@endsection
