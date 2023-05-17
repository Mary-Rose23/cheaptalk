<div>
    <div class="container my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <div class="card shadow-lg border-0">
              <div class="card-header bg-primary text-light">
                <h3 class="text-center mb-0">Categories</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover align-middle">
                    <thead>
                      <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Remarks</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($categories as $category)
                        <tr>
                          <td>{{ $category->category }}</td>
                          <td>{{ $category->remarks }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="text-end mt-4">
                  <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#newCategoryModal">New Category</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div wire:ignore.self class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategory" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-primary theadclr">
              <h1 class="modal-title fs-5 text-light" id="newCategory">Add New Category</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bgcolor">
              <form wire:submit.prevent="store()">
                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <input type="text" class="form-control" id="category" placeholder="Enter category name" wire:model="category">
                </div>
                <div class="mb-3">
                  <label for="remarks" class="form-label">Remarks</label>
                  <textarea class="form-control" id="remarks" rows="3" placeholder="Enter remarks" wire:model="remarks"></textarea>
                </div>
                <div class="modal-footer bghdcolor">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn addcatebtnclr bg-primary">Add Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 </div>

 <style>
    .table-hover tbody tr:hover {
  background-color: #f5f5f5;
}

.table td, .table th {
  border-top: 0;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5), 0 0 0 0.2rem rgba(0, 0, 0, 0.05);
}

.btn-primary.rounded-pill {
  border-radius: 50px;
  padding-left: 20px;
  padding-right: 20px;
  font-size: 0.9rem;
}

.btn-primary.rounded-pill:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}
 </style>
