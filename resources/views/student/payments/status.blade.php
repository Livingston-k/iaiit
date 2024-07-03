@extends('layouts.user')

@section('content')
<div class="pt-32pt">
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
                        <span class="text-50 small font-weight-bold mr-8pt">hhh</span>
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
                    <input type="hidden" name="sub_id" id="sub_id" class="form-control" value="{{ $subscribe_id }}">
                </div>
            </form>
        </div>
    </div>


    <script>
        function checkPaymentStatus() {
            let sub_id = document.getElementById("sub_id")
            $.ajax({
                url: 'http://127.0.0.1:8000/api/payment/check_status',
                type: 'POST',
                data: { subscribe_id: sub_id },
                success: function(response) {
                    if (response.status === 1) {
                        console.log("Payment successfull.");
                    } else if (response.status === 0) {
                        console.log("Please enter pin.");
                    } else {
                        console.log("Payment failed.");
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