<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')

<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')
   

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @include('admin.layouts.contentheader')
      <!-- Main content -->
      @yield('main-content')   
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @include('admin.layouts.footer')
  </div>
  @include('admin.layouts.scripts') 
</body>

</html>