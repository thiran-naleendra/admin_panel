@extends('layouts.app')
@section('content')
<style>
    body {
        background: #BA68C8;
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
    <div class="container rounded bg-white mt-5"  >
        <div class="card card-primary">
            <div class="card-header" style="background-color:  #262D59"><h3 class="card-title">Make Request</h3></div>
            <form>
                <div class="card-body">
                    <h4>Address</h4>
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
                            <input type="text" class="form-control" id="suburb" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label>Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" placeholder="">
                        </div>     
                    </div>                    
                </div>

                <div class="card-body">
                    <h4>Contact Details</h4>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" id="phone_no" placeholder="">
                        </div>              
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                    </div>                    
                </div>

                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <label></label>
                            <select class="custom-select form-control-border" id="job" placeholder="Select Job">
                                @foreach ($job_types as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>          
                    </div>

                    <div class="row mt-3 soil_test" id="soil_test_div">
                        <div class="col-md-6 form-group">
                            <label></label>
                            <select class="custom-select form-control-border" id="soil_test" placeholder="Soil Test">
                                @foreach ($soil_test as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3" id="survey_div">
                        <div class="col-md-6 form-group">
                            <label></label>
                            <select class="custom-select form-control-border" id="surveys" placeholder="Select Job">
                                @foreach ($surveys as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>          
                    </div>              

                    <div class="row mt-3" id="other_jobs_div">
                        <div class="col-md-6 form-group">
                            <label></label>
                            <select class="custom-select form-control-border" id="other_jobs" placeholder="Select Job">
                                @foreach ($other_jobs as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>          
                    </div>              

                    <div id="feature_survey_div">                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select class="custom-select form-control-border" id="feature_surveys" placeholder="Select Job">
                                    @foreach ($feature_surveys as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                <label for="customCheckbox1" class="custom-control-label">Required AHD</label>
                            </div>              
                        </div>        
                    </div>

                    <div class="row mt-3" id="ahd_ffl_div">
                        <div class="col-md-6 form-group">
                            <label></label>
                            <select class="custom-select form-control-border" id="ahd_ffl" placeholder="Select Job">
                                @foreach ($ahd_ffl as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>          
                    </div> 

                </div>
                
                <div class="card-body" id="demolished_test_div">
                    <div class="row mt-3">
                        <div class="col-md-2"><label>FOOTING PROBE</label></div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="footing_probe1" name="footing_probe">
                                <label for="footing_probe1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-2">                            
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="footing_probe2" name="footing_probe" checked>
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
                              <input class="custom-control-input" type="radio" id="wind_rating2" name="wind_rating" checked>
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
                              <input class="custom-control-input" type="radio" id="bal2" name="bal" checked>
                              <label for="bal2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2"><label>EXISTING HOUSE ON SITE</label></div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="house_on_site1" name="house_on_site">
                                <label for="house_on_site1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-2">                            
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="house_on_site2" name="house_on_site" checked>
                              <label for="house_on_site2" class="custom-control-label">N</label>
                            </div>
                        </div>

                        <div class="col-md-2"><label>LOCKED GATES</label></div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="locked_gates1" name="locked_gates">
                                <label for="locked_gates1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-2">                            
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="locked_gates2" name="locked_gates" checked>
                              <label for="locked_gates2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-2"><label>SUBDIVISION UNDER CONSTRUCTION</label></div>
                        <div class="col-md-2">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="sub_un_con1" name="sub_un_con">
                                <label for="sub_un_con1" class="custom-control-label">Y</label>
                            </div>
                        </div>
                        <div class="col-md-2">                            
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="sub_un_con2" name="sub_un_con" checked>
                              <label for="sub_un_con2" class="custom-control-label">N</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label></label>
                        <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Upload Documents</h4>
                    <div class="row mt-3">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>                    
                </div>                    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const jobSelect = document.getElementById('job');
            const soilTestSelect = document.getElementById('soil_test');
            const surveysSelect = document.getElementById('surveys');
            const soilTestDiv = document.getElementById('soil_test_div');
            const surveyDiv = document.getElementById('survey_div');
            const otherJobsDiv = document.getElementById('other_jobs_div');
            const preDemolishedDiv = document.getElementById('demolished_test_div');
            const featureSurveyDiv = document.getElementById('feature_survey_div');
            const ahdFflDiv = document.getElementById('ahd_ffl_div');

            jobSelect.addEventListener('change', function () {
                switch (jobSelect.value) {
                    case 'ST':
                        soilTestDiv.style.display = 'block';
                        surveyDiv.style.display = 'none';
                        break;
                    case 'SU':
                        soilTestDiv.style.display = 'none';
                        surveyDiv.style.display = 'block';
                        break;
                    case 'OJ':
                        soilTestDiv.style.display = 'none';
                        surveyDiv.style.display = 'none';
                        otherJobsDiv.style.display = 'block';
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

            soilTestSelect.addEventListener('change', function () {
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

            surveysSelect.addEventListener('change', function () {
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