@extends('layouts.web')
@section('title', $title)

@section('content')

<div class="main-body-section">
    <div class="container">
        <div class="historical-place px-5 pt-4">
           <div class="card">
                <div class="card-header h3 text-center">
                    Restaurant
                </div>                
                <div class="card-body" style="min-height: 420px;">
                    @if(!empty($posts) && $posts->count())
                        @foreach($posts as $post)
                        <div class="posts bg-light border shadow border mb-3" style="min-height: 220px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="post-image">
                                        @if($post->image)
                                        <img src="{{ asset('image/'.$post->image) }}" alt="" height="220px" width="220px">
                                        @else
                                        <img src="{{ asset('images/post-image.jpg') }}" alt="" height="220px" width="220px">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="post-details pt-4">
                                        <div class="post-title h4">
                                            <a href="{{ route('post', $post->id) }}" class="text-decoration-none text-dark">{{ Str::limit($post->title, 60) }}</a>
                                        </div>
                                        <div class="post-body">
                                            {!! html_entity_decode(Str::limit($post->details, 150)) !!}
                                        </div>
                                        <div class="post-author">
                                            Post by: {{ $post->user->name }} <br>
                                            Category: {{ $post->category }} <br>
                                            Post Date: {{ $post->created_at->toFormattedDateString() }}
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div> 
                        @endforeach
                        {{ $posts->links('pagination::bootstrap-4') }}
                    @else
                        <h5 class="text-center mt-5">There is no post in this category..!</h5>
                    @endif                     

                </div>         
            </div>
           </div>
        </div>
    </div>
</div>

@endsection
