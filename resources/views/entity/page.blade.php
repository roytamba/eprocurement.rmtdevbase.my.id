@extends('layouts.dashboard')
@section('custom-styles')
    <link href="{{ asset('admin/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Entity</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">

                            <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Table
                            </a>

                        </li>
                        {{-- <li class="nav-item">
                            <a href="#buttons-table-create" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Create
                            </a>
                        </li> --}}
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="buttons-table-preview">
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <div class="btn-group gap-1 float-end">
                                        <button type="button" class="btn btn-primary btn-sm" title="Import"
                                            data-bs-toggle="tooltip"
                                            onclick="new bootstrap.Modal(document.getElementById('entity-import-modal')).show();">
                                            <i class="uil uil-folder-upload"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" title="Add"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            onclick="new bootstrap.Modal(document.getElementById('entity-add-modal')).show();">
                                            <i class="uil uil-folder-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Fax</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            {{-- <tr>
                                                
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div> <!-- end preview-->

                        {{-- <div class="tab-pane create" id="buttons-table-create">
                            
                        </div>  --}}
                        <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
    </div>

    <!-- Modals -->
    @include('entity.components.addModal')
    @include('entity.components.importModal')


    <!-- end modal-->
@endsection
@section('custom-scripts')
    <script src="{{ asset('admin/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="{{ asset('admin/js/pages/demo.datatable-init.js') }}"></script>
@endsection
