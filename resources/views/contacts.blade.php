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
