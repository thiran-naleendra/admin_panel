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
    </style>
    <br>
    <section class="content">



        <div class="container rounded bg-white mt-6">
            <br>
            <div class="container rounded  mt-5">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="badge" style="font-size: 24px;  color: #EA7831;">Estimation Request</label>

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


                                    @foreach ($estimation as $es)
                                    <div class="card">
                                        <div class="container">
                                            <div class="row">
                                              <div class="col-sm">
                                                <h3>{{ $es->job_id }}</h3>
                                                <br>
                                                <h3>{{ $es->location }}</h3>
                                              </div>
                                              <div class="col-sm">
                                               <h3>{{ $es->email }}</h3>
                                               <br>
                                               <h3>mobile</h3>
                                              </div>
                                              <div class="col-sm">
                                                <h3>{{ $es->created_at }}</h3>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
