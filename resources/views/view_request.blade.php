@extends('layouts.app')
@section('content')
    <style>
        body {
            background: #ffffff;
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

        .btn-class {
            width: 28.4375rem;
            height: 4.9375rem;
            /* position: absolute; /* top and left properties require absolute or relative positioning */
            /* top: 98.375rem; */
            /* left: 37.75rem; */
            padding: 1rem 10rem 1rem 10rem;
            gap: 0; /* For flexbox or grid layout gaps, otherwise this can be omitted */
            border-radius: 0.35rem;
            background: #262D59;
            box-shadow: 0 0.25rem 0.25rem 0 #00000040;
            transform: rotate(-0deg); /* Corrects the angle property */
            font-size: 1rem;
            font-weight: 700 !important;
            font-family: 'Inter', sans-serif;
            margin-bottom: 1rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8;
        }

        .content {
            margin-top: -3rem;
        }        

        .heading-class {
            font-family: 'Inter', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 2.25rem;
            letter-spacing: -0.01em;
            text-align: left;
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

    </style>
    <br>
    <section class="content">
        <div class="card card-primary mt-5">
            <label class="badge heading-class" style="font-size: 24px;  color: #EA7831;">View Request</label>
            
            <form>
                @csrf
                <div class="card-body">
                    <h3 class="inter-style">Location Details</h3>
                    <div class="row mt-3 justify-content-evenly">
                        <div class="col-md-4">
                            <label class="field-style">Lot</label>
                            <div>{{ $jobs -> lot }}</div>
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Street Number</label>
                            <div>{{ $jobs -> street_no }}</div>
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Street name</label>
                            <div>{{ $jobs -> street_name }}</div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-evenly">
                        <div class="col-md-4">
                            <label class="field-style">Suburb</label>
                            <div>{{ $jobs -> suburb }}</div>
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Postal Code</label>
                            <div>{{ $jobs -> postal_code }}</div>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <h3 class="inter-style">Contact Details</h3>
                    <div class="row mt-3 justify-content-evenly">
                        <div class="col-md-4">
                            <label class="field-style">Email</label>
                            <div>{{ $jobs -> email }}</div>
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Mobile Number</label>
                            <div>{{ $jobs -> mobile_no }}</div>
                        </div>
                        <div class="col-md-4">
                            <label class="field-style">Name</label>
                            <div>{{ $jobs -> name }}</div>
                        </div>
                    </div>
                </div>
            
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label class="field-style">Request Type</label>
                            <div>{{ $request_types[$jobs -> job] }}</div>
                        </div>
                        
                        <div class="col-md-4">
                            <label class="field-style">Sub Category</label>
                            <div>{{ $soil_test[$jobs -> soil_test] }}</div>
                        </div>

                        <div class="col-md-4">
                            <label class="field-style">Job Type</label>
                            <div>{{ $surveys[$jobs -> surveys] }}</div>
                        </div>
                    </div>
            
                    <div class="row mt-3" id="survey_div">
                        <div class="col-md-4">
                            <label class="field-style">Other Jobs</label>
                            <div>{{ $other_jobs[$jobs -> other_jobs] }}</div>
                        </div>
                    </div>
                    <div class="row mt-3" id="survey_div">
                        <div class="col-md-4">
                            <label class="field-style">Feature Survey</label>
                            <div>{{ $feature_surveys[$jobs -> feature_surveys] }}</div>
                        </div>

                        <div class="col-md-4">
                            <input class="custom-control-input" type="checkbox" id="required_ahd" name="required_ahd" value="{{$jobs -> required_ahd}}">
                            <label for="required_ahd" class="custom-control-label">Required AHD</label>
                        </div>

                        <div class="col-md-4">
                            <label class="field-style">AHD - FFL indicator level to Plumbing riser</label>
                            <div>{{ $ahd_ffl[$jobs -> ahd_ffl] }}</div>
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
                    <div class="form-group">
                        <label class="field-style">Description</label>
                        <div>{{ $jobs -> description }}</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label class="field-style">Reference</label>
                        <div>{{ $jobs -> reference }}</div>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="inter-style">Upload Documents</h3>
                    <div class="row mt-3">
                        <label class="field-style" for="file_input">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_input" name="file_input" onchange="updateFileName()">
                                <label class="custom-file-label field-style" for="file_input" id="fileLabel">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>                
        </div>
    </section>
@endsection
