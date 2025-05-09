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
                                    <table id="datatable-buttons" class="table table-striped dt-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Fax</th>
                                                <th>Address</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @forelse($entities as $i => $entity)
                                                <tr class="clickable-row" style="cursor: pointer" data-bs-toggle="modal"
                                                    data-bs-target="#entity-edit-modal"
                                                    onclick="onEntityRowClick({ 
                                                id: '{{ $entity->id }}', 
                                                code: '{{ $entity->code }}', 
                                                name: '{{ $entity->name }}', 
                                                email: '{{ $entity->email }}', 
                                                phone: '{{ $entity->phone }}', 
                                                fax: '{{ $entity->fax }}', 
                                                address: '{{ $entity->address }}', 
                                                description: `{{ $entity->description }}`, 
                                                status: '{{ $entity->status }}' 
                                            })">

                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $entity->code }}</td>
                                                    <td>{{ $entity->name }}</td>
                                                    <td>{{ $entity->email ?? '-' }}</td>
                                                    <td>{{ $entity->phone ?? '-' }}</td>
                                                    <td>{{ $entity->fax ?? '-' }}</td>
                                                    <td>{{ $entity->address ?? '-' }}</td>
                                                    <td>{{ $entity->description ?? '-' }}</td>
                                                    <td>{{ $entity->status }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">Belum ada data entity</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div> <!-- end preview-->

                        {{-- <div class="tab-pane create" id="buttons-table-create">

                        </div> --}}
                        <!-- end preview code-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
    </div>

    <!-- Modals -->
    @include('entity.components.addModal')
    @include('entity.components.importModal')
    @include('entity.components.editModal')


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
        function onEntityRowClick(entity) {
            $('#edit-entity-id').val(entity.id);
            $('#edit-code').val(entity.code);
            $('#edit-name').val(entity.name);
            $('#edit-email').val(entity.email);
            $('#edit-phone').val(entity.phone);
            $('#edit-fax').val(entity.fax);
            $('#edit-address').val(entity.address);
            $('#edit-description').val(entity.description);

            // Set status
            $('#edit-status option').prop('selected', false);
            $('#edit-status option[value="' + entity.status + '"]').prop('selected', true);
        }
    </script>
@endsection
