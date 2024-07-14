
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
    <div class="logo d-flex align-items-center">
        <span class="d-none d-lg-block title-name">{{trans_choice('general.appName',0)}}</span>
    </div>
    <a href="{{route('students.index')}}"><i class="bi bi-list toggle-sidebar-btn"></i></a>
</div><!-- End Logo -->


<nav class="header-nav ms-auto" >
    <ul class="d-flex align-items-center">


    <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Menu</span>
            </a><!-- End Profile Iamge Icon -->
    
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('students-logs.index')}}">
                    <i class="bi bi-forward"></i>
                    <span>Students Logs</span>
                    </a>
                </li>
                @if (Auth::User()->role == 'Supervisor')
                <li><hr class="dropdown-divider"></li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('students.index')}}">
                    <i class="bi bi-forward"></i>
                    <span>My Students</span>
                    </a>
                </li>
                @endif
                
                @if (Auth::User()->role == 'Admin')
                    
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('course.index')}}">
                        <i class="bi bi-forward"></i>
                        <span>Courses</span>
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{route('students.index')}}">
                        <i class="bi bi-forward"></i>
                        <span>Students</span>
                        </a>
                    </li>
                @endif
                <li><hr class="dropdown-divider"></li>
            </ul><!-- End Home Dropdown Items -->
        </li><!-- End Home Nav -->
        

    <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="{{asset('assets/img/male.png')}}" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::User()->name}}</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <span>Logged In As</span>
            <h6>{{Auth::User()->FName}} {{Auth::User()->name}}</h6>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{url('/profile')}}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item d-flex align-items-center" href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    {{ __('Log Out') }}
                </a>
            
            </form>
        </li>

        </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

    </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
