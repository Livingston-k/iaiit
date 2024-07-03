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
                    <li class="breadcrumb-item">  <a href="{{ route('student.courses.show', $course->id) }}">Course</a></li>
                    <li class="breadcrumb-item active">Payment</li>

                </ol>

            </div>
        </div>
    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->
    <img class="mb-24pt" src="{{URL::asset('uploads/courses/'.$course->image)}}" alt="course" class="mt-16pt" style="height: 40vh; object-fit: contain;">

    <div class="navbar navbar-light border-0 navbar-expand">
        <div class="container page__container">
            <div class="media flex-nowrap">
                <div class="media-body">
                    <a href="student-course.html" class="card-title text-body mb-0">{{ $course->title }}</a>
                    <p class="lh-1 d-flex align-items-center mb-0">
                        <span class="text-50 small font-weight-bold mr-8pt">{{ $course->created_at->diffForHumans() }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section border-bottom-2">
        <div class="container page__container">
            <form  method="POST" action="{{ route('student.subscribe') }}">
                <div class="row">
                    @csrf
                    <div class="col-md-6">
                        <div class="row">
                            <input type="hidden" name="course" class="form-control" value="{{ $course->id }}">

                            <div class="col-md-5">
                                <label class="form-label">Country</label>
                                <select name="country" class="form-control custom-select mb-24pt">
                                    <option selected disabled value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="col-md-7">
                                <label class="form-label">Phone Number</label>
                                <div class="input-group form-inline mb-24pt">
                                    <input type="text" name="phone" class="form-control" id="phone">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Price</label>
                        <div class="input-group form-inline mb-24pt">
                            <span class="input-group-prepend"><span class="input-group-text">$</span></span>
                            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $course->price }}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-outline-secondary mb-24pt mb-sm-0">Make Course</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection