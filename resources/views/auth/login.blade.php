@extends('layouts.auth')

@section('content')
<div class="pt-32pt pt-sm-64pt pb-32pt">
    <div class="container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Login</div>
        </div>
        <form  method="POST" action="{{ route('login') }}" class="col-md-8 p-0 mx-auto">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="email">Email:</label>
                            <input id="email" type="text" name="email" :value="old('email')" class="form-control" placeholder="Your email address ...">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="password">Password:</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="Your first and last name ...">
                            <p class="text-right"><a href="reset-password.html" class="small">Forgot your password?</a></p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary btn-block">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection