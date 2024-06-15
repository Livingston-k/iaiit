@extends('layouts.admin')

@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Courses</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>

                    <li class="breadcrumb-item active">

                        Courses

                    </li>

                </ol>

            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="container page__container page-section">

    <div class="page-separator">
        <div class="page-separator__text">Development Courses</div>
    </div>

    <div class="row card-group-row">
        @foreach ($courses as $course)
            <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card">
                    <a href="{{ route('admin.courses.show', $course->id) }}" class="card-img-top js-image" data-position="" data-height="140">
                        <img src="{{URL::asset('uploads/courses/'.$course->image)}}" alt="course"/>
                    </a>

                    <div class="card-body flex">
                        <div class="d-flex">
                            <div class="flex">
                                <a href="{{ route('admin.courses.show', $course->id) }}" class="card-title" href="#">{{ $course->title }}</a>
                                <small class="text-50 font-weight-bold mb-4pt">UGX {{ $course->price }}</small>
                            </div>
                            <a href="#" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row justify-content-between">
                            <div class="col-auto d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                <p class="flex text-50 lh-1 mb-0"><small>{{ $course->created_at->diffForHumans() }}</small></p>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                <p class="flex text-50 lh-1 mb-0"><small>{{ $course->lessons_count }} lessons</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-32pt">

        <ul class="pagination justify-content-start pagination-xsm m-0">
            <li class="page-item disabled">
                <a class="page-link"
                   href="#"
                   aria-label="Previous">
                    <span aria-hidden="true"
                          class="material-icons">chevron_left</span>
                    <span>Prev</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link"
                   href="#"
                   aria-label="Page 1">
                    <span>1</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link"
                   href="#"
                   aria-label="Page 2">
                    <span>2</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link"
                   href="#"
                   aria-label="Next">
                    <span>Next</span>
                    <span aria-hidden="true"
                          class="material-icons">chevron_right</span>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection