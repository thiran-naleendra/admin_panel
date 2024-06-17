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
        .styled-table {
            border-spacing: 0 15px; /* Adds space between rows */
        }

        .styled-table thead {
            display: table-header-group;
        }

        .styled-table tbody {
            display: table-row-group;
        }
        .table thead th {
            padding-bottom: 0.94rem;
        }
        .table thead {
            padding-bottom: 0.94rem;
        }

        .responsive-table {
            margin-left: -2em;
            margin-right: 1.25em;
            li {
                border-radius: 4px;
                padding: 25px 30px;
                display: flex;
                justify-content: space-between;
                margin-bottom: 25px;
            }
            .table-header {
                background-color: #262D59;
                font-size: 14px;
                letter-spacing: 0.03em;
                color: white;
                text-align: center;
                font-weight: 500;
                line-height: 16.94px;
                font-family: 'Inter', sans-serif;
            }
            .table-row {
                background-color: #ffffff;
                box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
                text-align: center;
            }
            .col-1 {
                flex-basis: 10%;
            }
            .col-2 {
                flex-basis: 40%;
            }
            .col-3 {
                flex-basis: 25%;
            }
            .col-4 {
                flex-basis: 25%;
            }
            
            @media all and (max-width: 767px) {
                .table-header {
                display: none;
                }
                .table-row{
                
                }
                li {
                display: block;
                }
                .col {
                
                flex-basis: 100%;
                
                }
                .col {
                display: flex;
                padding: 10px 0;
                    &:before {
                        color: #6C7A89;
                        padding-right: 10px;
                        content: attr(data-label);
                        flex-basis: 50%;
                        text-align: right;
                    }
                }
            }
        }

        .status-Ongoing { color: #262D59; text-align: left;}
        .status-Confirmed { color: #F18866; text-align: left;}
        .status-Hold { color: #EB35C3; text-align: left;}
        .status-In-progress { color: #1FB2F2; text-align: left;}
        .status-Completed { color: #319F43; text-align: left;}
        .alignments { text-align: left; }
    </style>
    <br>
    <section class="content">
        <div class="container rounded bg-white mt-6">
            <div class="mt-1">
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
                            @foreach($statuses as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
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
            <div>
                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-1 alignments">Job Id</div>
                        <div class="col col-2 alignments">Status</div>
                        <div class="col col-2 alignments">Address</div>
                        <div class="col col-2">Schedule Date</div>
                        <div class="col col-2">Visit Date</div>
                        <div class="col col-2">Report ETA</div>
                        <div class="col col-1"></div>
                    </li>
                    @foreach ( $jobs as $jb )  
                    <li class="table-row" >
                        <a href="{{ route('view_request') }}"></a>
                        <div class="col col-1 alignments" data-label="Job Id">{{$jb->id}}</div>
                        <div class="col col-2 status-{{ $jb->status }}" data-label="Status">
                            @switch($jb->status)
                                @case('Ongoing')
                                    <i class="fas fa-spinner"></i>
                                    @break
                                @case('Confirmed')
                                    <i class="fas fa-check-circle"></i>
                                    @break
                                @case('Hold')
                                    <i class="fas fa-pause-circle"></i>
                                    @break
                                @case('In-progress')
                                    <i class="fas fa-hourglass-half"></i>
                                    @break
                                @case('Completed')
                                    <i class="fas fa-check-double"></i>
                                    @break
                            @endswitch
                            &ensp;{{ $jb->status }}
                        </div>
                        <div class="col col-2 alignments" data-label="Address">{{$jb->street_name}}</div>
                        <div class="col col-2" data-label="Schedule Date">{{$jb->site_visit_date}}</div>
                        <div class="col col-2" data-label="Visit Date">{{$jb->report_due_date}}</div>
                        <div class="col col-2" data-label="Report ETA">{{$jb->site_visit_date}}</div>
                        <div class="col col-1"><a href="{{ route('view_job_request', ['id' => $jb->id]) }}"><i class="fas fa-caret-right"></i></a></div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>
@endsection
