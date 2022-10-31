<body>

<!-- Header Section Start -->
<div class="header-section">
    <div class="container">
      <div class="brand-name h2 text-center my-3">
        <a href="{{ route('home') }}" class="text-decoration-none text-dark"><i class="fas fa-city"></i> Explore Dhaka</a>
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
              <a class="nav-link @if($title == 'Home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($title == 'Historical Place') active @endif" href="{{ route('his.place') }}">Historical Place</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($title == 'Hotel') active @endif" href="{{ route('hotel') }}">Hotel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($title == 'Restaurant') active @endif" href="{{ route('restaurant') }}">Restaurant</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($title == 'Hospital') active @endif" href="{{ route('hospital') }}">Hospital</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($title == 'About Us') active @endif" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if($title == 'Contacts') active @endif" href="{{ route('contacts') }}">Contacts</a>
            </li>
          </ul>
          <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="{{ !empty($queryData['search']) ? $queryData['search'] : '' }}"
            placeholder="Post title or category..." aria-label="Post title or category...">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar Section End -->