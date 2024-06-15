<!DOCTYPE html>
@extends('layouts.admin')

@section('content')
        <div class="page-section border-bottom-2">
          <div class="container page__container">
            <div class="page-separator">
              <div class="page-separator__text">Students</div>
            </div>


            <div class="row card-group-row">
              @foreach ($students as $student)
                  <div class="col-md-6 col-lg-4 col-xl-4 card-group-row__col">
                      <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card">
                          <a href="#" class="card-img-top js-image" data-position="" data-height="140">
                              <img src="{{URL::asset('uploads/'.$student->image)}}" alt="course"/>
                          </a>
      
                          <div class="card-body flex">
                              <div class="d-flex">
                                  <div class="flex">
                                      <a href="#" class="card-title" href="#">{{ $student->name }}</a>
                                      <small class="text-50 font-weight-bold mb-4pt">{{ $student->email }}</small>
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

