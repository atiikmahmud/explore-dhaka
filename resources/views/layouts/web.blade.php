<!-- Header Section -->
@include('layouts.header')

<body>
<div style="display: flex; flex-direction: column; min-height: 100vh;">
    <!-- Navbar Section -->
@include('layouts.navbar')

<!-- Main Body section -->
@section('content')
@show

<!-- Footer Section -->
@include('layouts.footer')
</div>
</body>
</html>