@extends('layouts.app')

@section('content')
    <div class="mdk-box mdk-box--bg-primary bg-dark js-mdk-box mb-0" data-effects="parallax-background blend-background">
        <div class="mdk-box__bg">
            <div class="mdk-box__bg-front" style="background-image: url({{ asset('public/images/photodune-4161018-group-of-students-m.jpg')}});"></div>
        </div>

        <div class="mdk-box__content justify-content-center">
            <div class="hero container page__container text-center py-112pt">
                <h1 class="text-white text-shadow">Learn to Code</h1>
                <p class="lead measure-hero-lead mx-auto text-white text-shadow mb-48pt"> Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional </p>
                <a href="courses.html" class="btn btn-lg btn-white btn--raised mb-16pt">Browse Courses</a>
                <p class="mb-0">
                    <a href="#" class="text-white text-shadow"><strong>Are you a teacher?</strong></a>
                </p>
            </div>
        </div>
    </div>
@endsection