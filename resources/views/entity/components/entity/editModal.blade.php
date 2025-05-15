<div class="modal fade" id="entity-edit-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('entity.update') }}" method="POST" id="form-edit-entity">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-entity-id">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Entity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-code" class="form-label">Entity Code</label>
                            <input type="text" class="form-control" name="code" id="edit-entity-code" required
                                readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-name" class="form-label">Entity Name</label>
                            <input type="text" class="form-control" name="name" id="edit-entity-name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="edit-entity-email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="edit-entity-phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" name="fax" id="edit-entity-fax">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="edit-entity-website" name="website"
                                placeholder="Enter Website">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-business-status" class="form-label">Status</label>
                            <select name="status" id="edit-entity-business-status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-tax" class="form-label">Tax</label>
                            <input type="text" class="form-control" name="tax_id" id="edit-entity-tax">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-business-type-id" class="form-label">Business Type</label>
                            <select name="business_type_id" id="edit-entity-business-type-id" class="form-control"
                                required>
                                <option value="" disabled selected>Select Business Type</option>
                                @foreach ($businessTypes as $bt)
                                    <option value="{{ $bt->id }}">
                                        {{ $bt->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="edit-entity-industry-type-id" class="form-label">Industry</label>
                            <select name="industry_type_id" id="edit-entity-industry-type-id" class="form-control"
                                required>
                                <option value="" disabled selected>Select Industry Type</option>
                                @foreach ($industryTypes as $it)
                                    <option value="{{ $it->id }}">
                                        {{ $it->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="edit-entity-address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="edit-entity-address"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-entity-description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="edit-entity-description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
