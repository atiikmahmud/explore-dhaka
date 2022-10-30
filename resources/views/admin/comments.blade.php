<x-app-layout>
    <div class="messages-section mt-3">
        <div class="container">
            
            <div class="alert-section mx-4">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>

            <div class="card mx-4">             
                <div class="card-header text-center h3">
                    Comments
                </div>
                <div class="card-body">
                    <div class="messeage-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th scope="col">No.</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col" width="40%">Comment</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(!empty($comments) && $comments->count())
                                    @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $comment->name }}</td>
                                        <td>{{ $comment->email }}</td>
                                        <td>{{ $comment->comment }}</td>
                                        <td>
                                            <a href="{{ route('single.post', $comment->post_id) }}" class="btn btn-sm btn-primary">Post</a>
                                            <a href="{{ route('delete.comment', $comment->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure, delete this message?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">There are no comment.</td>
                                </tr>
                                @endif
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
