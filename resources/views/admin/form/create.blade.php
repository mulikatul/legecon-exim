@extends('admin.layouts.app')
@section('page-logo')
<i data-feather="trello"></i>
@endsection
@section('content-header')
Forms
@endsection
@section('head-section')
<link rel="stylesheet" href="{{ asset('admin/css/tab-form.css')}}">
@endsection
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <!-- form start -->
                    <div class="card-body">
                        <div class="multitab-form-area">
                            <div class="tab-links-area">
                                <h5 class="heading">Form</h5>
                                <hr>
                                <ul>
                                    <li><a data-toggle="formtab" href="#userProfile" class="active">User Profile</a></li>
                                    <li><a data-toggle="formtab" href="#residentailAddress">Residential Address</a></li>
                                    <li><a data-toggle="formtab" href="#jobDescription">Job Description</a></li>
                                    <li><a data-toggle="formtab" href="#bankInfo">Bank Information & Others</a></li>
                                    <li><a data-toggle="formtab" href="#uploadDocuments">Upload Documents</a></li>
                                </ul>
                            </div>
                            <div class="tab-form-area">
                                <div class="tabs-panels active" id="userProfile">
                                    <div class="tab-part">
                                        <h5 class="heading">User Profile</h5>
                                        <hr>
                                        <div class="devider-row">
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" class="form-control" placeholder="Jhone Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <input type="text" class="form-control" placeholder="example@domain.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Specialization</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Education Level</label>
                                                    <select class="form-control">
                                                        <option selected disabled>Select Education</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="+91 123-456-789">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <div class="devider-row">
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="29">29</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="may">May</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="1992">1992</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-page d-flex justify-content-end">
                                        <a data-toggle="formtab" class="btn btn-dark" href="#residentailAddress">Next</a>
                                    </div>
                                </div>
                                <div class="tabs-panels" id="residentailAddress">
                                    <div class="tab-part">
                                        <h5 class="heading">Residential Address</h5>
                                        <hr>
                                        <div class="devider-row">
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="Delhi">
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="India">
                                                </div>
                                            </div>
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" placeholder="Delhi">
                                                </div>
                                                <div class="form-group">
                                                    <label>Zip Code</label>
                                                    <input type="text" class="form-control" placeholder="201003">
                                                </div>
                                                <div class="form-group">
                                                    <label>Occupation</label>
                                                    <input type="text" class="form-control" placeholder="Developer">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="devider-row">
                                            <div class="full">
                                                <div class="form-group">
                                                    <label>Describe Yourself</label>
                                                    <textarea class="form-control" placeholder="About Your Self"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-page d-flex justify-content-end">
                                        <a data-toggle="formtab" class="btn btn-dark" href="#jobDescription">Next</a>
                                    </div>
                                </div>
                                <div class="tabs-panels" id="jobDescription">
                                    <div class="tab-part">
                                        <h5 class="heading">Job Description</h5>
                                        <hr>
                                        <div class="devider-row">
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Select One</label>
                                                    <div class="border-checkbox-section">
                                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                                            <input class="border-checkbox" type="checkbox" type="checkbox" id="checkbox1">
                                                            <label class="form-label border-checkbox-label" for="checkbox1">checkbox</label>
                                                        </div>
                                                        <div class="border-checkbox-group border-checkbox-group-primary">
                                                            <input class="border-checkbox" type="checkbox" type="checkbox" id="checkbox2">
                                                            <label class="form-label border-checkbox-label" for="checkbox2">checkbox</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <div class="form-radio">
                                                        <div class="radio radio-inline">
                                                            <label class="form-label">
                                                                <input type="radio" name="radio" checked="checked">
                                                                <i class="helper"></i>Radio 1
                                                            </label>
                                                        </div>
                                                        <div class="radio radio-inline">
                                                            <label class="form-label">
                                                                <input type="radio" name="radio">
                                                                <i class="helper"></i>Radio 2
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="radio">
                                                        <input type="radio" class="form-control" id="radio1" name="radio">
                                                        <label for="radio1">radio</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" class="form-control" id="radio2" name="radio">
                                                        <label for="radio2">radio</label>
                                                    </div> -->
                                                </div>
                                                <div class="form-group">
                                                    <label>Specialization</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Education Level</label>
                                                    <select class="form-control">
                                                        <option selected disabled>Select Education</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="+91 123-456-789">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <div class="devider-row">
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="29">29</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="may">May</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="1992">1992</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-page d-flex justify-content-end">
                                        <a data-toggle="formtab" class="btn btn-dark" href="#bankInfo">Next</a>
                                    </div>
                                </div>
                                <div class="tabs-panels" id="bankInfo">
                                    <div class="tab-part">
                                        <h5 class="heading">Bank Information & Others</h5>
                                        <hr>
                                        <div class="devider-row">
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" placeholder="Jhone Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <input type="text" class="form-control" placeholder="example@domain.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Specialization</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Education Level</label>
                                                    <select class="form-control">
                                                        <option selected disabled>Select Education</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="+91 123-456-789">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <div class="devider-row">
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="29">29</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="may">May</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="1992">1992</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-page d-flex justify-content-end">
                                        <a data-toggle="formtab" class="btn btn-dark" href="#uploadDocuments">Next</a>
                                    </div>
                                </div>
                                <div class="tabs-panels" id="uploadDocuments">
                                    <div class="tab-part">
                                        <h5 class="heading">Upload Documents</h5>
                                        <hr>
                                        <div class="devider-row">
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" placeholder="Jhone Doe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <input type="text" class="form-control" placeholder="example@domain.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Specialization</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="half-2">
                                                <div class="form-group">
                                                    <label>Education Level</label>
                                                    <select class="form-control">
                                                        <option selected disabled>Select Education</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="+91 123-456-789">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <div class="devider-row">
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="29">29</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="may">May</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="half-3">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="1992">1992</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-page d-flex justify-content-end">
                                        <button class="btn btn-dark" type="submit">Submit</button>
                                        <!-- <button class="btn waves-effect waves-light hor-grd btn-grd-primary"></button> -->
                                    </div>
                                </div>
                                <div class="note">
                                    <p>* You must fill all blank spaces.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->


                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('script')

<script>
    $('a[data-toggle="formtab"]').click(function() {
        var targetId = $(this).attr('href');

        $('.tabs-panels').removeClass('active')
        $('a[data-toggle="formtab"]').removeClass('active');

        $(targetId).addClass('active');
        $('a[href="' + targetId + '"]').addClass('active')



    });
</script>
@endsection