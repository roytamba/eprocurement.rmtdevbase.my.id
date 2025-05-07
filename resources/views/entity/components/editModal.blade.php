<div class="modal fade" id="entity-edit-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="" method="POST" id="form-edit-entity">
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
                            <label for="edit-code" class="form-label">Entity Code</label>
                            <input type="text" class="form-control" name="code" id="edit-code" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-name" class="form-label">Entity Name</label>
                            <input type="text" class="form-control" name="name" id="edit-name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="edit-email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="edit-phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-fax" class="form-label">Fax</label>
                            <input type="text" class="form-control" name="fax" id="edit-fax">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="edit-status" class="form-label">Status</label>
                            <select name="status" id="edit-status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="edit-address"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="edit-description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="edit-description"></textarea>
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