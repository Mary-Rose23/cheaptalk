<div>
    @if (session()->has('message'))
        <div class="alert alert-success col-md-3 mx-auto mt-3 text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container-fluid py-4">
        <div class="row justify-content-center align-items-center mb-4">
          <div class="col-md-4 mb-3 mb-md-0">
            <h2 class="text-center text-light mb-0">Filter by Category:</h2>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="input-group">
              <input type="text" class="form-control border-0 rounded-start postcardbgclr" placeholder="Search" wire:model="postSearch">
              <button class="btn btn-primary rounded-end" type="button">Search</button>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-floating">
              <select class="form-select postcardbgclr" wire:model="postCategory">
                <option value="" disabled>Select a Category</option>
                <option value="all">All</option>
                @foreach ($categories as $category )
                  <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
              </select>
              <label for="caliber" class="form-label text-dark">Select a Category</label>
            </div>
          </div>
        </div>
      </div>



    <div class="container mt-4">
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
              <div class="card shadow-lg rounded border-0">
                <div class="card-header p-4" style="background-color: #4d4d4d;">
                  <h3 class="text-uppercase text-center mb-0 text-white" style="font-family: 'Montserrat', sans-serif; letter-spacing: 2px;">{{ $post->author }}</h3>
                  <div class="d-flex justify-content-center mt-2">
                    <div class="text-white">{{ $post->category->category }}</div>
                  </div>
                </div>
                <div class="card-body bg-white">
                  <h5 class="text-primary mb-3" style="font-family: 'Poppins', sans-serif;">{{ $post->title }}</h5>
                  <p class="card-text mb-4" style="font-family: 'Open Sans', sans-serif;">{{ $post->content }}</p>
                  <div class="d-flex justify-content-between align-items-center">

                    <div class="text-muted">{{ $post->created_at->diffForHumans() }}</div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

    <div class="offset-md-8 mt-3">
        {{ $posts }}
    </div>
</div>
