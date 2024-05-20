@extends('layouts.instructor')

@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Course</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('instructor') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('instructor.courses.index') }}">Courses</a></li>
                    <li class="breadcrumb-item active">Course</li>

                </ol>

            </div>
        </div>

        {{-- <div class="row" role="tablist">
            <div class="col-auto">
                <button id="addLesson" class="btn btn-outline-secondary">Add Lesson</button>
            </div>
        </div> --}}

    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

<div class="page-section border-bottom-2 mt-16pt">
    <div class="container page__container">
        <form  method="POST" action="{{ route('instructor.store_lesson') }}" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <input type="hidden" name="course_id" class="form-control form-control" value="{{ $course->id }}">
                <div class="col-md-12">
                    <label class="form-label">Course title</label>
                    <div class="form-group mb-24pt">
                        <input type="text" name="title" class="form-control form-control" placeholder="Course title">
                    </div>
                </div>
                <div class="col-md-6">

                    <label class="form-label">What To learn</label>
                    <div class="form-group mb-24pt">
                        <input type="text" name="what_to_learn" class="form-control form-control" placeholder="Course caption">
                    </div>
                </div>


                <div class="col-md-6">
                    <label class="form-label">Video</label>
                    <div class="media align-items-center mb-24pt">
                        <div class="media-body">
                            <div class="custom-file">
                                <input type="file" name="video" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-outline-secondary mb-24pt mb-sm-0">Add Lesson</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script type='text/javascript'>
    function preview_image(event)
    {
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('output_image');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }

</script>
@endsection