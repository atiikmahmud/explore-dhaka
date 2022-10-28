@extends('layouts.web')
@section('title', $title)

@section('content')

<div class="container">
  <div class="main-body-section px-5">
    <div class="row">
      <div class="single-post-section py-3">
        <div class="card shadow">
            <div class="card-header text-center h4">
                Lorem ipsum dolor sit amet.
            </div>
            <div class="card-body" style="min-height: 400px;">
                <div class="post-image mb-3">
                    @if($post->image)
                    <img src="{{ asset('image/'.$post->image) }}" alt="" height="400px" width="auto" class="d-block mx-auto">
                    @else
                    <img src="{{ asset('images/post-image.jpg') }}" alt="" height="400px" width="auto" class="d-block mx-auto">
                    @endif
                    <div class="image-caption text-center"><strong>Caption:</strong> Lorem ipsum dolor sit amet.</div>
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
                        
                        <div class="comments mb-4">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('images/user.jpg') }}" alt="user" class="border rounded-circle" height="50px" width="50px">
                                </div>
                                <div class="col-md-4" style="margin-left: -35px;">
                                    <div class="message rounded p-1 border">
                                        <strong>Sadia Jahan Prova</strong>
                                        <div class="mt-1">Lorem ipsum dolor sit amet.</div>
                                        <small>Date: 10 Oct 2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments mb-4">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ asset('images/user.jpg') }}" alt="user" class="border rounded-circle" height="50px" width="50px">
                                </div>
                                <div class="col-md-4" style="margin-left: -35px;">
                                    <div class="message rounded p-1 border">
                                        <strong>Sadia Jahan Prova</strong>
                                        <div class="mt-1">Lorem ipsum dolor sit amet.</div>
                                        <small>Date: 10 Oct 2022</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="user-comments border rounded mb-2 p-4" style="height: 200px; margin-right: 400px;">
                            <form action="">                                  
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                                  </div>
                                  
                                  <div class="input-group mb-3">
                                    <span class="input-group-text">Comment</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                  </div>

                                  <div class="input-group mb-3">
                                    <button class="btn btn-sm btn-primary">Submit</button>
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

@endsection