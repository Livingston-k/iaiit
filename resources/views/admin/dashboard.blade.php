@extends('layouts.admin')

@section('content')
<div class="page-section border-bottom-2">
    <div class="container page__container">

        <div class="row">
            <div class="col-lg-4">
                <div class="card border-1 border-left-3 border-left-accent text-center mb-lg-0">
                    <div class="card-body">
                        <h4 class="h2 mb-0">89,000/=</h4>
                        <div>Purchases this month</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center mb-lg-0">
                    <div class="card-body">
                        <h4 class="h2 mb-0">3,917/=</h4>
                        <div>Account Balance</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center mb-lg-0">
                    <div class="card-body">
                        <h4 class="h2 mb-0">1</h4>
                        <div>Total Courses</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container page__container page-section">

    <div class="page-separator">
        <div class="page-separator__text">Earnings</div>
    </div>
    <div class="card card-body mb-32pt">
        <div id="legend"
             class="chart-legend mt-0 mb-24pt justify-content-start"></div>
        <div class="chart"
             style="height: 320px;">
            <canvas id="earningsChart"
                    class="chart-canvas js-update-chart-bar"
                    data-chart-legend="#legend"
                    data-chart-line-background-color="gradient:primary,gray"
                    data-chart-prefix="$"
                    data-chart-suffix="k"
                    data-chart-dark-mode="true"></canvas>
        </div>
    </div>

    <div class="row mb-8pt">
        <div class="col-lg-12">

            <div class="page-separator">
                <div class="page-separator__text">Transactions</div>
            </div>
            <div class="card">
                <table class="table table-flush table-nowrap">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Invoice</th>
                            <th>Course</th>
                            <th>Amount</th>
                            <th>Date</a></th>
                        </tr>
                    </thead>
                    <tbody class="">

                        <tr>
                            <td>
                                <div class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                    <img SRC="{{ asset('images/paths/angular_routing_200x168.png')}}" alt="course" class="avatar-img rounded">
                                    <span class="overlay__content"></span>
                                </div>
                            </td>
                            <td>
                                <a href="#" style="color: inherit;" class="js-lists-values-document">#8734</a>
                            </td>
                            <td>
                                <a class="card-title js-lists-values-course" href="#">Angular Routing In-Depth</a>
                            </td>
                            <td>
                                <span class="js-lists-values-amount">89,000</span> /=
                            </td>
                            <td>
                                <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection