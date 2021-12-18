<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">User Profit History</li>
                    </ol>
                </div>
                <h4 class="page-title">User Profit History</h4>
                <button type="button" data-bs-toggle="modal" data-bs-target="#add-profit-form" class="btn btn-primary btn-sm">Add New Profit History</button>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th >Date</th>
                                <th >Time</th>
                                <th >Amount</th>
                                <th >Type</th>
                                <th ></th>
                            </tr><!--end tr-->
                            </thead>

                            <tbody>
                               @foreach($statements as $statement)
                                <tr>
                                    <td>{{ $statement->date }}</td>
                                    <td>{{ $statement->time }}</td>
                                    <td>${{ number_format($statement->amount) }}</td>
                                    <td>{{ $statement->type }}</td>
                                    <td class="text-right">   
                                                                                               
                                        <a href="#" wire:click.prevent="$emitTo('admin.update-user-profit', 'editStatement', '{{$statement->id}}')">
                                            <i class="las la-pen text-info font-18"></i>
                                        </a>
                                        <a href="#" wire:click.prevent="delete({{ $statement->id }})"><i class="las la-trash-alt text-danger font-18"></i></a>
                                    </td>
                                </tr>
                                @endforeach       
                            </tbody>
                        </table>                    
                    </div>    
                                              
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div> <!--end col-->                               
    </div><!--end row-->

    @livewire('admin.add-user-profit', ['user_id' => $user_id])
    @livewire('admin.update-user-profit')
</div><!-- container -->
