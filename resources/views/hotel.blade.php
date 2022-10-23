@extends('layouts.web')
@section('title', $title)

@section('content')

<div class="main-body-section">
    <div class="container">
        <div class="historical-place px-5 pt-4">
           <div class="card">
                <div class="card-header h3 text-center">
                    Hotel
                </div>
                
                <div class="card-body" style="min-height: 420px;">
                    
                    <div class="posts bg-light border shadow border mb-3" style="min-height: 200px;">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="post-image">
                                    <img src="{{ asset('images/post-image.jpg') }}" alt="" height="200px" width="200px">
                                </div>
                            </div>
                            <div class="col-md-10" style="padding-left: 30px">
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

                    <div class="posts bg-light border shadow border" style="min-height: 200px;">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="post-image">
                                    <img src="{{ asset('images/post-image.jpg') }}" alt="" height="200px" width="200px">
                                </div>
                            </div>
                            <div class="col-md-10" style="padding-left: 30px">
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
           </div>
        </div>
    </div>
</div>

@endsection
