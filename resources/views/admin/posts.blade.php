<x-app-layout>
    <div class="messages-section mt-3 pb-4">
        <div class="container">            
            <div class="alert-section mx-4">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
            </div>

            <div class="card mx-4">             
                <div class="card-header text-center h3">
                    Posts
                </div>
                <div class="card-body">
                    <div class="post-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Post by</th>
                                    <th scope="col" width="15%">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(!empty($posts) && $posts->count())
                                    @foreach ($posts as $key => $post)
                                    <tr>
                                        <td>{{ $posts->firstItem() + $key }}</td>
                                        <td>{{ Str::limit($post->title, 60) }}</td>
                                        <td>{{ $post->category }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>
                                            <a href="{{ route('single.post', $post->id) }}" class="btn btn-sm btn-primary">View</a>
                                            <a href="{{ route('edit.post', $post->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <a href="{{ route('delete.post', $post->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure, delete this post?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach                                    
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">There are no post.</td>
                                </tr>
                                @endif
                              </tbody>
                            </table>
                        {{ $posts->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
