@extends('layouts.user')

@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Course</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('student') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('student.courses.index') }}">Courses</a></li>
                    <li class="breadcrumb-item active">Course</li>

                </ol>

            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="navbar navbar-light border-0 navbar-expand mt-16pt">
    <div class="container page__container">
    </div>
</div>
<div class="bg-primary pb-lg-64pt py-32pt">
    <div class="container page__container">
        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
            <div class="player embed-responsive-item">
                <div class="player__content">
                    <div class="player__image" style="--player-image: url(https://luma.humatheme.com/public/images/illustration/player.svg)"></div>
                    <a href="#" class="player__play bg-primary">
                        <span class="material-icons">play_arrow</span>
                    </a>
                </div>
                <div class="player__embed d-none">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap align-items-end mb-16pt">
            <h1 class="text-white flex m-0">Introduction to TypeScript</h1>
            <p class="h1 text-white-50 font-weight-light m-0">50:13</p>
        </div>
    </div>
</div>
<div class="navbar navbar-expand-sm navbar-dark border-bottom-2 navbar-list p-0 m-0 align-items-center">
    <div class="container page__container">
        <ul class="nav navbar-nav flex align-items-sm-center">
            <li class="nav-item navbar-list__item">
                <div class="media align-items-center">
                    <span class="media-left mr-16pt">
                        <img src="{{ asset('images/people/50/guy-6.jpg') }}" width="40" alt="avatar" class="rounded-circle">
                    </span>
                    <div class="media-body">
                        <a class="card-title m-0"
                           href="teacher-profile.html">Eddie Bryan</a>
                        <p class="text-50 lh-1 mb-0">Instructor</p>
                    </div>
                </div>
            </li>
            <li class="nav-item navbar-list__item">
                <i class="material-icons text-muted icon--left">schedule</i>
                2h 46m
            </li>
            <li class="nav-item navbar-list__item">
                <i class="material-icons text-muted icon--left">assessment</i>
                Beginner
            </li>
            <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                <div class="rating rating-24">
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star</i></div>
                    <div class="rating__item"><i class="material-icons">star_border</i></div>
                </div>
                <p class="lh-1 mb-0"><small class="text-muted">20 ratings</small></p>
            </li>
        </ul>
    </div>
</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="page-separator">
            <div class="page-separator__text">Lessdons</div>
        </div>
        <div class="row mb-0">
            <div class="col-lg-12">

                <div class="accordion js-accordion accordion--boxed list-group-flush" id="parent">
                    <div class="accordion__item open">
                        <a href="#"
                           class="accordion__toggle"
                           data-toggle="collapse"
                           data-target="#course-toc-2"
                           data-parent="#parent">
                            <span class="flex">{{ $course->title }}</span>
                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                        </a>
                        <div class="accordion__menu collapse show"
                             id="course-toc-2">
                            <div class="accordion__menu-link">
                                <span class="icon-holder icon-holder--small icon-holder--dark rounded-circle d-inline-flex icon--left">
                                    <i class="material-icons icon-16pt">check_circle</i>
                                </span>
                                <a class="flex"
                                   href="student-lesson.html">Introduction</a>
                                <span class="text-muted">8m 42s</span>
                            </div>
                            <div class="accordion__menu-link active">
                                <span class="icon-holder icon-holder--small icon-holder--primary rounded-circle d-inline-flex icon--left">
                                    <i class="material-icons icon-16pt">play_circle_outline</i>
                                </span>
                                <a class="flex"
                                   href="student-lesson.html">Introduction to TypeScript</a>
                                <span class="text-muted">50m 13s</span>
                            </div>
                            <div class="accordion__menu-link">
                                <span class="icon-holder icon-holder--small icon-holder--light rounded-circle d-inline-flex icon--left">
                                    <i class="material-icons icon-16pt">lock</i>
                                </span>
                                <a class="flex"
                                   href="student-lesson.html">Comparing Angular to AngularJS</a>
                                <span class="text-muted">12m 10s</span>
                            </div>
                            <div class="accordion__menu-link">
                                <span class="icon-holder icon-holder--small icon-holder--light rounded-circle d-inline-flex icon--left">
                                    <i class="material-icons icon-16pt">hourglass_empty</i>
                                </span>
                                <a class="flex"
                                   href="student-take-quiz.html">Quiz: Getting Started With Angular</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="page-section  border-bottom-2">

    <div class="container page__container">
        <div class="row ">
            <div class="col-md-7">
                <div class="page-separator">
                    <div class="page-separator__text">About this course</div>
                </div>
                <p class="text-70">This course will teach you the fundamentals o*f working with Angular 2. You *will learn everything you need to know to create complete applications including: components, services, directives, pipes, routing, HTTP, and even testing.</p>
                <p class="text-70 mb-0">This course will teach you the fundamentals o*f working with Angular 2. You *will learn everything you need to know to create complete applications including: components, services, directives, pipes, routing, HTTP, and even testing.</p>
            </div>
            <div class="col-md-5">
                <div class="page-separator">
                    <div class="page-separator__text ">What you’ll learn</div>
                </div>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70">Fundamentals of working with Angular</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70">Create complete Angular applications</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70">Working with the Angular CLI</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70">Understanding Dependency Injection</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <span class="material-icons text-50 mr-8pt">check</span>
                        <span class="text-70">Testing with Angular</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>


