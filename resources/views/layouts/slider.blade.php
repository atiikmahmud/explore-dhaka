<!-- Slider Section Start -->
<div class="slider-section my-4">
    <div class="container">
      <div class="slider px-5">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              @if($slider1->image)
              <img src="{{ asset('slider/'.$slider1->image) }}" class="d-block w-100" alt="..." height="500px" width="100%">
              @else
              <img src="{{ asset('images/post-image.jpg') }}" class="d-block w-100" alt="..." height="500px" width="100%">
              @endif
              <div class="carousel-caption d-none d-md-block text-light">
                <h5 class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">
                  {{ $slider1->title }}</h5>
                <br>
                <p class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">{{ $slider1->caption }}</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              @if($slider2->image)
              <img src="{{ asset('slider/'.$slider2->image) }}" class="d-block w-100" alt="..." height="500px" width="100%">
              @else
              <img src="{{ asset('images/post-image.jpg') }}" class="d-block w-100" alt="..." height="500px" width="100%">
              @endif
              <div class="carousel-caption d-none d-md-block text-light">
                <h5 class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">{{ $slider2->title }}</h5> <br>
                <p class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">{{ $slider2->caption }}</p>
              </div>
            </div>
            <div class="carousel-item">
              @if($slider3->image)
              <img src="{{ asset('slider/'.$slider3->image) }}" class="d-block w-100" alt="..." height="500px" width="100%">
              @else
              <img src="{{ asset('images/post-image.jpg') }}" class="d-block w-100" alt="..." height="500px" width="100%">
              @endif
              <div class="carousel-caption d-none d-md-block text-light">
                <h5 class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">{{ $slider3->title }}</h5> <br>
                <p class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">{{ $slider3->caption }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Section End -->