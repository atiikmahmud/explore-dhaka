@extends('layouts.web')
@section('title', $title)

@section('content')

<div class="main-body-section">
    <div class="container">
        <div class="row d-flex justify-content-center px-5">
            <div class="col-md-6">
                <div class="contact-image">
                    <img src="{{url('images/contact-us.webp')}}" alt="contact_image" class='d-block mx-auto p-5' style="height: 500px"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-form mt-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class='h4 text-center'>Contact Us</div>
                        </div>
                        <div class="card-body">
                          <div class="form-section">

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                                        {{ $error }}
                                        <button type="button" class="btn btn-sm btn-close" style="padding: 8px" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif
                            
                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            @if(session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">   
                                @csrf                         
                                <div class="form-group mb-3">
                                    <label htmlFor="">Name</label>
                                    <input type="text" class='form-control mt-1' name="name" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label htmlFor="">Email</label>
                                    <input type="email" class='form-control mt-1' name="email" required/>
                                </div>
                                <div class="form-group mb-3">
                                    <label htmlFor="">Message</label>
                                    <textarea rows="5" cols="12" class='form-control' name="message" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type='submit' class='btn btn-primary'>Send</button>
                                </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
