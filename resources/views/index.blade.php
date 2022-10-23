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
          
          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  <img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px">
                </div>
              </div>
              <div class="col-md-8" style="padding-right: 30px">
                <div class="post-details pt-4">
                  <div class="post-title h4">
                    <a href="{{ route('post') }}" class="text-decoration-none text-dark">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, fugit?</a>
                  </div>
                  <div class="post-body pt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam adipisci, accusantium quis ipsa ab perspiciatis.
                  </div>
                  <div class="post-author pt-4">
                    Post by: <strong>Angel Monalisa</strong> <br>
                    Post Date: 10 Oct 2022
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  <img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px">
                </div>
              </div>
              <div class="col-md-8" style="padding-right: 30px">
                <div class="post-details pt-4">
                  <div class="post-title h4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, fugit?
                  </div>
                  <div class="post-body pt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam adipisci, accusantium quis ipsa ab perspiciatis.
                  </div>
                  <div class="post-author pt-4">
                    Post by: <strong>Angel Monalisa</strong> <br>
                    Post Date: 10 Oct 2022
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  <img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px">
                </div>
              </div>
              <div class="col-md-8" style="padding-right: 30px">
                <div class="post-details pt-4">
                  <div class="post-title h4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, fugit?
                  </div>
                  <div class="post-body pt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam adipisci, accusantium quis ipsa ab perspiciatis.
                  </div>
                  <div class="post-author pt-4">
                    Post by: <strong>Angel Monalisa</strong> <br>
                    Post Date: 10 Oct 2022
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  <img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px">
                </div>
              </div>
              <div class="col-md-8" style="padding-right: 30px">
                <div class="post-details pt-4">
                  <div class="post-title h4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, fugit?
                  </div>
                  <div class="post-body pt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam adipisci, accusantium quis ipsa ab perspiciatis.
                  </div>
                  <div class="post-author pt-4">
                    Post by: <strong>Angel Monalisa</strong> <br>
                    Post Date: 10 Oct 2022
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="posts bg-light shadow mb-4" style="min-height: 250px;">
            <div class="row">
              <div class="col-md-4">
                <div class="post-image">
                  <img src="{{ asset('images/post-image.jpg') }}" alt="" height="250px" width="250px">
                </div>
              </div>
              <div class="col-md-8" style="padding-right: 30px">
                <div class="post-details pt-4">
                  <div class="post-title h4">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, fugit?
                  </div>
                  <div class="post-body pt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam adipisci, accusantium quis ipsa ab perspiciatis.
                  </div>
                  <div class="post-author pt-4">
                    Post by: <strong>Angel Monalisa</strong> <br>
                    Post Date: 10 Oct 2022
                  </div>
                </div>
              </div>
            </div>
          </div>

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