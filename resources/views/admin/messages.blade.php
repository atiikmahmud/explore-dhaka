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
                    Contact Messages
                </div>
                <div class="card-body">
                    <div class="messeage-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th scope="col">No.</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col" width="40%">Message</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(!empty($messages) && $messages->count())
                                    @foreach ($messages as $message)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td>
                                            @if($message->status == 0)
                                                <a href="{{ route('read.message', $message->id) }}" class="btn btn-sm btn-warning">Unread</a>
                                            @else
                                                <a href="{{ route('read.message', $message->id) }}" class="btn btn-sm btn-success" style="padding: 4px 15px;">Read</a>
                                            @endif
                                            <a href="{{ route('delete.message', $message->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure, delete this message?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">There are no message.</td>
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
