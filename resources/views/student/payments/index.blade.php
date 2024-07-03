@extends('layouts.user')

@section('content')

@php
    function getInitials($name) {
        $words = explode(' ', $name);
        $initials = '';

        foreach ($words as $word) {
            if (!empty($word)) {
                $initials .= strtoupper($word[0]);
            }
        }
        return $initials;
    }
@endphp

<div class="navbar navbar-light border-0 navbar-expand">
    <div class="container page__container">
        <div class="media flex-nowrap">
            <div class="media-left mr-16pt">
                <a href="student-course.html"><img src="{{ asset('images/paths/angular_64x64.png') }}" width="40" alt="Angular" class="rounded"></a>
            </div>
            <div class="media-body">
                <a href="student-course.html" class="card-title text-body mb-0">{{ $course->title }}</a>
                <p class="lh-1 d-flex align-items-center mb-0">
                    <span class="text-50 small font-weight-bold mr-8pt">{{ $course->created_at->diffForHumans() }}</span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-primary pb-lg-64pt py-32pt">
    <div class="container page__container">
        <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
            <div class="player embed-responsive-item">
                <div class="">
                    <video id="my-video" class="video-js" controls preload="auto" width="930" height="510" poster="{{URL::asset('uploads/lessons/thumbnails/'.$lesson->thumbnail)}}" data-setup="{}">
                        <source id="video-source" src="{{URL::asset('uploads/lessons/videos/'.$lesson->video_url)}}" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap align-items-end mb-16pt">
            <h3 class="text-white flex m-0" id="video-title">{{ $lesson->title }}</h3>
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
                        <a class="card-title m-0" href="{{ route('student.instructor_profile', $course->user->id) }}">{{ $course->user->name }}</a>
                        <p class="text-50 lh-1 mb-0">Instructor</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">
        <div class="page-separator">
            <div class="page-separator__text">Lessons</div>
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
                            @foreach ($course->lessons as $lesson)
                                <div class="accordion__menu-link active">
                                    <span class="icon-holder icon-holder--small icon-holder--primary rounded-circle d-inline-flex icon--left">
                                        <i class="material-icons icon-16pt">play_circle_outline</i>
                                    </span>
                                    <a class="flex lesson-link" href="{{ route('student.change_lesson', $lesson->id) }}" data-video="{{ URL::asset('uploads/lessons/videos/' . $lesson->video_url) }}" data-thumbnail="{{ URL::asset('uploads/lessons/thumbnails/' . $lesson->thumbnail) }}" data-title="{{ $lesson->title }}">
                                        {{ $lesson->title }}
                                    </a>
                                    {{-- <span class="text-muted">50m 13s</span> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">
        <div class="row">
            <div class="col-md-7">
                <div class="page-separator">
                    <div class="page-separator__text">About this course</div>
                </div>
                <p class="text-70 mb-0">{{ $course->description }}</p>
            </div>
            <div class="col-md-5">
                <div class="page-separator">
                    <div class="page-separator__text">What you’ll learn</div>
                </div>
                <ul class="list-unstyled">
                    @foreach ($course->lessons as $lesson)
                        <li class="d-flex align-items-center">
                            <span class="material-icons text-50 mr-8pt">check</span>
                            <span class="text-70">{{ $lesson->description }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="page-section border-bottom-2">
    <div class="container page__container">
        <div class="row">
            <div class="col-md-7">
                <div class="page-separator">
                    <div class="page-separator__text">Comments</div>
                </div>
                @if (count($course->comments) > 0)
                    @foreach ($course->comments as $comment)
                        <div class="pb-16pt mb-16pt border-bottom row">
                            <div class="col-md-3 mb-16pt mb-md-0">
                                <div class="d-flex">
                                    <a href="#" class="avatar avatar-sm mr-12pt">
                                        <span class="avatar-title rounded-circle">{{ getInitials($comment->user->name) }}</span>
                                    </a>
                                    <div class="flex">
                                        <p class="small text-muted m-0">{{ $comment->created_at->diffForHumans() }}</p>
                                        <a href="#" class="card-title">{{ $comment->user->name }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p class="text-70 mb-0">{{ $comment->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-70 mb-0">Be the first to comment</p>
                @endif
            </div>

            <div class="col-md-5">
                <form method="POST" action="{{ route('student.comment') }}">
                    @csrf
                    <div class="form-group mb-32pt">
                        <textarea style="height: 150px; color:black" class="form-control" name="comment"></textarea>
                    </div>
                    <input type="hidden" name="course" value="{{ $course->id }}">

                    <button type="submit" class="btn btn-outline-secondary mb-24pt mb-sm-0">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
