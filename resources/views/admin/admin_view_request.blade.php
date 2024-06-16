@extends('admin.layouts.app')
@section('content')
    <style>
        body {
            background: #ffffff;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8;
        }

        .content {
            margin-top: -3rem;
        }

        .profile-button {
            background: #BA68C8;
            box-shadow: none;
            border: none;
        }

        .profile-button:hover {
            background: #682773;
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none;
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none;
        }

        .back:hover {
            color: #682773;
            cursor: pointer;
        }

        .tabcontent {
            display: none;
        }
    </style>
    <br>
    <section class="content">
        <br><br>
        <label class="badge"style="font-size: 24px;  color: #EA7831;">{{ $jobs->id }}</label>
        <div class="container rounded bg-white mt-5">
            <div class="card ">

                <form action="{{ route('jobs_update', $jobs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card-body">
                        <h4>Job Details</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Job Type</label>
                                <input type="text" class="form-control" id="line1" placeholder=""
                                    value="{{ $jobs->id }}">
                            </div>
                            <div class="col-md-6">
                                <label>Job Category</label>
                                <input type="text" class="form-control" id="line2" placeholder=""
                                    value="{{ $jobs->id }}">
                            </div>
                        </div>
                        <h4>Site Visit Date</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Reference</label>
                                <input type="text" class="form-control" id="line1"
                                    placeholder=""value="{{ $jobs->reference }}">
                            </div>
                            <div class="col-md-6">
                                <label>discription</label>
                                <input type="text" class="form-control" 
                                    placeholder=""value="{{ $jobs->description }}" name="description" id="description">
                            </div>
                        </div>
                    </div>



                    <div class="card-body">
                        <h4>Additional Information</h4>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>FOOTING PROBE</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="footing_probe1"
                                        name="footing_probe">
                                    <label for="footing_probe1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="footing_probe2"
                                        name="footing_probe" checked>
                                    <label for="footing_probe2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>WIND RATING</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="wind_rating1" name="wind_rating">
                                    <label for="wind_rating1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="wind_rating2" name="wind_rating"
                                        checked>
                                    <label for="wind_rating2" class="custom-control-label">N</label>
                                </div>
                            </div>

                            <div class="col-md-2"><label>BAL</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="bal1" name="bal">
                                    <label for="bal1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="bal2" name="bal"
                                        checked>
                                    <label for="bal2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>EXISTING HOUSE ON SITE</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="house_on_site1"
                                        name="house_on_site">
                                    <label for="house_on_site1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="house_on_site2"
                                        name="house_on_site" checked>
                                    <label for="house_on_site2" class="custom-control-label">N</label>
                                </div>
                            </div>

                            <div class="col-md-2"><label>LOCKED GATES</label></div>
                            <div class="col-md-2">
                                <div class="custom-control ">
                                    <input class="custom-control-input" type="radio" id="locked_gates1"
                                        name="locked_gates">
                                    <label for="locked_gates1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-radio" type="radio" id="locked_gates2"
                                        name="locked_gates" checked>

                                    <label for="locked_gates2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>SUBDIVISION UNDER CONSTRUCTION</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="sub_un_con1"
                                        name="sub_un_con">
                                    <label for="sub_un_con1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="sub_un_con2"
                                        name="sub_un_con" checked>
                                    <label for="sub_un_con2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="card-body">
                        <h4>Update Status</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Update Status</label>
                                <select class="form-control" aria-label="Default select example">
                                    <option selected>Update Status</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Visit Date</label>
                                <input type="date" class="form-control" id="datepicker">
                            </div>
                        </div>



                    </div>




                    <div class="card-body">
                        <h4>Contact Details</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Line 1</label>
                                <input type="text" class="form-control" id="line1" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label>Line 2</label>
                                <input type="text" class="form-control" id="line2" placeholder="">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Suburb</label>
                                <input type="text" class="form-control" id="line1" placeholder=""
                                    value="{{ $jobs->suburb }}">
                            </div>
                            <div class="col-md-6">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" id="line2" placeholder=""
                                    value="{{ $jobs->postal_code }}">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4>Contact Details</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="text" class="form-control" id="line1" placeholder=""
                                    value="{{ $jobs->email }}">
                            </div>
                            <div class="col-md-6">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" id="line2" placeholder=""
                                    value="{{ $jobs->mobile_no }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" class="form-control" id="line1" placeholder=""
                                    value="{{ $jobs->name }}">
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <h4>View Document</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">

                                <input type="file" class="form-control" id="line1"
                                    placeholder="{{ $jobs->image }}">
                            </div>

                        </div>


                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn"
                            style="background-color: #001f3f; color: white;">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