<div class="page-section border-bottom-2">
    <div class="container">
        <div class="page-headline text-center">
            <h2>Feedback</h2>
            <p class="lead text-70 measure-lead mx-auto">What other students turned professionals have to say about us after learning with us and reaching their goals.</p>
        </div>

        <div class="position-relative carousel-card p-0 mx-auto">
            <div class="row d-block js-mdk-carousel"
                 id="carousel-feedback">
                <a class="carousel-control-next js-mdk-carousel-control mt-n24pt"
                   href="#carousel-feedback"
                   role="button"
                   data-slide="next">
                    <span class="carousel-control-icon material-icons"
                          aria-hidden="true">keyboard_arrow_right</span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="mdk-carousel__content">

                    <div class="col-12 col-md-6">

                        <div class="card card-feedback card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </blockquote>
                        </div>
                        <div class="media ml-12pt">
                            <div class="media-left mr-12pt">
                                <a href="student-profile.html"
                                   class="avatar avatar-sm">
                                    {{-- <img src="{{ asset('images/people/110/guy-.jpg') }}" width="40" alt="avatar" class="rounded-circle"> --}}
                                    <span class="avatar-title rounded-circle">UK</span>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <a href="student-profile.html"
                                   class="card-title">Umberto Kass</a>
                                <div class="rating mt-4pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="card card-feedback card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </blockquote>
                        </div>
                        <div class="media ml-12pt">
                            <div class="media-left mr-12pt">
                                <a href="student-profile.html"
                                   class="avatar avatar-sm">
                                    <!-- <img src="{{ asset('images/people/110/guy-.jpg') }}" width="40" alt="avatar" class="rounded-circle"> -->
                                    <span class="avatar-title rounded-circle">UK</span>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <a href="student-profile.html"
                                   class="card-title">Umberto Kass</a>
                                <div class="rating mt-4pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="card card-feedback card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </blockquote>
                        </div>
                        <div class="media ml-12pt">
                            <div class="media-left mr-12pt">
                                <a href="student-profile.html"
                                   class="avatar avatar-sm">
                                    {{-- <!-- <img src="{{ asset('images/people/110/guy-.jpg') }}" width="40" alt="avatar" class="rounded-circle"> --> --}}
                                    <span class="avatar-title rounded-circle">UK</span>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <a href="student-profile.html"
                                   class="card-title">Umberto Kass</a>
                                <div class="rating mt-4pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section  border-bottom-2">

    <div class="container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Student Feedback</div>
        </div>
        <div class="row mb-32pt">
            <div class="col-md-3 mb-32pt mb-md-0">
                <div class="display-1">4.7</div>
                <div class="rating rating-24">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-muted mb-0">20 ratings</p>
            </div>
            <div class="col-md-9">

                <div class="row align-items-center mb-8pt"
                     data-toggle="tooltip"
                     data-title="75% rated 5/5"
                     data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                             style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                 role="progressbar"
                                 aria-valuenow="75"
                                 style="width: 75%"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                     data-toggle="tooltip"
                     data-title="16% rated 4/5"
                     data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                             style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                 role="progressbar"
                                 aria-valuenow="16"
                                 style="width: 16%"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                     data-toggle="tooltip"
                     data-title="12% rated 3/5"
                     data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                             style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                 role="progressbar"
                                 aria-valuenow="12"
                                 style="width: 12%"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                     data-toggle="tooltip"
                     data-title="9% rated 2/5"
                     data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                             style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                 role="progressbar"
                                 aria-valuenow="9"
                                 style="width: 9%"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-8pt"
                     data-toggle="tooltip"
                     data-title="0% rated 0/5"
                     data-placement="top">
                    <div class="col-md col-sm-6">
                        <div class="progress"
                             style="height: 8px;">
                            <div class="progress-bar bg-secondary"
                                 role="progressbar"
                                 aria-valuenow="0"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                        <div class="rating">
                            <span class="rating__item"><span class="material-icons">star</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pb-16pt mb-16pt border-bottom row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                       class="avatar avatar-sm mr-12pt">
                        <!-- <img src="LB" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">LB</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                           class="card-title">Laza Bogdan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-70 mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
            </div>
        </div>

        <div class="pb-16pt mb-16pt border-bottom row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                       class="avatar avatar-sm mr-12pt">
                        <!-- <img src="UK" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">UK</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                           class="card-title">Umberto Klass</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-70 mb-0">This course is absolutely amazing, Bryan goes* out of his way to really expl*ain things clearly I couldn&#39;t be happier, so glad I made this purchase!</p>
            </div>
        </div>

        <div class="pb-16pt mb-24pt row">
            <div class="col-md-3 mb-16pt mb-md-0">
                <div class="d-flex">
                    <a href="student-profile.html"
                       class="avatar avatar-sm mr-12pt">
                        <!-- <img src="AD" alt="avatar" class="avatar-img rounded-circle"> -->
                        <span class="avatar-title rounded-circle">AD</span>
                    </a>
                    <div class="flex">
                        <p class="small text-muted m-0">2 days ago</p>
                        <a href="student-profile.html"
                           class="card-title">Adrian Demian</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="rating mb-8pt">
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star</span></span>
                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                </div>
                <p class="text-70 mb-0">This course is absolutely amazing, Bryan goes* out of his way to really expl*ain things clearly I couldn&#39;t be happier, so glad I made this purchase!</p>
            </div>
        </div>

    </div>

</div>
@endsection