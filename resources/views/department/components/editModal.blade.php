<div class="modal fade" id="department-edit-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('departments.update') }}" class="needs-validation" id="form-department-edit" novalidate>
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-department-id">
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title">Edit Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4 pt-0">
                    <div class="row">
                        <!-- Dropdown Entity -->
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-id" class="form-label">Select Entity</label>
                            <select name="entity_id" id="edit-entity-id" class="form-control" required>
                                <option value="">-- Select Entity --</option>
                                @foreach ($entities as $entity)
                                    <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a valid entity</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="edit-department-code" class="form-label">Department Code</label>
                            <input type="text" class="form-control" id="edit-department-code" name="code"
                                required>
                            <div class="invalid-feedback">Please enter a valid department code</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-department-name" class="form-label">Department Name</label>
                            <input type="text" class="form-control" id="edit-department-name" name="name"
                                required>
                            <div class="invalid-feedback">Please enter a valid department name</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-department-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit-department-email" name="email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-department-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="edit-department-phone" name="phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-department-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" id="edit-department-fax" name="fax">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-department-status" class="form-label">Status</label>
                            <select name="status" id="edit-department-status" class="form-control">
                                <option value="inactive">Inactive</option>
                                <option value="active">Active</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-department-address" class="form-label">Address</label>
                            <textarea class="form-control" id="edit-department-address" name="address" rows="2"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-department-description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit-department-description" name="description" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Department</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
