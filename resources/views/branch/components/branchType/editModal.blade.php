<!-- Modal Edit branch Type -->
<div class="modal fade" id="branch-type-edit-modal" tabindex="-1" aria-labelledby="editbranchTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('branch-types.update') }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="edit-branch-type-id">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit branch Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-code" class="form-label">Code</label>
                        <input type="text" class="form-control" name="code" id="edit-branch-type-code" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="edit-branch-type-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit-description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="edit-branch-type-description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="edit-status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="edit-branch-type-status" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
