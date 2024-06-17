@extends('layouts.app')
@section('content')
    <style>
        /* Style the tab */
        .tab {
            background-color: #ffffff;
            border: 1px solid #ffffff;
            overflow: hidden;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: #ffffff;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: orange;
            text-decoration-color: #ea7831ed;
            /* Change the background color to orange on hover */

        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ffffff;
            text-decoration: underline;
            text-decoration-color: #ea7831ed;
        }

        button.selected {
            background-color: #ffffff;

        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ffffff;
            border-top: none;
        }

        .tabcontent.active {
            display: block;
        }

        .dt-length {
            margin-left: 2em !important;
        }

        .dt-info {
            margin-left: 2em !important;
        }

        .heading-class{
            font-family: 'Inter', sans-serif;
            font-size: 2.5rem;
            font-weight: 700;
            line-height: 1.85rem;
            text-align: left;
            color: #EA7831;
            margin-bottom: -3rem;
        }
    </style>
    <br>
    <section class="content">
        <div class="container rounded bg-white mt-6">
            <div class="mt-5">
                <div>
                    <div class="card-body">
                        <div class="heading-class">Jobs</div>                  
                        <div class="position-relative" style="height: 50px;">
                            <a href="{{ route('create_request') }}" class="btn btn-warning d-flex align-items-center justify-content-center position-absolute end-0" style="width: 20%; background-color:#262D59; color:white; top: 10px; right: 10px; height: 50px; border: none; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);">
                                <i class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 8px;"></i>
                                <strong>Add New</strong>
                            </a>
                        </div>
                        <br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="border-radius: 8px 0 0 8px;"><i class="nav-icon fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Job Id.." style="border-radius:0 8px 8px 0;">
                            &ensp;
                            <select class="form-control" aria-label="Default select example" style="border-radius: 8px;">
                                <option selected>All Status</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            &ensp;
                            <select class="form-control" aria-label="Default select example" style="border-radius: 8px;">
                                <option selected>Job Type</option>
                                <option value="1">Survey</option>
                                <option value="2">Soil Test</option>
                                <option value="3">Footing Probe</option>
                            </select>
                            &ensp;
                            <div class="row">
                                <div class="col">
                                   
                                    <input type="date" class="form-control" id="datepicker" style="border-radius: 8px;">
                                </div>
                                <label for="inputEmail4">To</label>
                                <div class="col">
                                    <input type="date" class="form-control" id="datepicker" style="border-radius: 8px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div>
                                <div class="card-body">

                                    <div class="table-responsive" style="border-radius: 8px;">
                                        <table class="table table-hover">
                                            <thead
                                                style="background-color: #EA7831; color: white; ">
                                                <tr>
                                                    <th style="padding-bottom: 20px; ">Job ID</th>
                                                    <th style="padding-bottom: 20px;">Status</th>
                                                    <th style="padding-bottom: 20px;">Address</th>
                                                    <th style="padding-bottom: 20px;">Schedule Date</th>
                                                    <th style="padding-bottom: 20px;">Visit Date</th>
                                                    <th style="padding-bottom: 20px;">Report ETA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $jobs as $jb )
                                                        
                                                   
                                                    <tr style="">
                                                        <td style="border-radius: 10px 0 0 10px; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;">{{$jb->id}}</td>
                                                        <td style="color: rgb(0, 0, 0);">
                                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="auto" viewBox="0 0 24 24">
                                                                <path fill="black" d="M12,2C6.477,2,2,6.477,2,12c0,5.523,4.477,10,10,10s10-4.477,10-10C22,6.477,17.523,2,12,2z M15.293,16.707L11,12.414V6h2v5.586l3.707,3.707L15.293,16.707z"></path>
                                                            </svg>&ensp;{{$jb->status}}
                                                        </td>
                                                        
                                                        <td style="padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;">{{$jb->street_name}}</td>
                                                        <td style="padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;">{{$jb->site_visit_date}}</td>
                                                        <td style="padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;">{{$jb->report_due_date}}</td>
                                                        <td style="border-radius: 0 0px 0px 0; padding-top: 10px; padding-bottom: 10px; margin-top: 10px; margin-bottom: 10px;">{{$jb->site_visit_date}}</td>
                                                        
                                                    </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>

                                        <span>Show 1 to 10 of 20 results</span>
                                        <nav aria-label="Page navigation example" class="d-flex justify-content-end">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">.....</a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">8</a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">9</a></li>
                                                <li class="page-item"><a class="page-link" href="#"
                                                        style="color: #262D59;">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
