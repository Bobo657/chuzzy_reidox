<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name')}} - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="We are open to all new possibilities, which can produce additional profit to our investors. At constantly changing investment market we steadily keep the top positions among those who work at Forex market" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="/admin/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="/admin/plugins/animate/animate.min.css" rel="stylesheet" type="text/css">
         <!-- App css -->
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin/images/fav.png">

         <!-- App css -->
         <!-- <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="/admin/css/app.min.css" rel="stylesheet" type="text/css" /> -->
         <link href="/admin/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
         <link href="/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="/admin/css/app-dark.min.css" rel="stylesheet" type="text/css" />

        @livewireStyles
        @livewireScripts
    </head>

    <body data-layout="horizontal" class="">
        <!-- leftbar-tab-menu -->
        
        <!-- Top Bar Start -->
        <div class="topbar">  
            <!-- LOGO -->
            <div class="brand">
                <a href="/" class="logo">
                    <span>
                        <img src="/admin/images/logo.png" alt="logo-small" class="logo-sm">
                    </span>
                    <!-- <span>
                        <img src="/admin/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="/admin/images/logo.png" alt="logo-large" class="logo-lg logo-dark">
                    </span> -->
                </a>
            </div>
            <!--end logo-->  
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0"> 
                
                    @livewire('admin.display-notification')

                     <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="{{ auth()->user()->photo() }}" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">{{ auth()->user()->role }}</small>
                                    <span class="d-none d-md-block fw-semibold font-12">{{ auth()->user()->name }} <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                           
                            <div class="dropdown-divider mb-0"></div>
                             <form method="POST" action="{{ route('logout') }}">
                                    @csrf()
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                            </form>
                        </div>
                    </li><!--end topbar-profile-->
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle"  onclick="toggleMenu()" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a><!-- End mobile menu toggle-->
                    </li> <!--end menu item--> 
                </ul><!--end topbar-nav-->

                <div class="navbar-custom-menu">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                             @if(Auth::user()->role == 'admin')
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                    <span><i class="ti ti-smart-home menu-icon"></i>
                                    Dashboard</span></a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users') }}"><span><i class="ti ti-users menu-icon"></i>Users</span></a>
                            </li><!--end nav-item-->
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.investments') }}"><span><i class="ti ti-report-money menu-icon"></i>Investments</span></a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.withdrawals') }}"><span><i class="ti ti-report menu-icon"></i>Withdrawals</span></a>
                            </li><!--end nav-item-->
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.dashboard') }}"><span><i class="ti ti-users menu-icon"></i>Dashboard</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.referrals') }}"><span><i class="ti ti-layers-linked menu-icon"></i>Referrals</span></a>
                            </li><!--end nav-item--><li class="nav-item">
                                <a class="nav-link" href="{{ route('user.withdrawals') }}"><span><i class="ti ti-briefcase menu-icon"></i>Withdrawals</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.plans') }}"><span><i class="ti ti-clipboard-list menu-icon"></i>Plans</span></a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.investments') }}"><span><i class="ti ti-building-bank menu-icon"></i>Investments</span></a>
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.settings') }}"><span><i class="ti ti-settings menu-icon"></i>Setting</span></a>
                            </li><!--end nav-item-->
                            @endif           
                        </ul><!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div>
                <!-- Navbar -->
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->



        <!-- end leftbar-tab-menu-->        

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content-tab">
                {{ $slot }}
            </div>
            <!-- end page content -->
        </div>

         <!--Start Rightbar-->
        
         <!--end Rightbar/offcanvas-->
         <!--end Rightbar-->
         
        <!--Start Footer-->
        <!-- Footer Start -->
        <footer class="footer text-center text-sm-start">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> {{ config('app.name')}} 
        </footer>
        <!-- end Footer -->                
        <!--end footer-->
        @yield('scripts')
        <script src="/admin/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <!-- App js -->
        <script src="/admin/js/app.js"></script>
        <script>
            Livewire.on('showModal', modal => {
                var myModal = document.getElementById(modal);
                var modal = bootstrap.Modal.getOrCreateInstance(myModal)
                modal.show()
            })

            Livewire.on('closeModals', (modal) => {
                var truck_modal = document.querySelector(modal);
                var modal = bootstrap.Modal.getInstance(truck_modal);    
                modal.hide();
               
            })

            Livewire.on('showAlert', message => {
                Swal.fire({
                    icon: 'success',
                    title: message,
                    //timer: 1900
                })
            })
        </script>
    </body>

</html>