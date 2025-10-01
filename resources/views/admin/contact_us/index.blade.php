@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="message-circle"></i>
@endsection
@section('content-header')
Contact Us
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
                                    <th>Email</th>
                                    <th>Phone no</th>
                                    <th>Company</th>
                                    <th>Location</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contactUs as $row)
                                    <tr class="row1" data-id="{{ $row->id }}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->phone_no}}</td>
                                        <td>{{$row->company}}</td>
                                        <td>{{$row->location}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg-{{$row->id}}">
                                                View
                                            </button>
                                            <div class="modal fade" id="modal-lg-{{$row->id}}">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Message</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <label class="control-label col-sm-4" for="name">Message:</label>
                                                                <div class="col-sm-8">{{  $row->message }}</div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </td>
                                        <td>
                                            {{formatted_date($row->created_at)}}
                                        </td>
                                        <td>
                                            
                                            <a class="btn btn-danger delete-record delete-row" href="{{ route('admin.contact-us.destroy',$row->id) }}" data-id="{{$row->id}}">
                                                <i class="fas fa-trash">
                                                </i>
                                            </a>
                                            <form id="delete-form-{{$row->id}}" method="post" action="{{ route('admin.contact-us.destroy',$row->id) }}" display="none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                           
                                        </td>
                                    </tr>    
                                @endforeach   
                            </tbody>
                            <tfoot>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone no</th>
                                <th>Company</th>
                                <th>Location</th>
                                <th>Message</th>
                                <th>Date</th>
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