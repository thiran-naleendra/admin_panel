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
        .radio-button {
            background: #262D59 !important;
            width: 13px;
            height: 13px;
            opacity: 0; /* Makes the radio button invisible */
        }

        [type="radio"]:checked+label:after {
            background-color: #262D59;
            border: 2px solid #262D59;
            border-radius: 1em;
        }

        [type="text"]:checked+label:after {
            background-color: #E0E0E0;
            border-radius: 1em;
            border: 1px solid #E0E0E0
            box-shadow: 0px 1px 2px 0px #0000000D;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #EA7831 !important;
        }

        .radio-button:checked {
            background: #262D59 !important;
        } 
        .inter-style {
            font-family: 'Inter', sans-serif;
            font-size: 1.25rem;
            font-weight: 500;
            line-height: 1.875rem;
            text-align: left;
            color: #262D59;
        }

        .field-style {
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 400 !important;
            line-height: 1.5rem;
            text-align: left;
            color: #828282;
        }
    </style>
    <br>
    <section class="content">
        <div class="bg-white mt-5">
            <label class="badge"style="font-size: 24px;  color: #EA7831;">Job ID - {{ $jobs->id }}</label>
            <form action="{{ route('jobs_update', $jobs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf               
                <div class="card-body">
                    <h3 class="inter-style">Job Details</h3>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="field-style" for="job_type">Job Type</label>
                            <input type="text" class="form-control" id="job_type" name="job_type" value="{{ $jobs->job_type }}">
                        </div>
                        <div class="col-md-6">
                            <label class="field-style" for="job_category">Job Category</label>
                            <input type="text" class="form-control" id="job_category" name="job_category" value="{{ $jobs->job_category }}">
                        </div>
                    </div>
                    <h3 class="inter-style">Site Visit Date</h3>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="field-style" for="reference">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" value="{{ $jobs->reference }}">
                        </div>
                        <div class="col-md-6">
                            <label class="field-style" for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $jobs->description }}">
                        </div>
                    </div>
                </div>                
            
                <div class="card-body">
                    <h3 class="inter-style">Location Details</h3>
                    <div class="row mt-3 justify-content-evenly">
                        <div class="col-md-4">
                            <label class="field-style">Lot</label>
                            <input type="text" class="form-control" id="lot" name="lot" value="{{ $jobs -> lot }}">
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Street Number</label>
                            <input type="text" class="form-control" id="street_no" name="street_no" value="{{ $jobs -> street_no }}">
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Street name</label>
                            <input type="text" class="form-control" id="street_name" name="street_name" value="{{ $jobs -> street_name }}">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-evenly">
                        <div class="col-md-4">
                            <label class="field-style">Suburb</label>
                            <input type="text" class="form-control" id="suburb" name="suburb" value="{{ $jobs -> suburb }}">
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="">
                        </div>
                    </div>
                </div>
            
                <div class="card-body" id="demolished_test_div">
                    <h3 class="inter-style">Additional Information</h3>
                    <div class="row mt-3">
                        <div class="col-md-4"><label class="field-style">FOOTING PROBE</label></div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="footing_probe1" name="footing_probe" value="Y">
                                <label for="footing_probe1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="footing_probe2" name="footing_probe" value="N" checked>
                                <label for="footing_probe2" class="custom-control-label">N</label>
                            </div>
                        </div>
            
                        <div class="col-md-4"><label class="field-style">BAL</label></div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="bal1" name="bal" value="Y">
                                <label for="bal1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="bal2" name="bal" value="N" checked>
                                <label for="bal2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4"><label class="field-style">WIND RATING</label></div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="wind_rating1" name="wind_rating" value="Y">
                                <label for="wind_rating1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="wind_rating2" name="wind_rating" value="N" checked>
                                <label for="wind_rating2" class="custom-control-label">N</label>
                            </div>
                        </div>
            
                        <div class="col-md-4"><label class="field-style">LOCKED GATES</label></div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="locked_gates1" name="locked_gates" value="Y">
                                <label for="locked_gates1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="locked_gates2" name="locked_gates" value="N" checked>
                                <label for="locked_gates2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4"><label class="field-style">EXISTING HOUSE ON SITE</label></div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="house_on_site1" name="house_on_site" value="Y">
                                <label for="house_on_site1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="house_on_site2" name="house_on_site" value="N" checked>
                                <label for="house_on_site2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4"><label class="field-style">SUBDIVISION UNDER CONSTRUCTION</label></div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="sub_un_con1" name="sub_un_con" value="Y">
                                <label for="sub_un_con1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input radio-button" type="radio" id="sub_un_con2" name="sub_un_con" value="N" checked>
                                <label for="sub_un_con2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <h4>Update Status</h4>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="status">Update Status</label>
                            <select class="form-control" id="status" name="status" aria-label="Default select example">
                                <option value="" disabled selected>Update Status</option>
                                <option value="1" {{ $jobs->status == '1' ? 'selected' : '' }}>One</option>
                                <option value="2" {{ $jobs->status == '2' ? 'selected' : '' }}>Two</option>
                                <option value="3" {{ $jobs->status == '3' ? 'selected' : '' }}>Three</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="visit_date">Visit Date</label>
                            <input type="date" class="form-control" id="visit_date" name="visit_date" value="{{ $jobs->visit_date }}">
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <h3 class="inter-style">Contact Details</h3>
                    <div class="row mt-3 justify-content-evenly">
                        <div class="col-md-4">
                            <label class="field-style">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="">
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <h4>View Document</h4>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="file_input">Upload Document</label>
                            <input type="file" class="form-control" id="file_input" name="file_input">
                            <!-- Add a link to view the current document if it exists -->
                            @if ($jobs->image)
                                <a href="{{ asset('storage/' . $jobs->image) }}" target="_blank">View current document</a>
                            @endif
                        </div>
                    </div>
                </div>
            
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn" style="background-color: #001f3f; color: white;">Update</button>
                </div>
            </form>
        </div>
    </section>
@endsection
