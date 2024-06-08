<!DOCTYPE html>
@extends('layouts.auth')

@section('content')
        <div class="page-section border-bottom-2">
          <div class="container page__container">
            <div class="page-separator">
              <div class="page-separator__text">Instructors</div>
            </div>


            <div class="row card-group-row">
              @foreach ($instructors as $instructor)
                  <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">
                      <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card">
                          <a href="#" class="card-img-top js-image" data-position="" data-height="140">
                              <img src="{{URL::asset('uploads/'.$instructor->image)}}" alt="course"/>
                          </a>
      
                          <div class="card-body flex">
                              <div class="d-flex">
                                  <div class="flex">
                                      <a href="#" class="card-title" href="#">{{ $instructor->name }}</a>
                                      <small class="text-50 font-weight-bold mb-4pt">{{ $instructor->email }}</small>
                                  </div>
                                  {{-- <a href="#" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a> --}}
                              </div>
                          </div>
      
                          {{-- <div class="card-footer">
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
                          </div> --}}
                      </div>
                  </div>
              @endforeach
          </div>
          </div>
        </div>
        @include('includes.footer')
        @endsection

