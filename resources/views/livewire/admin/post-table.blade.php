<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col">                      
                <h4 class="card-title">Post Table</h4>             
            </div><!--end col--> 
             <div class="col-auto">
               <button class="btn btn-outline-light btn-sm px-4" data-bs-toggle="modal" data-bs-target="#add-post-form">+ Add New</button>    
             </div> <!--end col-->                                        
        </div>  <!--end row-->                                  
    </div><!--end card-header-->
    <div class="card-body">        
        <div class="table-responsive">
            <table class="table ">
                <thead class="thead-light">
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Status</th>
                    <th>Uploaded By</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>
                        <img src="{{ optional($post)->url }}" alt="" class="rounded-circle thumb-sm me-1"> {{ $post->title }}
                    </td>
                    <td>{{ $post->body }}</td>
                    <td><a href="#" wire:click.prevent="change_status({{$post->id}})">
                            @if($post->status) 
                            <span class="badge badge-soft-success">Active</span>
                            @else
                            <span class="badge badge-soft-danger">Disabled</span>
                            @endif
                        </a>
                    </td>
                    <td>{{ optional($post->user)->name }} </td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td>                                                       
                        <a href="#" wire:click.prevent="$emitTo('admin.update-post', 'editpost', {{ $post->id }})">
                            <i class="las la-pen text-secondary font-16"></i>
                        </a>
                        
                        <a href="#" wire:click.prevent="delete({{ $post->id }})">
                            <i class="las la-trash-alt text-secondary font-16"></i>
                        </a>
                       
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table><!--end /table-->
        </div><!--end /tableresponsive-->
        
    </div><!--end card-body-->

    @livewire('admin.add-post')
    @livewire('admin.edit-post')
</div>
