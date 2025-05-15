<div class="modal fade" id="branch-add-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('branch.store') }}" class="needs-validation" id="form-branch" novalidate>
                @csrf
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title">Add New Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4 pt-0">
                    <div class="row">
                        <!-- Select Entity -->
                        <div class="col-md-6 mb-3">
                            <label for="entity-id" class="form-label">Select Entity</label>
                            <select name="entity_id" id="entity-id" class="form-control" required>
                                <option value="">-- Select Entity --</option>
                                @foreach ($entities as $entity)
                                    <option value="{{ $entity->id }}">{{ $entity->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a valid entity</div>
                        </div>

                        <!-- Select Branch Type -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-type-id" class="form-label">Select Branch Type</label>
                            <select name="branch_type_id" id="branch-type-id" class="form-control" required>
                                <option value="">-- Select Branch Type --</option>
                                @foreach ($branchTypes as $bt)
                                    <option value="{{ $bt->id }}">{{ $bt->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a valid Branch Type</div>
                        </div>

                        <!-- Branch Code -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-code" class="form-label">Branch Code</label>
                            <input type="text" class="form-control" id="branch-code" name="code" placeholder="Enter Code" required>
                            <div class="invalid-feedback">Please enter a valid Branch code</div>
                        </div>

                        <!-- Branch Name -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-name" class="form-label">Branch Name</label>
                            <input type="text" class="form-control" id="branch-name" name="name" placeholder="Enter Name" required>
                            <div class="invalid-feedback">Please enter a valid Branch name</div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="branch-email" name="email" placeholder="Enter Email">
                            <div class="invalid-feedback">Please enter a valid Email</div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="branch-phone" name="phone" placeholder="Enter Phone">
                            <div class="invalid-feedback">Please enter a valid Phone number</div>
                        </div>

                        <!-- Fax -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" id="branch-fax" name="fax" placeholder="Enter Fax">
                            <div class="invalid-feedback">Please enter a valid Fax</div>
                        </div>

                        <!-- Postal Code -->
                        <div class="col-md-6 mb-3">
                            <label for="postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" name="postal_code" placeholder="Enter Postal Code">
                            <div class="invalid-feedback">Please enter a valid Postal Code</div>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label for="branch-status" class="form-label">Status</label>
                            <select name="status" id="branch-status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Address -->
                        <div class="col-md-12 mb-3">
                            <label for="branch-address" class="form-label">Address</label>
                            <textarea class="form-control" id="branch-address" name="address" rows="2" placeholder="Enter Address"></textarea>
                        </div>

                        <!-- Description -->
                        <div class="col-md-12 mb-3">
                            <label for="branch-description" class="form-label">Description</label>
                            <textarea class="form-control" id="branch-description" name="description" rows="2" placeholder="Enter description"></textarea>
                        </div>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Branch</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
