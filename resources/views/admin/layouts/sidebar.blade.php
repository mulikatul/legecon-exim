 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="Logo" class="brand-image">
         <span class="brand-text font-weight-light">LEGECON EXIM</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                 <li class="navigation-label">Navigation</li>


                 {{--<li class="nav-item">
                     <a class="nav-link">
                         <i data-feather="home" class="nav-icon feather-icon"></i>
                         <p class="pcoded-mtext">
                             Dashboard
                             <i data-feather="chevron-left" class="sidebar-custom-feather right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('admin.dashboard')}}" class="nav-link active">
                 <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
                 <p>Analytics</p>
                 </a>
                 </li>
             </ul>
             </li> --}}
             <li class="nav-item">
                 <a href="{{route('admin.dashboard')}}" class="nav-link">
                     <i data-feather="home" class="nav-icon feather-icon"></i>
                     <p>
                         Dashboard
                     </p>
                 </a>
             </li>


             <li class="nav-item">
                 <a class="nav-link">
                     <i data-feather="shopping-bag" class="nav-icon feather-icon"></i>
                     <p class="pcoded-mtext">
                         Product
                         <i data-feather="chevron-left" class="sidebar-custom-feather right"></i>
                     </p>
                 </a>
                 <ul class="nav nav-treeview">
                     <li class="nav-item">
                         <a href="{{route('admin.category.index')}}" class="nav-link">
                             <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
                             <p>Product Categories</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{route('admin.sub-category.index')}}" class="nav-link">
                             <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
                             <p>Product Sub Categories</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{route('admin.products.index')}}" class="nav-link">
                             <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
                             <p>Products</p>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a href="{{route('admin.testimonials.index')}}" class="nav-link">
                     <i data-feather="message-square" class="nav-icon feather-icon"></i>
                     <p>
                         Testimonials
                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{route('admin.contact-us.index')}}" class="nav-link">
                     <i data-feather="message-circle" class="nav-icon feather-icon"></i>
                     <p>
                         Contact Us
                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{route('admin.numbers.index')}}" class="nav-link">
                     <i data-feather="list" class="nav-icon feather-icon"></i>
                     <p>
                         Numbers
                     </p>
                 </a>
             </li>
             <li class="nav-item">
                 <a href="{{route('admin.client-logo.index')}}" class="nav-link">
                     <i data-feather="image" class="nav-icon feather-icon"></i>
                     <p>
                         Client Logos
                     </p>
                 </a>
             </li>
             {{--@canany(['admin_users.view','roles.view','permissions.view'])
                 <li class="nav-item">
                     <a class="nav-link">
                         <i data-feather="settings" class="nav-icon feather-icon"></i>
                         <p class="pcoded-mtext">
                             Roles & Permissions
                             <i data-feather="chevron-left" class="sidebar-custom-feather right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                        @can('admin_users.view')
                         <li class="nav-item">
                             <a href="{{route('admin.cms-users.index')}}" class="nav-link">
             <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
             <p>CMS Users</p>
             </a>
             </li>
             @endcan
             @can('roles.view')
             <li class="nav-item">
                 <a href="{{route('admin.roles.index')}}" class="nav-link">
                     <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
                     <p>Roles</p>
                 </a>
             </li>
             @endcan
             @can('permissions.view')
             <li class="nav-item">
                 <a href="{{route('admin.permissions.index')}}" class="nav-link">
                     <i data-feather="chevron-right" class="sidebar-custom-feather"></i>
                     <p>Permissions</p>
                 </a>
             </li>
             @endcan
             </ul>
             </li>
             @endcanany--}}
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>