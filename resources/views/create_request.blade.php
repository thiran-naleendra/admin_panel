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

        #soil_test_div {
            display: none;
        }

        #survey_div {
            display: none;
        }

        #other_jobs_div {
            display: none;
        }

        #demolished_test_div {
            display: none;
        }

        #feature_survey_div {
            display: none;
        }

        #ahd_ffl_div {
            display: none;
        }

    </style>
    <br>
    <section class="content">
        <div>
            <div class="card card-primary mt-5">
                <label class="badge heading-class" style="font-size: 24px;  color: #EA7831;">Make Request</label>
                
                <form action="{{ route('create_req') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="inter-style">Location Details</h3>
                        <div class="row mt-3 justify-content-evenly">
                            <div class="col-md-4">
                                <label class="field-style">Lot</label>
                                <input type="text" class="form-control" id="lot" name="lot" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label class="field-style">Street Number</label>
                                <input type="text" class="form-control" id="street_no" name="street_no" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label class="field-style">Street name</label>
                                <input type="text" class="form-control" id="street_name" name="street_name" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-evenly">
                            <div class="col-md-4">
                                <label class="field-style">Suburb</label>
                                <input type="text" class="form-control" id="suburb" name="suburb" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label class="field-style">Postal Code</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="">
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
                        <div class="row mt-3">
                            <div class="col-md-6 form-group">
                                <label class="field-style">Select Request Type</label>
                                <select class="custom-select form-control-border" id="job" name="job">
                                    @foreach ($request_types as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                
                        <div class="row mt-3 soil_test" id="soil_test_div">
                            <div class="col-md-6 form-group">
                                <label class="field-style">Select Sub Category</label>
                                <select class="custom-select form-control-border" id="soil_test" name="soil_test">
                                    @foreach ($soil_test as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                
                        <div class="row mt-3" id="survey_div">
                            <div class="col-md-6 form-group">
                                <label class="field-style">Select Job Type</label>
                                <select class="custom-select form-control-border" id="surveys" name="surveys">
                                    @foreach ($surveys as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                
                        <div class="row mt-3" id="other_jobs_div">
                            <div class="col-md-6 form-group">
                                <label class="field-style">Other Jobs</label>
                                <select class="custom-select form-control-border" id="other_jobs" name="other_jobs">
                                    @foreach ($other_jobs as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                
                        <div id="feature_survey_div">
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="field-style">Select Feature Survey</label>
                                    <select class="custom-select form-control-border" id="feature_surveys" name="feature_surveys">
                                        @foreach ($feature_surveys as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <input class="custom-control-input" type="checkbox" id="required_ahd" name="required_ahd" value="1">
                                    <label for="required_ahd" class="custom-control-label">Required AHD</label>
                                </div>
                            </div>
                        </div>
                
                        <div class="row mt-3" id="ahd_ffl_div">
                            <div class="col-md-6 form-group">
                                <label class="field-style">Select AHD - FFL indicator level to Plumbing riser</label>
                                <select class="custom-select form-control-border" id="ahd_ffl" name="ahd_ffl">
                                    @foreach ($ahd_ffl as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
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
                                    <input class="custom-control-input radio-button" type="radio" id="footing_probe2" name="footing_probe" value="N">
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
                                    <input class="custom-control-input radio-button" type="radio" id="bal2" name="bal" value="N">
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
                                    <input class="custom-control-input radio-button" type="radio" id="wind_rating2" name="wind_rating" value="N">
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
                                    <input class="custom-control-input radio-button" type="radio" id="locked_gates2" name="locked_gates" value="N">
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
                                    <input class="custom-control-input radio-button" type="radio" id="house_on_site2" name="house_on_site" value="N">
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
                                    <input class="custom-control-input radio-button" type="radio" id="sub_un_con2" name="sub_un_con" value="N">
                                    <label for="sub_un_con2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                    <div class="card-body">
                        <div class="form-group">
                            <label class="field-style">Description</label>
                            <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="field-style">Reference</label>
                            <input type="text" class="form-control" id="reference" name="reference" placeholder="">
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
                    <div class="card-body" style="text-align: center">
                        <button type="submit" class="btn btn-primary btn-lg btn-class" style="background-color: #262D59; color: white;">
                            Submit
                        </button>
                    </div>
                </form>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    @if(session('success'))
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: "{{ session('success') }}",
                           
                            showConfirmButton: false
                        });
                    @endif
            
                    @if(session('error'))
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: "{{ session('error') }}",
                           
                            showConfirmButton: false
                        });
                    @endif
                </script>
                
                
            </div>
        </div>
        <script>
            document.querySelectorAll('.radio-button').forEach(radio => {
                radio.addEventListener('click', function() {
                    if (this.checked) {
                        if (this.getAttribute('data-clicked') === 'true') {
                            this.checked = false;
                            this.setAttribute('data-clicked', 'false');
                        } else {
                            this.setAttribute('data-clicked', 'true');
                        }
                    } else {
                        this.setAttribute('data-clicked', 'false');
                    }
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const jobSelect = document.getElementById('job');
                const soilTestSelect = document.getElementById('soil_test');
                const surveysSelect = document.getElementById('surveys');
                const soilTestDiv = document.getElementById('soil_test_div');
                const surveyDiv = document.getElementById('survey_div');
                const otherJobsDiv = document.getElementById('other_jobs_div');
                const preDemolishedDiv = document.getElementById('demolished_test_div');
                const featureSurveyDiv = document.getElementById('feature_survey_div');
                const ahdFflDiv = document.getElementById('ahd_ffl_div');

                // function resetAndHide(selectElement, divElement) {
                //     selectElement.selectedIndex = 0;
                //     // divElement.style.display = 'none';
                // }
                jobSelect.addEventListener('change', function() {
                    // resetAndHide(surveysSelect, soilTestDiv);
                    // resetAndHide(surveysSelect, surveyDiv);
                    // resetAndHide(otherJobsSelect, otherJobsDiv);
                    // preDemolishedDiv.style.display = 'none';
                    // featureSurveyDiv.style.display = 'none';
                    // ahdFflDiv.style.display = 'none';
                    switch (jobSelect.value) {
                        case 'ST':
                            soilTestDiv.style.display = 'block';
                            surveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'none';
                            break;
                        case 'SU':
                            soilTestDiv.style.display = 'none';
                            surveyDiv.style.display = 'block';
                            break;
                        case 'OJ':
                            soilTestDiv.style.display = 'none';
                            surveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'block';
                            preDemolishedDiv.style.display = 'none';
                            break;
                        case 'IN':
                            soilTestDiv.style.display = 'none';
                            surveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'none';
                            break;
                        default:
                            soilTestDiv.style.display = 'none';
                            surveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'none';
                            ahdFflDiv.style.display = 'none';
                            break;
                    }
                });

                soilTestSelect.addEventListener('change', function() {
                    switch (soilTestSelect.value) {
                        case 'PRDT':
                        case 'PODT':
                            preDemolishedDiv.style.display = 'block';
                            break;
                        case 'FP':
                            preDemolishedDiv.style.display = 'none';
                            break;
                        case 'OJ':
                            preDemolishedDiv.style.display = 'none';
                            break;
                        default:
                            preDemolishedDiv.style.display = 'none';
                            ahdFflDiv.style.display = 'none';
                            break;
                    }
                });

                surveysSelect.addEventListener('change', function() {
                    switch (surveysSelect.value) {
                        case 'FS':
                            featureSurveyDiv.style.display = 'block';
                            otherJobsDiv.style.display = 'none';
                            ahdFflDiv.style.display = 'none';
                            break;
                        case 'AHD':
                            featureSurveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'none';
                            ahdFflDiv.style.display = 'block';
                            break;
                        case 'RE':
                            featureSurveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'none';
                            ahdFflDiv.style.display = 'none';
                            break;
                        default:
                            featureSurveyDiv.style.display = 'none';
                            otherJobsDiv.style.display = 'none';
                            ahdFflDiv.style.display = 'none';
                            break;
                    }
                });
            });
        </script>
    </section>
@endsection
