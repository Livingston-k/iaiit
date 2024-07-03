@extends('layouts.instructor')

@section('content')
<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="row">
            <div class="col-lg-4">
                <div class="card border-1 border-left-3 border-left-accent text-center mb-lg-0">
                    <div class="card-body">
                        <h4 class="h2 mb-0">{{ $month_amount }}/=</h4>
                        <div>Purchases this month</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center mb-lg-0">
                    <div class="card-body">
                        <h4 class="h2 mb-0">{{ $total_amount }}/=</h4>
                        <div>Account Balance</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center mb-lg-0">
                    <div class="card-body">
                        <h4 class="h2 mb-0">{{ $courses_count }}</h4>
                        <div>Total Courses</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container page__container page-section">
    <div class="row mb-8pt">
        <div class="col-lg-12">

            <div class="page-separator">
                <div class="page-separator__text">Courses</div>
            </div>
            <div class="card">
                <table class="table table-flush table-nowrap">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Course</th>
                            <th>Lessons</th>
                            <th>Amount</th>
                            <th>Date</a></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($courses as $course)
                            <tr>
                                <td>
                                    <div class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                        <img SRC="{{URL::asset('uploads/courses/'.$course->image)}}" alt="course" class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </div>
                                </td>
                                <td>
                                    <a class="card-title js-lists-values-course" href="#">{{ $course->title }}</a>
                                </td>
                                <td>
                                    <span class="js-lists-values-amount">{{ $course->lessons_count }}</span>
                                </td>
                                <td>
                                    <span class="js-lists-values-amount">{{ $course->price }}</span> /=
                                </td>
                                <td>
                                    <small class="text-muted text-uppercase js-lists-values-date">{{ $course->created_at->format('F j, Y') }}</small>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection