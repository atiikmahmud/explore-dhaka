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
              <img src="{{ asset('images/slider-1.jpg') }}" class="d-block w-100" alt="..." height="500px" width="100%">
              <div class="carousel-caption d-none d-md-block text-light">
                <h5 class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">First slide label</h5>
                <br>
                <p class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="{{ asset('images/slider-2.jpg') }}" class="d-block w-100" alt="..." height="500px" width="100%">
              <div class="carousel-caption d-none d-md-block text-light">
                <h5 class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">Second slide label</h5> <br>
                <p class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/slider-3.webp') }}" class="d-block w-100" alt="..." height="500px" width="100%">
              <div class="carousel-caption d-none d-md-block text-light">
                <h5 class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">Third slide label</h5> <br>
                <p class="d-inline p-1" style="background-color: rgba(0, 0, 0, 0.377)">Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Section End -->