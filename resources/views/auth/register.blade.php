
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name')}} - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="We are open to all new possibilities, which can produce additional profit to our investors. At constantly changing investment market we steadily keep the top positions among those who work at Forex market" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin/images/fav.png">

     <!-- App css -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body id="body" class="auth-page card-bg">
   <!-- Log In page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="card-body p-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 col-xl-3 col-lg-4">
                            <div class="card mb-0 border-0">
                                <div class="card-body p-0">
                                    <div class="text-center p-3">
                                        <a href="/" class="logo logo-admin">
                                            <img src="/admin/images/dark.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started {{ config('app.name')}}</h4>   
                                        <p class="text-muted  mb-0">Sign up to continue to {{ config('app.name')}}.</p>  
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body pt-0">                                    
                                    <form class="my-4" method="POST" action="{{ route('register') }}">
                                                @csrf    
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="name">Fullname</label>
                                            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ old('name') }}">  
                                            @error('name') 
                                                <span  class="text-danger">{{ $message }}</span> 
                                            @enderror                        
                                        </div><!--end form-group--> 

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" name="email" required value="{{ old('email') }}">  
                                             @error('email') 
                                                <span  class="text-danger">{{ $message }}</span> 
                                            @enderror                         
                                        </div><!--end form-group--> 

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone"  value="{{ old('phone') }}">  
                                            @error('phone') 
                                                <span  class="text-danger">{{ $message }}</span> 
                                            @enderror                        
                                        </div><!--end form-group--> 


                                        <div class="form-group mb-2">
                                            <label class="form-label" for="country">Country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Enter Country Name"  value="{{ old('country') }}">  
                                            @error('country') 
                                                <span  class="text-danger">{{ $message }}</span> 
                                            @enderror                        
                                        </div><!--end form-group--> 


                                         <input type="hidden" value="{{ (app('request')->input('ref')) ? app('request')->input('ref') - 400 : '' }}" placeholder="Referral" name="ref_id">
            
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="userpassword">Password</label>                                            
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                             @error('password') 
                                                <span  class="text-danger">{{ $message }}</span> 
                                            @enderror                            
                                        </div><!--end form-group--> 

                                        <div class="form-group mb-2">
                                            <label class="form-label" for="Confirmpassword">Confirm Password</label>                                            
                                            <input type="password" class="form-control" name="password_confirmation" id="Confirmpassword" placeholder="Enter Confirm password">                            
                                        </div><!--end form-group--> 

                                        
            
                                        <div class="form-group row mt-3">
                                            <div class="col-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                    <label class="form-check-label" for="customSwitchSuccess">By registering you agree to the {{ config('app.name') }} <a href="/terms" class="text-danger">Terms of Use</a></label>
                                                </div>
                                            </div><!--end col--> 
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-danger" type="submit">Register <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Already have an account ? <a href="{{ route('login')}}" class="text-danger ms-2">Login</a></p>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                            <div class="accountbg d-flex align-items-center"> 
                                <div class="account-title text-center text-white">
                                    <img src="/admin/images/dark.png" alt="" width:="" 150px;="" style="width: 150px;">
                                    <h4 class="mt-3 text-white">Welcome To <span class="text-warning">{{ config('app.name') }}</span> </h4>
                                    <h1 class="text-white">Let's Get Started</h1>
                                    <p class="font-18 mt-3">Our revolutionary investment strategy is designed to create your own profitable ecosystem, secure digital assets and access to funding anywhere you are..</p>
                                    <div class="border w-25 mx-auto border-warning"></div>
                                </div>
                            </div><!--end /div-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <!-- App js -->
    <script src="/admin/js/app.js"></script>
    
</body>
</html>