@extends('layouts.instructor')

@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Add Course</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('instructor') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('instructor.courses.index') }}">Courses</a></li>
                    <li class="breadcrumb-item active">Add Course</li>

                </ol>

            </div>
        </div>

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="page-section border-bottom-2">
    <div class="container page__container">
        <form  method="POST" action="{{ route('instructor.courses.store') }}" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-md-6">
                    <label class="form-label">Course title</label>
                    <div class="form-group mb-24pt">
                        <input type="text" name="title" class="form-control form-control" placeholder="Course title">
                    </div>


                    <label class="form-label">Course caption</label>
                    <div class="form-group mb-24pt">
                        <input type="text" name="caption" class="form-control form-control" placeholder="Course caption">
                    </div>

                        <label class="form-label">Preview Image</label>
                        <div class="media align-items-center mb-24pt">
                            {{-- <a href="#" class="media-left mr-16pt">
                                <img src="{{ asset('images/people/110/guy-3.jpg') }}" alt="people" width="56" class="rounded-circle" />
                            </a> --}}
                            <div class="media-body">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">

                    <label class="form-label">Language</label>
                    <select name="language" class="form-control custom-select mb-24pt">
                        <option value="vuejs">VueJs</option>
                        <option value="vuejs">Angular</option>
                        <option value="vuejs">React</option>
                    </select>

                    <label class="form-label">Price</label>
                    <div class="input-group form-inline mb-24pt">
                        <span class="input-group-prepend"><span class="input-group-text">SHS</span></span>
                        <input type="text" name="price" class="form-control" placeholder="Price">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Video</label>
                        <div class="media align-items-center">
                            <div class="media-body">
                                <div class="custom-file">
                                    <input type="file" name="video" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="form-group mb-32pt">
                        <label class="form-label">Description</label>
                        <div style="height: 150px; color:black" class="mb-0" data-toggle="quill" name="description" data-quill-placeholder="Course description">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-secondary mb-24pt mb-sm-0">Add Course</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection