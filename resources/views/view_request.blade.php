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

    .tabcontent {
        display: none;
    }
</style>
<br>
<section class="content">
    <div class="container rounded bg-white mt-5"  >
        <div class="card card-primary">
            <div class="card-header"><h3 class="card-title">Make Request</h3></div>
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
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Add filed base on selected item</label>
                            <input type="text" class="form-control" id="job_item" placeholder="">
                        </div>           
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <label></label>
                            <select class="custom-select form-control-border" id="soil" placeholder="Soil Test">
                                <option>Value 1</option>
                                <option>Value 2</option>
                                <option>Value 3</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Add filed base on selected item</label>
                            <input type="text" class="form-control" id="soil_item" placeholder="">
                        </div> 
                    </div>                    
                </div>
                
                <div class="card-body">
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
</section>
@endsection