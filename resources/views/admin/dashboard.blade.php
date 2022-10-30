<x-app-layout>
    <div class="messages-section mt-3 pb-4">
        <div class="container">            
            <div class="card mx-4">             
                <div class="card-header text-center h3">
                    Dashboard
                </div>
                <div class="card-body" style="min-height: 500px;">
                    <div class="row">                
                        
                        <div class="col-md-3">
                            <div class="box-section">
                                <div class="card shadow" style="border-left: 5px solid #e83e8c">
                                    <div class="card-body row">
                                        <div class="info col-md-8">
                                            <div class="box-title">
                                                <small>Users</small>
                                            </div>
                                            <div class="count h3 pt-1" style="color: #e83e8c">
                                                {{App\Models\User::count()}}
                                            </div>
                                            <div class="details">
                                                <a href="{{ route('profile.show') }}" class="text-decoration-none text-dark">Details</a>
                                            </div>
                                        </div>
                                        <div class="icon col-md-4 pt-3"><i class="fas fa-users" style="font-size: 50px; color:#e83e8c;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <div class="box-section">
                                <div class="card shadow" style="border-left: 5px solid #1cc88a">
                                    <div class="card-body row">
                                        <div class="info col-md-8">
                                            <div class="box-title">
                                                <small>Total Post</small>
                                            </div>
                                            <div class="count h3 pt-1" style="color: #1cc88a">
                                                {{App\Models\Post::count()}}
                                            </div>
                                            <div class="details">
                                                <a href="{{ route('posts') }}" class="text-decoration-none text-dark">Details</a>
                                            </div>
                                        </div>
                                        <div class="icon col-md-4 pt-3"><i class="fa-regular fa-paste" style="font-size: 50px; color:#1cc88a;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <div class="box-section">
                                <div class="card shadow" style="border-left: 5px solid #4e73df">
                                    <div class="card-body row">
                                        <div class="info col-md-8">
                                            <div class="box-title">
                                                <small>Comments</small>
                                            </div>
                                            <div class="count h3 pt-1" style="color: #4e73df">
                                                {{App\Models\Comment::count()}}
                                            </div>
                                            <div class="details">
                                                <a href="{{ route('comments') }}" class="text-decoration-none text-dark">Details</a>
                                            </div>
                                        </div>
                                        <div class="icon col-md-4 pt-3"><i class="fa-regular fa-comments" style="font-size: 50px; color:#4e73df;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <div class="box-section">
                                <div class="card shadow" style="border-left: 5px solid #36b9cc">
                                    <div class="card-body row">
                                        <div class="info col-md-8">
                                            <div class="box-title">
                                                <small>Contact Message</small>
                                            </div>
                                            <div class="count h3 pt-1" style="color: #36b9cc">
                                                {{App\Models\Contact::count()}}
                                            </div>
                                            <div class="details">
                                                <a href="{{ route('messages') }}" class="text-decoration-none text-dark">Details</a>
                                            </div>
                                        </div>
                                        <div class="icon col-md-4 pt-3">
                                            <i class="fa-regular fa-envelope" style="font-size: 50px; color:#36b9cc;"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        
                        <div class="col-md-12 mt-3">
                            <div class="box-section">
                                <div class="card shadow" style="border-left: 5px solid #22df45">
                                    <div class="card-body row"  style="min-height: 315px;">
                                        <div class="col-md-6">
                                            <div class="dashboard-image">
                                                <img src="{{ asset('images/banner-img.png') }}" alt="" class="d-block mx-auto">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="dashboard-text" style="margin-top: 110px;">
                                                <h2 class="text-center">Welcome to Explore Dhaka <br> Admin Panel</h2>
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
</x-app-layout>
