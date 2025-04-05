<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-sm-6 d-flex align-items-center">
                <div class="page-logo">
                    @section('page-logo')
                    @show
                </div>
                <h5 class="m-0 page-title">
                    @section('content-header')
                    @show
                </h5>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <i data-feather="home" class="feather-icon" style="margin-bottom: 3px;"></i>
                    </li>
                    <li class="breadcrumb-item active">
                        @section('content-header')
                        @show
                    </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    @include('admin.layouts.messages')
</div>
<!-- /.content-header -->