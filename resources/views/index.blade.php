@extends('layouts.web')
@section('title', $title)

@section('content')

<!-- Slider Section -->
@include('layouts.slider')

<div class="container">
  <div class="main-body-section px-5">
    <div class="row">
      <div class="col-md-9">
        <div class="post-section">
          @foreach($posts as $post)
          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  @if($post->image)
                  <img src="{{ asset('image/'.$post->image) }}" alt="" height="250px" width="250px">
                  @else
                  <img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px">
                  @endif
                </div>
              </div>
              <div class="col-md-8" style="padding-right: 30px">
                <div class="post-details pt-4">
                  <div class="post-title h4">
                    <a href="{{ route('post', $post->id) }}" class="text-decoration-none text-dark">{{ Str::limit($post->title, 60) }}</a>
                  </div>
                  <div class="post-body pt-3">
                    {!! html_entity_decode(Str::limit($post->details, 150)) !!}
                  </div>
                  <div class="post-author pt-4">
                    Post by: <strong>{{ $post->user->name }}</strong> <br>
                    Post Date: {{ $post->created_at->toFormattedDateString() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{ $posts->links('pagination::bootstrap-4') }}

        </div>
      </div>
      <div class="col-md-3">
        <div class="sidebar-section">
          
          <div class="popular-place bg-light shadow mb-4" style="min-height: 360px;">
            <div class="title h5 text-center pt-3 pb-1">
              Popular Place
            </div>
            <div class="list px-3">
              <ul class="list-group">
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
              </ul>
            </div>
          </div>

          <div class="popular-restaurent bg-light shadow mb-4" style="min-height: 360px;">
            <div class="title h5 text-center pt-3 pb-1">
              Popular Restaurent
            </div>
            <div class="list px-3">
              <ul class="list-group">
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
              </ul>
            </div>
          </div>

          <div class="popular-restaurent bg-light shadow mb-4" style="min-height: 360px;">
            <div class="title h5 text-center pt-3 pb-1">
              Hospital
            </div>
            <div class="list px-3">
              <ul class="list-group">
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
              </ul>
            </div>
          </div>

          <div class="popular-restaurent bg-light shadow mb-4" style="min-height: 193px;">
            <div class="title h5 text-center pt-3 pb-1">
              Emergency
            </div>
            <div class="list px-3">
              <ul class="list-group">
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">An item</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection