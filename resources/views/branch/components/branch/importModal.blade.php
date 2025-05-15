<div class="modal fade" id="entity-import-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="import-entity-form" enctype="multipart/form-data">
                <div class="modal-header py-3 px-4 border-bottom-0">
                    <h5 class="modal-title">Import Entity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4 pb-4 pt-0">
                    <div class="mb-3">
                        <label for="import-file" class="form-label">Choose File (.xlsx / .csv)</label>
                        <input class="form-control" type="file" id="import-file" name="file" accept=".xlsx,.csv"
                            required>
                        <div class="invalid-feedback">Please upload a valid Excel or CSV file.</div>
                    </div>
                    <div class="alert alert-info py-2 small" role="alert">
                        Please make sure the file format matches the import template.
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Import</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
