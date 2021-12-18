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
                        <li class="breadcrumb-item active">Plans</li>
                    </ol>
                </div>
                <h4 class="page-title">Investment Plans</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    
    <div class="row">
        @foreach($plans as $plan)
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="pricingTable1 text-center">
                         <span class="badge bg-warning ml-auto a-animate-blink">POPULAR</span>
                        <img src="assets/images/small/p-1.png" alt="" class="" height="120">
                        <h6 class="title1 py-3 mt-2 mb-0">{{ $plan->name}}
                            <small class="text-muted font-12">${{ number_format($plan->min) }}/min</small>
                        </h6>
                        <ul class="list-unstyled pricing-content-2">
                            <li>ROI {{ $plan->roi}}% Weekly</li>
                            <li> {{ $plan->support }}</li>
                            <li>{{ $plan->desc }}</li>
                            <li>${{ number_format($plan->min) }} Mininum</li>
                        </ul>
                        <hr class="hr-dashed my-4">
                        <div class="text-center">
                            <h3 class="amount">${{ number_format($plan->max) }}<small class="font-12 text-muted">/max</small></h3>
                        </div> 
                        <div class="d-grid">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#makeDeposit" class="btn btn-primary btn-skew btn-outline-dashed py-2"><span>invest</span></a>
                        </div>
                        
                    </div><!--end pricingTable-->
                </div><!--end card-body-->
            </div> <!--end card-->                                   
        </div><!--end col-->
        @endforeach

    </div>

    @livewire('user.make-deposit')
</div>