@extends('layouts.web')
@section('title', $title)

@section('content')

<div class="main-body-section">
    <div class="container">
        <div class="row d-flex justify-content-center px-5">
            <div class="col-md-6">
                <div class="contact-image">
                    <img src="{{url('images/about.webp')}}" alt="contact_image" class='d-block mx-auto' style="height: 500px"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form mt-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h4 text-center'>About Us</div>
                        </div>
                        <div class="card-body">
                          <div class="demo-1">
                            <h4>Explore Dhaka</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                          </div>
                          <div class="demo-2">
                            <h4>Bangladesh</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
