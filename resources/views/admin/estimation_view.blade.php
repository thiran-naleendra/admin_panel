@extends('admin.layouts.app')
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

        .editIcon {
        cursor: pointer; /* Change cursor to pointer on hover */
    }
    
    .editIcon:hover {
        color: blue; /* Change icon color on hover */
    }
                .deleteTcon {
        cursor: pointer; /* Change cursor to pointer on hover */
    }
    
    .deleteTcon:hover {
        color: rgb(237, 33, 33); /* Change icon color on hover */
    }

                .responsive-table {
                    margin-left: -2em;
                    margin-right: 1.25em;
                    li {
                        border-radius: 4px;
                        padding: 12px 25px;
                        display: flex;
                        justify-content: space-between;
                        margin-bottom: 13px;
                        transition: background-color 0.3s ease, box-shadow 0.3s ease;
            }

            li:hover {
                background-color: #f5f5f5; /* Change to your desired hover background color */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            }
            .table-header {
                background-color: #EA7831;
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

            .scrollable-table {
            overflow-x: auto;
            max-height: 500px; /* Adjust the max-height as per your requirement */
        }
    </style>
    <br>
    <section class="content">



        <div class="container rounded bg-white mt-6">
            <br>
            <div class="container rounded  mt-5">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="badge" style="font-size: 20px;  color: #262d59;">Estimation Request</label>
                        </div>
                        <br>
                        <div>
                            <div class="input-group mb-4">
                                <div class="input-group-append">
                                    <span class="input-group-text" style="border-radius: 8px 0 0 8px;"><i
                                            class="fas fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control col-lg-12" placeholder="Search Job Id.."
                                    style="border-radius:0 8px 8px 0;">

                            </div>
                            <div class="input-group-prepend">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <div class="scrollable-table">
                                        <ul class="responsive-table">
                                            @foreach ($estimation as $es)
                                            <li class="table-row">
                                                <div class="col col-1 alignments" data-label="Job Id">{{$es->job_id }}</div>
                                                <div class="col col-2 alignments" data-label="Address">{{ $es->location }}</div>
                                                <div class="col col-2" data-label="Schedule Date">{{ $es->email }}</div>
                                                <div class="col col-2" data-label="Visit Date">Mobile</div>
                                                <div class="col col-2" data-label="Visit Date">{{ $es->created_at }}</div>
                                                <div class="col col-1">
                                                    <i class="fas fa-pencil-alt editIcon"></i>
                                                </div>                        
                                                <div class="col col-1">
                                                    <i class="fas fa-trash deleteTcon"></i>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
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
