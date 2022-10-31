@extends('layouts.web')
@section('title', $title)

@section('content')

<!-- Slider Section -->
<div class="container">
  <div class="main-body-section px-5 mt-4">
    <div class="page-title pb-2">
      <h3 class="text-center">Search Results</h3>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="post-section">
          @foreach($posts as $post)
          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  @if($post->image)
                  <a href="{{ route('post', $post->id) }}"><img src="{{ asset('image/'.$post->image) }}" alt="" height="250px" width="250px"></a>
                  @else
                  <a href="{{ route('post', $post->id) }}"><img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px"></a>
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
                    Post by: {{ $post->user->name }} <br>
                    Category: {{ $post->category }} <br>
                    Post Date: {{ $post->created_at->toFormattedDateString() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{ $posts->withQueryString()->links('pagination::bootstrap-4') }}

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
                @foreach($popularPost as $post)
                <li class="list-group-item"><a href="{{ route('post', $post->id) }}" class="text-decoration-none text-dark">{{ Str::limit($post->title, 25) }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="popular-restaurant bg-light shadow mb-4" style="min-height: 360px;">
            <div class="title h5 text-center pt-3 pb-1">
              Popular Restaurant
            </div>
            <div class="list px-3">
              <ul class="list-group">
                @foreach($popularRestaurant as $post)
                <li class="list-group-item"><a href="{{ route('post', $post->id) }}" class="text-decoration-none text-dark">{{ Str::limit($post->title, 25) }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="popular-restaurant bg-light shadow mb-4" style="min-height: 360px;">
            <div class="title h5 text-center pt-3 pb-1">
              Hospital
            </div>
            <div class="list px-3">
              <ul class="list-group">
                @foreach($hospital as $post)
                <li class="list-group-item"><a href="{{ route('post', $post->id) }}" class="text-decoration-none text-dark">{{ Str::limit($post->title, 25) }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

          <div class="popular-restaurant bg-light shadow mb-4" style="min-height: 193px;">
            <div class="title h5 text-center pt-3 pb-1">
              Emergency
            </div>
            <div class="list px-3">
              <ul class="list-group">
                @foreach($emergency as $post)
                <li class="list-group-item"><a href="{{ route('post', $post->id) }}" class="text-decoration-none text-dark">{{ Str::limit($post->title, 25) }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection