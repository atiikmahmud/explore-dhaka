<x-app-layout>
    <div class="messages-section mt-3 pb-4">
        <div class="container">            
            <div class="alert-section mx-4">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('message-read'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message-read') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif 

                @if(session()->has('message-unread'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session()->get('message-unread') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif 
            </div>

            <div class="card mx-4">             
                <div class="card-header text-center h3">
                    Sliders
                </div>
                <div class="card-body">
                    <div class="sliders mb-3">
                        <div class="card">
                            <div class="card-header">
                                Slider #1
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider-image">
                                            @if($slider1->image)
                                            <img src="{{ asset('slider/'.$slider1->image) }}" alt="" width="auto" class="d-block mx-auto mt-5" style="height: 200px; width: 400px;">
                                            @else
                                            <img src="{{ asset('images/post-image.jpg') }}" alt="" width="auto" class="d-block mx-auto mt-5" style="height: 200px; width: 400px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <form action="{{ route('update.slide') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $slider1->id }}">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control form-control-sm" name="title" value="{{ $slider1->title }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control form-control-sm" name="image">
                                            </div>
                                            <div class="mb-3">
                                                <label for="caption" class="form-label">Caption</label>
                                                <input type="text" class="form-control form-control-sm" name="caption" value="{{ $slider1->caption }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliders mb-3">
                        <div class="card">
                            <div class="card-header">
                                Slider #2
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider-image">
                                            @if($slider2->image)
                                            <img src="{{ asset('slider/'.$slider2->image) }}" alt="" width="auto" class="d-block mx-auto mt-5" style="height: 200px; width: 400px;">
                                            @else
                                            <img src="{{ asset('images/post-image.jpg') }}" alt="" width="auto" class="d-block mx-auto mt-5" style="height: 200px; width: 400px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <form action="{{ route('update.slide') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $slider2->id }}">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control form-control-sm" name="title" value="{{ $slider2->title }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control form-control-sm" name="image">
                                            </div>
                                            <div class="mb-3">
                                                <label for="caption" class="form-label">Caption</label>
                                                <input type="text" class="form-control form-control-sm" name="caption" value="{{ $slider2->caption }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliders">
                        <div class="card">
                            <div class="card-header">
                                Slider #3
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="slider-image">
                                            @if($slider3->image)
                                            <img src="{{ asset('slider/'.$slider3->image) }}" alt="" width="auto" class="d-block mx-auto mt-5" style="height: 200px; width: 400px;">
                                            @else
                                            <img src="{{ asset('images/post-image.jpg') }}" alt="" width="auto" class="d-block mx-auto mt-5" style="height: 200px; width: 400px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <form action="{{ route('update.slide') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $slider3->id }}">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control form-control-sm" name="title" value="{{ $slider3->title }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control form-control-sm" name="image">
                                            </div>
                                            <div class="mb-3">
                                                <label for="caption" class="form-label">Caption</label>
                                                <input type="text" class="form-control form-control-sm" name="caption" value="{{ $slider3->caption }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
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
    </div>
</x-app-layout>
