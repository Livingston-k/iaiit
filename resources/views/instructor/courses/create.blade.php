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
            @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-soft-accent alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="d-flex flex-wrap align-items-start">
                                <div class="mr-8pt">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <div class="flex" style="min-width: 180px">
                                    <small class="text-white-100">
                                        {{ $error }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                </div>
                <div class="col-md-6">

                    <label class="form-label">Language</label>
                    <div class="form-group mb-24pt">
                        <input type="text" name="language" class="form-control form-control" placeholder="Language">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Price</label>
                            <div class="input-group form-inline mb-24pt">
                                <span class="input-group-prepend"><span class="input-group-text">SHS</span></span>
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Preview Image</label>
                            <div class="media align-items-center mb-24pt">
                                <div class="media-body">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group mb-32pt">
                        <label class="form-label">Description</label>
                        {{-- <div style="height: 150px; color:black" class="mb-0" data-toggle="quill" name="description" data-quill-placeholder="Course description">
                        </div> --}}

                        <textarea style="height: 150px; color:black" class="form-control" name="description"></textarea>
                    </div>

                    {{-- <div class="form-group mb-32pt">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </div> --}}

                    <button type="submit" class="btn btn-outline-secondary mb-24pt mb-sm-0">Add Course</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection