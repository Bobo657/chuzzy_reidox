<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">User</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                        </li><!--end nav-item-->
                        <li class="breadcrumb-item active">Referrals</li>
                    </ol>
                </div>
                <h4 class="page-title">My Downlinks & Uplinks</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <div class="card">                                                            
                <div class="card-body">   
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="media">
                               
                                <div class="media-body align-self-center">
                                    <h4 class="mt-0">Refer Us & Earn</h4>
                                    <p class="mb-0 text-muted"><div class="input-group mb-3">
                                        <input type="text" class="form-control copy-text" id="refUrl" value="{{ route('register')}}/?ref={{ Auth::id()+400 }}">
                                        <button class="btn btn-secondary" type="button" id="button-addon2" wire:click="$emit('copy_wallet')">Copy</button>
                                    </div>
                                    </p>
                                </div>
                            </div> 
                        </div><!--end col--> 
                        <div class="col-lg-4 ms-auto">
                            <dl class="row mb-0">
                               
                               <dt class="col-sm-3">Join Date</dt> 
                                <dd class="col-sm-9">{{ Auth::user()->created_at->format('d/m/Y') }}
                                </dd><dt class="col-sm-3">Email</dt> 
                                <dd class="col-sm-9">{{ Auth::user()->email }}
                                <dt class="col-sm-3">Referrals</dt> 
                                <dd class="col-sm-9">{{ Auth::user()->referals->count() }}
                            </dl>
                        </div><!--end col--> 
                    </div><!--end row-->
                </div><!--end card-body--> 
                                                                               
            </div><!--end card-->
        </div><!--end col-->                        
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if($uplink)
                    <table id="datatable" class="table">
                        <thead class="thead-light">
                        <tr>
                            <th colspan="4">Uplink</th>
                            
                        </tr><!--end tr-->
                        </thead>

                        <tbody>
                        <tr>
                            <td>{{ $uplink->name }}</td>
                            <td>{{ $uplink->email }}</td>
                            <td>{{ $uplink->country }}</td>
                            <td>{{ $uplink->created_at->format('M d, Y')}}</td>                        
                        </tr><!--end tr-->
                                                 
                        </tbody>
                    </table>
                    @endif
                    @if($referrals)
                    <table id="datatable" class="table">
                        <thead class="thead-light">
                        <tr>
                            <th colspan="4">Downlink</th>
                            
                        </tr><!--end tr-->
                        </thead>

                        <tbody>
                        @foreach($referrals as $ref)
                        <tr>
                             <td>{{ $ref->name }}</td>
                            <td>{{ $ref->email }}</td>
                            <td>{{ $ref->country }}</td>
                            <td>{{ $ref->created_at->format('M d, Y')}}</td>                           
                        </tr><!--end tr-->
                            @endforeach                       
                        </tbody>
                    </table>
                   @endif 
                </div><!--end card-body--> 
            </div><!--end card--> 
        </div> <!--end col-->                       
    </div>
    <!--end row-->

    <script type="text/javascript">

    document.addEventListener('livewire:load', function () {

        Livewire.on('copy_wallet', message => {
            
           var inp = document.querySelector('#refUrl');  

           if (inp && inp.select) {
                // select text
                inp.select();
                try {
                    // copy text
                    document.execCommand('copy');
                    inp.blur();

                    // copied animation
                    !function(o,t){
                        toastr.clear(),o.Toast('Link copied',"success", {position:"top-right"})
                    }(NioApp,jQuery)
                } catch (err) {
                    //fallback in case exexCommand doesnt work
                    alert('please press Ctrl/Cmd+C to copy');
                }

            }    
        })
       
    })

    </script>
</div><!-- container -->