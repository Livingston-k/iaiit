<!DOCTYPE html>
@extends('layouts.user')

@section('content')
<div class="page-section bg-primary">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-md-left">
        <img src="https://luma.humatheme.com/public/images/illustration/teacher/128/white.svg"
             width="104"
             class="mr-md-32pt mb-32pt mb-md-0"
             alt="instructor">
        <div class="flex mb-32pt mb-md-0">
            <h2 class="text-white mb-0">{{ $instructor->name}}</h2>
            <p class="lead text-white-50 d-flex align-items-center">Instructor</p>
        </div>
    </div>
</div>

<div class="page-section  border-bottom-2">
    <div class="container page__container">
        <div class="row">
            <div class="col-md-6">
                <h4>About me</h4>
                <p>Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>
            </div>
            <div class="col-md-6">
                <h4>Connect</h4>
                <p>I’m currently working as a freelance marketing director and always interested in a challenge. Here’s how to reach out and connect.</p>
                <div class="d-flex align-items-center">
                    <a href="#"
                       class="text-accent fab fa-facebook-square font-size-24pt mr-8pt"></a>
                    <a href="#"
                       class="text-accent fab fa-twitter-square font-size-24pt"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container page__container page-section">

    <div class="page-headline text-center">
        <h2>Courses</h2>
        <p class="lead text-70 col-lg-8 mx-auto">Courses by {{ $instructor->name}}</p>
    </div>

    <div class="row card-group-row mb-8pt">

        @foreach ($instructor->courses as $course)
                <div class="col-sm-6 card-group-row__col">
                <div class="card card-sm card-group-row__card">
                    <div class="card-body d-flex align-items-center">
                        <a href="course.html"
                        class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                            <img src="{{URL::asset('uploads/courses/'.$course->image)}}" alt="Angular Routing In-Depth" class="avatar-img rounded">
                            <span class="overlay__content"></span>
                        </a>
                        <div class="flex">
                            <a class="card-title mb-4pt"
                            href="course.html">{{ $course->title}}</a>
                            <div class="d-flex align-items-center">
                                <small class="text-muted">{{ count($course->views)}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <a href="#" class="btn btn-block btn-light mb-32pt">Load more ...</a> --}}
</div>
@endsection

