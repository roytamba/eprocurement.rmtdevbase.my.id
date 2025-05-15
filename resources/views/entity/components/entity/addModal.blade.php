<div class="modal fade" id="entity-add-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="{{ route('entity.store') }}" class="needs-validation" id="form-entity" novalidate>
                @csrf
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title">Add New Entity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4 pt-0">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="entity-code" class="form-label">Entity Code</label>
                            <input type="text" class="form-control" id="entity-code" name="code"
                                placeholder="Enter Code" required>
                            <div class="invalid-feedback">Please enter a valid entity code</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="entity-name" class="form-label">Entity Name</label>
                            <input type="text" class="form-control" id="entity-name" name="name"
                                placeholder="Enter Name" required>
                            <div class="invalid-feedback">Please enter a valid entity name</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="entity-business-type" class="form-label">Business Type</label>
                            <select name="business_type_id" id="entity-business-type" class="form-control" required>
                                <option value="" disabled selected>Select Business Type</option>
                                @foreach ($businessTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a business type</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="entity-industry-type" class="form-label">Industry Type</label>
                            <select name="industry_type_id" id="entity-industry-type" class="form-control" required>
                                <option value="" disabled selected>Select Industry Type</option>
                                @foreach ($industryTypes as $industry)
                                    <option value="{{ $industry->id }}">{{ $industry->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select an industry type</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="entity-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="entity-email" name="email"
                                placeholder="Enter Email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="entity-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="entity-phone" name="phone"
                                placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="entity-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" id="entity-fax" name="fax"
                                placeholder="Enter Fax Number">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="entity-website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="entity-website" name="website"
                                placeholder="Enter Website">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-status" class="form-label">Status</label>
                            <select name="status" id="edit-status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="entity-tax" class="form-label">Tax</label>
                            <input type="text" class="form-control" name="tax_id" id="entity-tax">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="entity-address" class="form-label">Address</label>
                            <textarea class="form-control" id="entity-address" name="address" rows="2" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="entity-description" class="form-label">Description</label>
                            <textarea class="form-control" id="entity-description" name="description" rows="2"
                                placeholder="Enter description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Entity</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
