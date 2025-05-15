<!-- Modal Tambah Business Type -->
<div class="modal fade" id="business-type-add-modal" tabindex="-1" aria-labelledby="addBusinessTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('business-types.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Business Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="add-code" class="form-label">Code</label>
                        <input type="text" class="form-control" name="code" id="add-code" required>
                    </div>
                    <div class="mb-3">
                        <label for="add-name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="add-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="add-description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="add-description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="add-status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="add-status" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
