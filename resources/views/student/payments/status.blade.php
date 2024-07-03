@extends('layouts.user')

@section('content')
<div class="pt-32pt mb-24pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Course</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('student') }}">Home</a></li>
                    <li class="breadcrumb-item active">Payment</li>

                </ol>

            </div>
        </div>
    </div>
</div>

<!-- BEFORE Page Content -->

<!-- // END BEFORE Page Content -->

<!-- Page Content -->

    <div class="navbar navbar-light border-0 navbar-expand">
        <div class="container page__container">
            <div class="media flex-nowrap">
                <div class="media-body">
                    <a href="student-course.html" class="card-title text-body mb-0">Processing Paymnent</a>
                    <p class="lh-1 d-flex align-items-center mb-0">
                        <span class="text-50 small font-weight-bold mr-8pt" id="response">Please wait...</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="sub_id" id="sub_id" class="form-control" value="{{ $subscribe_id }}">
    <input type="hidden" name="sub_id" id="sub_id" class="form-control" value="{{ $lesson_id }}">


    <script>
        function checkPaymentStatus() {
            let sub_id = document.getElementById("sub_id")
            let lesson = document.getElementById("lesson_id")

            $.ajax({
                url: 'http://127.0.0.1:8000/api/student/payment/check_status',
                type: 'POST',
                data: JSON.stringify({ 'subscribe_id': sub_id.value }),
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 1) {
                        document.getElementById("response").textContent = "Payment successfull.";

                        $.ajax({
                            url: 'http://127.0.0.1:8000/api/student/course/lesson/'+lesson,
                            type: 'GET',
                            contentType: 'application/json; charset=utf-8',
                            dataType: 'json',
                            success: function(response) {}
                        });


                    } else if (response.status === 0) {
                        document.getElementById("response").textContent = "Please enter pin";
                    } else {
                        document.getElementById("response").textContent = "Payment failed. Please try again later";
                    }
                },
                error: function() {
                    console.log("An error occurred while checking payment status.");
                }
            });
        }

        const intervalID = setInterval(checkPaymentStatus, 5000);
        setTimeout(() => clearInterval(intervalID), 60000);
    </script>
@endsection