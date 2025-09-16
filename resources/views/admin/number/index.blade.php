@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="list"></i>
@endsection
@section('content-header')
Numbers
@endsection
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($numbers as $row)
                                    <tr class="row1" data-id="{{ $row->id }}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->number}}</td>
                                        <td>
                                            
                                            <a class="btn  btn-primary" href="{{ route('admin.numbers.edit',$row->id) }}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>    
                                @endforeach   
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Action</th>
                            </tfoot>
                        </table>
                    </div>

                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
@section('script')

@endsection