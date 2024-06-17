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
                                <label for="job_type">Job Type</label>
                                <input type="text" class="form-control" id="job_type" name="job_type" value="{{ $jobs->job_type }}">
                            </div>
                            <div class="col-md-6">
                                <label for="job_category">Job Category</label>
                                <input type="text" class="form-control" id="job_category" name="job_category" value="{{ $jobs->job_category }}">
                            </div>
                        </div>
                        <h4>Site Visit Date</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="reference">Reference</label>
                                <input type="text" class="form-control" id="reference" name="reference" value="{{ $jobs->reference }}">
                            </div>
                            <div class="col-md-6">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="{{ $jobs->description }}">
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <h4>Additional Information</h4>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>FOOTING PROBE</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="footing_probe1" name="footing_probe" value="Y" {{ $jobs->footing_probe == 'Y' ? 'checked' : '' }}>
                                    <label for="footing_probe1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="footing_probe2" name="footing_probe" value="N" {{ $jobs->footing_probe == 'N' ? 'checked' : '' }}>
                                    <label for="footing_probe2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>WIND RATING</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="wind_rating1" name="wind_rating" value="Y" {{ $jobs->wind_rating == 'Y' ? 'checked' : '' }}>
                                    <label for="wind_rating1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="wind_rating2" name="wind_rating" value="N" {{ $jobs->wind_rating == 'N' ? 'checked' : '' }}>
                                    <label for="wind_rating2" class="custom-control-label">N</label>
                                </div>
                            </div>
                            <div class="col-md-2"><label>BAL</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="bal1" name="bal" value="Y" {{ $jobs->bal == 'Y' ? 'checked' : '' }}>
                                    <label for="bal1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="bal2" name="bal" value="N" {{ $jobs->bal == 'N' ? 'checked' : '' }}>
                                    <label for="bal2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>EXISTING HOUSE ON SITE</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="house_on_site1" name="house_on_site" value="Y" {{ $jobs->house_on_site == 'Y' ? 'checked' : '' }}>
                                    <label for="house_on_site1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="house_on_site2" name="house_on_site" value="N" {{ $jobs->house_on_site == 'N' ? 'checked' : '' }}>
                                    <label for="house_on_site2" class="custom-control-label">N</label>
                                </div>
                            </div>
                            <div class="col-md-2"><label>LOCKED GATES</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="locked_gates1" name="locked_gates" value="Y" {{ $jobs->locked_gates == 'Y' ? 'checked' : '' }}>
                                    <label for="locked_gates1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="locked_gates2" name="locked_gates" value="N" {{ $jobs->locked_gates == 'N' ? 'checked' : '' }}>
                                    <label for="locked_gates2" class="custom-control-label">N</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-2"><label>SUBDIVISION UNDER CONSTRUCTION</label></div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="sub_un_con1" name="sub_un_con" value="Y" {{ $jobs->sub_un_con == 'Y' ? 'checked' : '' }}>
                                    <label for="sub_un_con1" class="custom-control-label">Y</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="sub_un_con2" name="sub_un_con" value="N" {{ $jobs->sub_un_con == 'N' ? 'checked' : '' }}>
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
                        <h4>Contact Details</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="line1">Line 1</label>
                                <input type="text" class="form-control" id="line1" name="line1" value="{{ $jobs->line1 }}">
                            </div>
                            <div class="col-md-6">
                                <label for="line2">Line 2</label>
                                <input type="text" class="form-control" id="line2" name="line2" value="{{ $jobs->line2 }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="suburb">Suburb</label>
                                <input type="text" class="form-control" id="suburb" name="suburb" value="{{ $jobs->suburb }}">
                            </div>
                            <div class="col-md-6">
                                <label for="postal_code">Postal Code</label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $jobs->postal_code }}">
                            </div>
                        </div>
                    </div>
                
                    <div class="card-body">
                        <h4>Contact Details</h4>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $jobs->email }}">
                            </div>
                            <div class="col-md-6">
                                <label for="mobile_no">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ $jobs->mobile_no }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $jobs->name }}">
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
        </div>
    </section>
@endsection
