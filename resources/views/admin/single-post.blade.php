<x-app-layout>
<div class="container">
    <div class="main-body-section px-5">
      <div class="row">
        <div class="single-post-section py-3">
          <div class="alert-section">
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
          <div class="card shadow">
              <div class="card-header text-center h4">
                  {{ Str::limit($post->title, 60) }}
              </div>
              <div class="card-body" style="min-height: 400px;">
                  <div class="post-image mb-3">
                      @if($post->image)
                      <img src="{{ asset('image/'.$post->image) }}" alt="" height="400px" width="auto" class="d-block mx-auto">
                      @else
                      <img src="{{ asset('images/post-image.jpg') }}" alt="" height="400px" width="auto" class="d-block mx-auto">
                      @endif
                      <div class="image-caption text-center"><i><strong>Caption:</strong> {{ $post->caption }}</i></div>
                  </div>
                  <div class="post-body px-4" style="text-align: justify;">
                      <div class="post-title h4 mb-2">
                          {{ Str::limit($post->title, 60) }}
                      </div>
  
                      <div class="post-body-section">
                          {!! html_entity_decode($post->details) !!}
                      </div>
  
                      <div class="google-map text-center my-3" style="max-height: 600px;">
                          <div class="card">
                              <div class="card-header text-center">
                                  Google Map
                              </div>
                              <div class="card-body">
                                  <div class="location-map">
                                      {!! html_entity_decode($post->map) !!}
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="post-author mt-4">
                          <strong>Category: </strong> {{ $post->category }} <br>
                          <strong>Post by: </strong> {{ $post->user->name }} <br>
                          <strong>Post date: </strong> {{ $post->created_at->toFormattedDateString() }} 
                      </div>
  
                      <div class="comment-section mt-4">
                          <div class="title h4">
                              Comments
                          </div>
                          
                          @if(!empty($comments) && $comments->count())
                              @foreach ($comments as $comment)                        
                              <div class="comments mb-4">
                                  <div class="row">
                                      <div class="col-md-1">
                                          <img src="{{ asset('images/user.jpg') }}" alt="user" class="border rounded-circle" height="50px" width="50px">
                                      </div>
                                      <div class="col-md-4" style="margin-left: -35px;">
                                          <div class="message rounded p-1 border">
                                              <strong>{{ $comment->name }}</strong>
                                              <div class="mt-1">{{ $comment->comment }}</div>
                                              <small>Date: {{ $comment->created_at->toFormattedDateString() }}</small>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              @endforeach
                          @else
                          <div class="comments mb-4">
                              <p>*No comments in this post...</p>
                          </div>
                          @endif  
  
                          <div class="user-comments border rounded mb-2 p-4" style="height: 200px; margin-right: 400px;">
                              <form action="{{ route('store.comment') }}" method="POST">
                                  @csrf                                  
                                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                                  
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" required>
                                      <span class="input-group-text">@</span>
                                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" required>
                                  </div>
                                  
                                  <div class="input-group mb-3">
                                  <span class="input-group-text">Comment</span>
                                  <textarea class="form-control" aria-label="With textarea" name="comment" required></textarea>
                                  </div>
  
                                  <div class="input-group mb-3">
                                  <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>