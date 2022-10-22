<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Explore Dhaka</title>
    <link rel = "icon" type = "image/png" href = "{{url('images/fevicon.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
      body{
        background-color: #eeeeee;
      }
      .sticky {
        position: fixed;
        top: 0;
        width: 100%;
      }
    </style>

  </head>
  <body>
    <!-- Header Section Start -->
    <div class="header-section">
      <div class="container">
        <div class="brand-name h2 text-center my-3">
          <i class="fas fa-city"></i> Explore Dhaka
        </div>
      </div>
    </div>
    <!-- Header Section End -->

    <!-- Navbar Section Start -->
    <div class="navbar-section">
      <nav class="navbar sticky-top navbar-expand-lg bg-light shadow" id="navbar">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse px-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Historical Place</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hotel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Restaurent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hospital</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar Section End -->
    
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

    <footer class="bg-dark mt-4" style="min-height: 50px">
      <div class="container">
        <div class="footer-section text-light px-5">
          <div class="copy-right-section text-center py-3">
            Copyright &copy; 2022 <a href="{{ route('home') }}" class="text-decoration-none text-light">Explore Dhaka</a>
          </div>
        </div>
      </div>
    </footer>

    <script>
      window.onscroll = function() {myFunction()};
      
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
        } else {
          navbar.classList.remove("sticky");
        }
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
