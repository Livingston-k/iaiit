<!DOCTYPE html>
@extends('layouts.auth')

@section('content')
        <div
          class="mdk-box mdk-box--bg-primary bg-dark js-mdk-box mb-0"
          data-effects="parallax-background blend-background"
        >
          <div class="mdk-box__bg">
            <div
              class="mdk-box__bg-front"
              style="
                background-image: url({{ asset('images/photodune-4161018-group-of-students-m.jpg') }});
              "
            ></div>
          </div>
          <div class="mdk-box__content justify-content-center">
            <div class="hero container page__container text-center py-112pt">
              <h1 class="text-white text-shadow">Learn to Code</h1>
              <p
                class="lead measure-hero-lead mx-auto text-white text-shadow mb-48pt"
              >
                Business, Technology and Creative Skills taught by industry
                experts. Explore a wide range of skills with our professional
                tutorials.
              </p>

              <a
                href="{{ route('courses') }}"
                class="btn btn-lg btn-white btn--raised mb-16pt"
                >Browse Courses</a
              >

              <p class="mb-0">
                <a href="#" class="text-white text-shadow"
                  ><strong>Are you a teacher?</strong></a
                >
              </p>
            </div>
          </div>
        </div>

        <div class="border-bottom-2 py-16pt navbar-dark border-bottom-2">
          <div class="container page__container">
            <div class="row align-items-center">
              <div
                class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0"
              >
                <div
                  class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt"
                >
                  <i class="material-icons text-white">subscriptions</i>
                </div>
                <div class="flex">
                  <div class="card-title mb-4pt">{{ count($courses)}} Courses</div>
                  <p class="card-subtitle text-70">
                    Explore a wide range of skills.
                  </p>
                </div>
              </div>
              <div
                class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0"
              >
                <div
                  class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt"
                >
                  <i class="material-icons text-white">verified_user</i>
                </div>
                <div class="flex">
                  <div class="card-title mb-4pt">By Industry Experts</div>
                  <p class="card-subtitle text-70">
                    Professional development from the best people.
                  </p>
                </div>
              </div>
              <div class="d-flex col-md align-items-center">
                <div
                  class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt"
                >
                  <i class="material-icons text-white">update</i>
                </div>
                <div class="flex">
                  <div class="card-title mb-4pt">Unlimited Access</div>
                  <p class="card-subtitle text-70">
                    Unlock Library and learn any topic with one subscription.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

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
                              <img src="{{URL::asset('uploads/courses/'.$course->image)}}" alt="course"/>
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
        @include('includes.footer')
        @endsection

