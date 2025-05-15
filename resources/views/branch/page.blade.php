@extends('layouts.dashboard')
@section('custom-styles')
    <link href="{{ asset('admin/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="header-title">Branch</h4>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">

                            <a href="#buttons-table-preview" data-bs-toggle="tab" aria-expanded="false"
                                class="nav-link active">
                                Brances
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#buttons-table-create" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Branch Types
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="buttons-table-preview">
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <div class="btn-group gap-1 float-end">
                                        <button type="button" class="btn btn-primary btn-sm" title="Import"
                                            data-bs-toggle="tooltip"
                                            onclick="new bootstrap.Modal(document.getElementById('branch-import-modal')).show();">
                                            <i class="uil uil-folder-upload"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" title="Add"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            onclick="new bootstrap.Modal(document.getElementById('branch-add-modal')).show();">
                                            <i class="uil uil-folder-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Branch Type</th>
                                                <th>Entity</th>
                                                <th>Address</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @forelse($branches as $i => $branch)
                                                <tr class="clickable-row" style="cursor: pointer" data-bs-toggle="modal"
                                                    data-bs-target="#branch-edit-modal"
                                                    onclick="onbranchRowClick({ 
                                                        id: '{{ $branch->id }}', 
                                                        code: '{{ $branch->code }}', 
                                                        name: '{{ $branch->name }}', 
                                                        entity_id: '{{ $branch->entity_id }}', 
                                                        branch_type_id: '{{ $branch->branch_type_id }}', 
                                                        email: '{{ $branch->email }}', 
                                                        phone: '{{ $branch->phone }}', 
                                                        fax: '{{ $branch->fax }}', 
                                                        postal_code: '{{ $branch->postal_code }}', 
                                                        address: '{{ $branch->address }}', 
                                                        description: `{{ $branch->description }}`, 
                                                        status: '{{ $branch->status }}' 
                                                    })">

                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $branch->code }}</td>
                                                    <td>{{ $branch->name }}</td>
                                                    <td>{{ $branch->entity_id }}</td>
                                                    <td>{{ $branch->branch_type_id }}</td>
                                                    <td>{{ $branch->address ?? '-' }}</td>
                                                    <td>{{ $branch->description ?? '-' }}</td>
                                                    <td>{{ $branch->status }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">No Records</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane create" id="buttons-table-create">
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <div class="btn-group gap-1 float-end">
                                        <button type="button" class="btn btn-primary btn-sm" title="Import"
                                            data-bs-toggle="tooltip"
                                            onclick="new bootstrap.Modal(document.getElementById('branch-type-import-modal')).show();">
                                            <i class="uil uil-folder-upload"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" title="Add"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            onclick="new bootstrap.Modal(document.getElementById('branch-type-add-modal')).show();">
                                            <i class="uil uil-folder-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <table id="datatable-buttons" class="table table-striped dt-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @forelse($branchTypes as $i => $bt)
                                                <tr class="clickable-row" style="cursor: pointer" data-bs-toggle="modal"
                                                    data-bs-target="#branch-type-edit-modal"
                                                    onclick="onbranchTypeRowClick({ 
                                                        id: '{{ $bt->id }}', 
                                                        code: '{{ $bt->code }}', 
                                                        name: '{{ $bt->name }}', 
                                                        description: `{{ $bt->description }}`, 
                                                        status: '{{ $bt->status }}' 
                                                    })">

                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $bt->code }}</td>
                                                    <td>{{ $bt->name }}</td>
                                                    <td>{{ $bt->description ?? '-' }}</td>
                                                    <td>{{ $bt->status }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">No Records</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
    </div>

    <!-- Modals Branch-->
    @include('branch.components.branch.addModal')
    @include('branch.components.branch.importModal')
    @include('branch.components.branch.editModal')

    <!-- Modals Branch-->
    @include('branch.components.branchType.addModal')
    @include('branch.components.branchType.editModal')
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: '{{ session('success') }}',
                timer: 2000,
                showConfirmButton: false
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}'
            });
        @endif
    </script>
    <script>
        function onbranchRowClick(branch) {
            $('#edit-branch-id').val(branch.id);

            // Set entity
            $('#edit-branch-entity-id option').prop('selected', false);
            $('#edit-branch-entity-id option[value="' + branch.entity_id + '"]').prop('selected', true);

            // Set branch type
            $('#edit-branch-type-id option').prop('selected', false);
            $('#edit-branch-type-id option[value="' + branch.branch_type_id + '"]').prop('selected', true);

            $('#edit-branch-code').val(branch.code);
            $('#edit-branch-name').val(branch.name);
            $('#edit-branch-email').val(branch.email);
            $('#edit-branch-phone').val(branch.phone);
            $('#edit-branch-fax').val(branch.fax);
            $('#edit-branch-postal-code').val(branch.postal_code);
            $('#edit-branch-address').val(branch.address);
            $('#edit-branch-description').val(branch.description);

            // Set status
            $('#edit-branch-status option').prop('selected', false);
            $('#edit-branch-status option[value="' + branch.status + '"]').prop('selected', true);
        }

        function onbranchTypeRowClick(branchType) {
            $('#edit-branch-type-id').val(branchType.id);
            $('#edit-branch-type-code').val(branchType.code);
            $('#edit-branch-type-name').val(branchType.name);
            $('#edit-branch-type-description').val(branchType.description);

            // Set status
            $('#edit-branch-type-status option').prop('selected', false);
            $('#edit-branch-type-status option[value="' + branchType.status + '"]').prop('selected', true);
        }
    </script>
@endsection
