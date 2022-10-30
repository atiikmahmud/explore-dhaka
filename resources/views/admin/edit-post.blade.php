<x-app-layout>
    <div class="messages-section mt-3 pb-4">
        <div class="container">            
            <div class="alert-section mx-4">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
                
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif 
            </div>

            <div class="card mx-4">             
                <div class="card-header text-center h3">
                    Edit Post
                </div>
                <div class="card-body">
                    <div class="add-post-form">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8">
                                    <form action="{{ route('update.post') }}" method="POST" enctype="multipart/form-data" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                          <input type="hidden" name="id" value="{{ $post->id }}">
                                          <label for="title" class="form-label">Title</label>
                                          <input type="text" class="form-control" name="title" value="{{ $post->title }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-select" name="category" required>
                                                <option selected>Select category</option>
                                                <option value="Historical Place" @if($post->category == 'Historical Place') selected @endif>Historical Place</option>
                                                <option value="Hotel" @if($post->category == 'Hotel') selected @endif>Hotel</option>
                                                <option value="Restaurant" @if($post->category == 'Restaurant') selected @endif>Restaurant</option>
                                                <option value="Hospital" @if($post->category == 'Hospital') selected @endif>Hospital</option>
                                                <option value="Emergency" @if($post->category == 'Emergency') selected @endif>Emergency</option>
                                              </select>
                                        </div>
                                        <div class="mb-3">                                            
                                            <label for="image" class="form-label">Current Image</label><div class="post-image">
                                                @if($post->image)
                                                <img src="{{ asset('image/'.$post->image) }}" alt="" width="auto" class="d-block mx-auto">
                                                @else
                                                <img src="{{ asset('images/post-image.jpg') }}" alt="" width="auto" class="d-block mx-auto">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Change Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="mb-3">
                                            <label for="caption" class="form-label">Image Caption</label>
                                            <input type="text" class="form-control" name="caption" value="{{ $post->caption }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="details" class="form-label">Details</label>
                                            <textarea id="body" name="details" cols="30" rows="7" class="form-control" required> {{ $post->details }} </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="map" class="form-label">Google Map Link</label>
                                            <input type="text" class="form-control" name="map" value="{{ $post->map }}" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Update</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
