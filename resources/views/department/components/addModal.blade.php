<div class="modal fade" id="department-add-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="" class="needs-validation" id="form-department" novalidate>
                @csrf
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title">Add New Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4 pt-0">
                    <div class="row">
                        <!-- Tambahan dropdown untuk Entity -->
                        <div class="col-md-6 mb-3">
                            <label for="entity-id" class="form-label">Select Entity</label>
                            <select name="entity_id" id="entity-id" class="form-control" required>
                                <option value="">-- Select Entity --</option>
                                <!-- Loop data entity -->
                                @foreach ($entities as $entity)
                                    <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a valid entity</div>
                        </div>

                        <!-- Field existing tetap -->
                        <div class="col-md-6 mb-3">
                            <label for="department-code" class="form-label">Department Code</label>
                            <input type="text" class="form-control" id="department-code" name="code"
                                placeholder="Enter Code" required>
                            <div class="invalid-feedback">Please enter a valid department code</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="department-name" class="form-label">Department Name</label>
                            <input type="text" class="form-control" id="department-name" name="name"
                                placeholder="Enter Name" required>
                            <div class="invalid-feedback">Please enter a valid department name</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="department-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="department-email" name="email"
                                placeholder="Enter Email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="department-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="department-phone" name="phone"
                                placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="department-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" id="department-fax" name="fax"
                                placeholder="Enter Fax Number">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="department-status" class="form-label">Status</label>
                            <select name="status" id="department-status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="department-address" class="form-label">Address</label>
                            <textarea class="form-control" id="department-address" name="address" rows="2" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="department-description" class="form-label">Description</label>
                            <textarea class="form-control" id="department-description" name="description" rows="2"
                                placeholder="Enter description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Department</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
