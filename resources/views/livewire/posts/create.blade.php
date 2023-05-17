<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card border-0 shadow-lg rounded-lg">
          <div class="card-header bg-primary py-3 rounded-top">
            <h3 class="text-white text-center mb-0">Make a Post</h3>
          </div>
          <div class="card-body bg-light rounded-bottom">
            <form wire:submit.prevent="store()">
              <div class="mb-3">
                <label for="author" class="form-label mb-1">Author</label>
                <input type="text" class="form-control form-control-lg" id="author" placeholder="Enter your name" wire:model="author">
              </div>
              <div class="mb-3">
                <label for="title" class="form-label mb-1">Title</label>
                <input type="text" class="form-control form-control-lg" id="title" placeholder="Enter a title for your post" wire:model="title">
              </div>
              <div class="mb-3">
                <label for="category" class="form-label mb-1">Category</label>
                <select class="form-select form-control-lg" id="category" wire:model="category_id">
                  <option value="true" disabled selected>Select a Category</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="content" class="form-label mb-1">Content</label>
                <textarea class="form-control form-control-lg" id="content" rows="5" placeholder="What's on your mind?" wire:model="content"></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Post</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
