<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name')}} - Forgot Password</title>
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
                        <div class="col-md-5 col-xl-4 col-lg-4">
                            <div class="card mb-0 border-0">
                                <div class="card-body p-0">
                                    <div class="text-center p-3">
                                        <a href="/" class="logo logo-admin">
                                            <img src="/admin/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                      
                                        <p class="text-muted  mb-0">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>  
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body pt-0">  

                                    @if ($errors->any())
                                        <div class="alert text-center alert-danger alert-dismissible alert-outline fade show" role="alert">
                                             {{ $errors->first() }}
                                        </div>
                                    @endif

                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif                                
                                    <form class="my-4" method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" class="form-control" name="email" :value="old('email')" required autofocus placeholder="Enter Email Address">                               
                                        </div><!--end form-group--> 
    
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit">Email Password Reset Link <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    <div class="text-center text-muted">
                                        <p class="mb-1">Remember It ?  <a href="{{ route('login') }}" class="text-primary ms-2">Sign in here</a></p>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-7 col-xl-8 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                            <div class="accountbg d-flex align-items-center"> 
                                <div class="account-title text-center text-white">
                                    <img src="/admin/images/logo-sm.png" alt="" class="thumb-sm">
                                    <h4 class="mt-3 text-white">Welcome To <span class="text-warning">{{ config('app.name')}}</span> </h4>
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

