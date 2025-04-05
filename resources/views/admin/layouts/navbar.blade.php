 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light pcoded-header">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <li class="nav-item d-none d-sm-inline-block">
             <a href="{{route('admin.dashboard')}}" class="nav-link">Home</a>
         </li>
         <!-- <li class="nav-item d-none d-sm-inline-block">
             <a href="#" class="nav-link">Contact</a>
         </li> -->
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">

         <!-- Notifications Dropdown Menu -->
         <li class="nav-item dropdown user user-menu open">
             <a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#">
                 <img src="{{asset('admin/dist/img/user-filled.png')}}" class="user-image" alt="User Image">
                 <span class="hidden-xs">{{Auth::user()->name}}{{-- ({{ ucfirst(Auth::user()->roles->first()->name) }})--}}</span>
                 <!-- <i class="feather icon-chevron-down"></i> -->
                 <i data-feather="chevron-down" class="sidebar-custom-feather"></i>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="padding: 15px 0;">

                 <a href="{{ route('admin.logout') }}" class="dropdown-item logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     <!-- Message Start -->
                     <div class="media">
                         <!-- <i class="fa fa-cog"></i> -->
                         <i data-feather="log-out" class="header-custom-feather"></i>
                         <div class="media-body">
                             <h3 class="dropdown-item-title">
                                 Logout
                             </h3>
                         </div>
                     </div>
                     <!-- Message End -->
                 </a>
                 <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                        <input type="submit" value="logout" style="display: none;">
                </form>
             </div>
         </li>
         <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
     </ul>
 </nav>
 <!-- /.navbar -->