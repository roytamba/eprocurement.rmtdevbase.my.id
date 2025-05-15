<div class="modal fade" id="branch-edit-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('branch.update') }}" method="POST" id="form-edit-branch">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="edit-branch-id">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-entity-id" class="form-label">Entity Name</label>
                            <select name="entity_id" id="edit-branch-entity-id" class="form-control" required>
                                <option value="" disabled selected>Select Entity</option>
                                @foreach ($entities as $entity)
                                    <option value="{{ $entity->id }}">
                                        {{ $entity->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-type-id" class="form-label">Select Branch Type</label>
                            <select name="branch_type_id" id="edit-branch-type-id" class="form-control" required>
                                <option value="">-- Select Branch Type --</option>
                                @foreach ($branchTypes as $bt)
                                    <option value="{{ $bt->id }}">{{ $bt->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please select a valid Branch Type</div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-code" class="form-label">Branch Code</label>
                            <input type="text" class="form-control" name="code" id="edit-branch-code" required
                                readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-name" class="form-label">Branch Name</label>
                            <input type="text" class="form-control" name="name" id="edit-branch-name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="edit-branch-email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="edit-branch-phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" name="fax" id="edit-branch-fax">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" name="postal_code" id="edit-branch-postal-code">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-branch-status" class="form-label">Status</label>
                            <select name="status" id="edit-branch-status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-branch-address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="edit-branch-address"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-branch-description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="edit-branch-description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update Entity</button>
                </div>
            </form>
        </div>
    </div>
</div>
