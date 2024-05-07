@extends('layouts.admin')

@section('content')
<div class="pt-32pt">
    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                <h2 class="mb-0">Languages</h2>

                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Languages</li>
                </ol>

            </div>
        </div>

        <div class="row" role="tablist">
            <div class="col-auto">
                <a href="#" class="btn btn-outline-secondary">Add Language</a>
            </div>
        </div>

    </div>
</div>

<div class="container page__container page-section">

    <div class="row mb-32pt">
        <div class="col-lg-12 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">
                <div class="card m-0">
                    <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name" data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>
                        <div class="card-header">
                            <div class="search-form">
                                <input type="text" class="form-control search" placeholder="Search ...">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>
                        </div>

                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Added By</th>
                                    <th>Status</th>
                                    <th style="width: 5px;" class="pl-0">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="search">
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <strong class="js-lists-values-employee-name">JS</strong>
                                    </td>
                                    <td>
                                        <a href="#" class="chip chip-outline-secondary">Meddy</a>
                                    </td>
                                    <td class="text-50 js-lists-values-activity small">Active</td>
                                    <td class="text-right pl-0">
                                        <a href="#" class="text-50 text-primary"><i class="material-icons">edit</i></a>
                                        <a href="#" class="text-50 text-danger"><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection