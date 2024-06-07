<!DOCTYPE html>
@extends('layouts.auth')

@section('content')
        <div class="page-section border-bottom-2">
          <div class="container page__container">
            <div class="page-separator">
              <div class="page-separator__text">Courses</div>
            </div>


            <div class="row card-group-row">
              @foreach ($courses as $course)
                  <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">
                      <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card">
                          <a href="{{ route('student.courses.show', $course->id) }}" class="card-img-top js-image" data-position="" data-height="140">
                              <img src="{{URL::asset('uploads/'.$course->image)}}" alt="course"/>
                          </a>
      
                          <div class="card-body flex">
                              <div class="d-flex">
                                  <div class="flex">
                                      <a href="{{ route('student.courses.show', $course->id) }}" class="card-title" href="#">{{ $course->title }}</a>
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
          </div>
        </div>


        <div class="page-section">
          <div class="container page__container">
            <div class="page-headline text-center">
              <h2>Feedback</h2>
              <p class="lead measure-lead mx-auto text-70">
                What other students turned professionals have to say about us
                after learning with us and reaching their goals.
              </p>
            </div>

            <div class="position-relative carousel-card p-0 mx-auto">
              <div class="row d-block js-mdk-carousel" id="carousel-feedback">
                <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-feedback" role="button" data-slide="next">
                  <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                  <span class="sr-only">Next</span>
                </a>
                <div class="mdk-carousel__content">
                  <div class="col-12 col-md-6">
                    <div class="card card-feedback card-body">
                      <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">
                          A wonderful course on how to start. Eddie beautifully
                          conveys all essentials of a becoming a good Angular
                          developer. Very glad to have taken this course. Thank
                          you Eddie Bryan.
                        </p>
                      </blockquote>
                    </div>
                    <div class="media ml-12pt">
                      <div class="media-left mr-12pt">
                        <a href="student-profile.html" class="avatar avatar-sm">
                          <span class="avatar-title rounded-circle">UK</span>
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <a href="student-profile.html" class="card-title">Umberto Kass</a>
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
                        <p class="text-70 small mb-0">
                          A wonderful course on how to start. Eddie beautifully
                          conveys all essentials of a becoming a good Angular
                          developer. Very glad to have taken this course. Thank
                          you Eddie Bryan.
                        </p>
                      </blockquote>
                    </div>
                    <div class="media ml-12pt">
                      <div class="media-left mr-12pt">
                        <a href="student-profile.html" class="avatar avatar-sm">
                          <span class="avatar-title rounded-circle">UK</span>
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <a href="student-profile.html" class="card-title">Umberto Kass</a>
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
                        <p class="text-70 small mb-0">
                          A wonderful course on how to start. Eddie beautifully
                          conveys all essentials of a becoming a good Angular
                          developer. Very glad to have taken this course. Thank
                          you Eddie Bryan.
                        </p>
                      </blockquote>
                    </div>
                    <div class="media ml-12pt">
                      <div class="media-left mr-12pt">
                        <a href="student-profile.html" class="avatar avatar-sm">
                          <span class="avatar-title rounded-circle">UK</span>
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <a href="student-profile.html" class="card-title">Umberto Kass</a>
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

        @include('includes.footer')
        @endsection

