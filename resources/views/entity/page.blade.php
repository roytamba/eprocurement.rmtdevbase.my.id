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
                                Entities
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#buttons-table-business-type" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                Business Type
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#buttons-table-industry-type" data-bs-toggle="tab" aria-expanded="true"
                                class="nav-link">
                                Industry Type
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
                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-striped dt-responsive w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Business Type</th>
                                                    <th>Industry Type</th>
                                                    <th>Tax</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Fax</th>
                                                    <th>Website</th>
                                                    <th>Postal Code</th>
                                                    <th>Address</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse($entities as $i => $entity)
                                                    <tr class="clickable-entity-row" style="cursor: pointer"
                                                        data-bs-toggle="modal" data-bs-target="#entity-edit-modal"
                                                        onclick="onEntityRowClick({ 
                                                                id: '{{ $entity->id }}', 
                                                                code: '{{ e($entity->code) }}', 
                                                                name: '{{ e($entity->name) }}', 
                                                                business_type_id: '{{ e($entity->business_type_id ?? '-') }}',
                                                                industry_type_id: '{{ e($entity->industry_type_id ?? '-') }}',
                                                                tax: '{{ e($entity->tax ?? '-') }}',
                                                                email: '{{ e($entity->email ?? '-') }}', 
                                                                phone: '{{ e($entity->phone ?? '-') }}', 
                                                                fax: '{{ e($entity->fax ?? '-') }}', 
                                                                website: '{{ e($entity->website ?? '-') }}',
                                                                postal_code: '{{ e($entity->postal_code ?? '-') }}',
                                                                address: '{{ e($entity->address ?? '-') }}', 
                                                                description: `{{ e($entity->description ?? '-') }}`, 
                                                                status: '{{ e($entity->status) }}' 
                                                            })">
                                                        <td>{{ $i + 1 }}</td>
                                                        <td>{{ $entity->code }}</td>
                                                        <td>{{ $entity->name }}</td>
                                                        <td>{{ $entity->business_type_name ?? '-' }}</td>
                                                        <td>{{ $entity->industry_type_name ?? '-' }}</td>
                                                        <td>{{ $entity->tax ?? '-' }}</td>
                                                        <td>{{ $entity->email ?? '-' }}</td>
                                                        <td>{{ $entity->phone ?? '-' }}</td>
                                                        <td>{{ $entity->fax ?? '-' }}</td>
                                                        <td>{{ $entity->website ?? '-' }}</td>
                                                        <td>{{ $entity->postal_code ?? '-' }}</td>
                                                        <td>{{ $entity->address ?? '-' }}</td>
                                                        <td>{{ $entity->description ?? '-' }}</td>
                                                        <td>{{ $entity->status }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="14" class="text-center">No Records</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane business-type" id="buttons-table-business-type">
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <div class="btn-group gap-1 float-end">
                                        <button type="button" class="btn btn-primary btn-sm" title="Import"
                                            data-bs-toggle="tooltip"
                                            onclick="new bootstrap.Modal(document.getElementById('business-type-import-modal')).show();">
                                            <i class="uil uil-folder-upload"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" title="Add"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            onclick="new bootstrap.Modal(document.getElementById('business-type-add-modal')).show();">
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
                                            @forelse($businessTypes as $i => $bt)
                                                <tr class="clickable-business-type-row" style="cursor: pointer"
                                                    data-bs-toggle="modal" data-bs-target="#business-type-edit-modal"
                                                    onclick="onBusinessTypeRowClick({ 
                                                                id: '{{ $bt->id }}', 
                                                                code: '{{ e($bt->code) }}', 
                                                                name: '{{ e($bt->name) }}', 
                                                                description: `{{ e($bt->description ?? '-') }}`, 
                                                                status: '{{ e($bt->status) }}' 
                                                            })">
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $bt->code }}</td>
                                                    <td>{{ $bt->name }}</td>
                                                    <td>{{ $bt->description ?? '-' }}</td>
                                                    <td>{{ $bt->status }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="14" class="text-center">No Records</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane industry-type" id="buttons-table-industry-type">
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <div class="btn-group gap-1 float-end">
                                        <button type="button" class="btn btn-primary btn-sm" title="Import"
                                            data-bs-toggle="tooltip"
                                            onclick="new bootstrap.Modal(document.getElementById('industry-type-import-modal')).show();">
                                            <i class="uil uil-folder-upload"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" title="Add"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            onclick="new bootstrap.Modal(document.getElementById('industry-type-add-modal')).show();">
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
                                            @forelse($industryTypes as $i => $it)
                                                <tr class="clickable-industry-type-row" style="cursor: pointer"
                                                    data-bs-toggle="modal" data-bs-target="#industry-type-edit-modal"
                                                    onclick="onIndustryTypeRowClick({ 
                                                                id: '{{ $it->id }}', 
                                                                code: '{{ e($it->code) }}', 
                                                                name: '{{ e($it->name) }}', 
                                                                description: `{{ e($it->description ?? '-') }}`, 
                                                                status: '{{ e($it->status) }}' 
                                                            })">
                                                    <td>{{ $i + 1 }}</td>
                                                    <td>{{ $it->code }}</td>
                                                    <td>{{ $it->name }}</td>
                                                    <td>{{ $it->description ?? '-' }}</td>
                                                    <td>{{ $it->status }}</td>
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

    <!-- Modals Entity Tab-->
    @include('entity.components.entity.addModal')
    @include('entity.components.entity.importModal')
    @include('entity.components.entity.editModal')

    <!-- Modals Business Type Tab-->
    @include('entity.components.businessType.addModal')
    @include('entity.components.businessType.editModal')

    <!-- Modals Industry Type Tab-->
    @include('entity.components.industryType.addModal')
    @include('entity.components.industryType.editModal')


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
            $('#edit-entity-code').val(entity.code);

            // Set industry
            $('#edit-entity-business-type-id option').prop('selected', false);
            $('#edit-entity-business-type-id option[value="' + entity.business_type_id + '"]').prop('selected', true);


            // Set business
            $('#edit-entity-industry-type-id option').prop('selected', false);
            $('#edit-entity-industry-type-id option[value="' + entity.industry_type_id + '"]').prop('selected', true);

            $('#edit-entity-name').val(entity.name);
            $('#edit-entity-email').val(entity.email);
            $('#edit-entity-phone').val(entity.phone);
            $('#edit-entity-fax').val(entity.fax);
            $('#edit-entity-address').val(entity.address);
            $('#edit-entity-postal-code').val(entity.postal_code);
            $('#edit-entity-website').val(entity.website);
            $('#edit-entity-description').val(entity.description);

            // Set status
            $('#edit-entity-status option').prop('selected', false);
            $('#edit-entity-status option[value="' + entity.status + '"]').prop('selected', true);
        }

        function onBusinessTypeRowClick(business) {
            $('#edit-business-type-id').val(business.id);
            $('#edit-business-type-code').val(business.code);

            $('#edit-business-type-name').val(business.name);
            $('#edit-business-type-description').val(business.description);

            // Set status
            $('#edit-business-type-status option').prop('selected', false);
            $('#edit-business-type-status option[value="' + business.status + '"]').prop('selected', true);
        }

        function onIndustryTypeRowClick(industry) {
            $('#edit-industry-type-id').val(industry.id);
            $('#edit-industry-type-code').val(industry.code);

            $('#edit-industry-type-name').val(industry.name);
            $('#edit-industry-type-description').val(industry.description);

            // Set status
            $('#edit-industry-type-status option').prop('selected', false);
            $('#edit-industry-type-status option[value="' + industry.status + '"]').prop('selected', true);
        }
    </script>
@endsection
