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
    </style>
    <section class="content">
        <br>
        <div class="container rounded  mt-5">
            <div class="card card-primary">
                <div class="card-body">
                    <label>Active Issues</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="nav-icon fas fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search Job Id..">
                    </div>
                </div>
            </div>

        </div>
        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'Tab1')">All Jobs</button>
            <button class="tablinks" onclick="openTab(event, 'Tab2')">Ongoing</button>
            <button class="tablinks" onclick="openTab(event, 'Tab3')">Complted</button>
        </div>

        <!-- Tab content -->
        <div id="Tab1" class="tabcontent active">
            {{-- content --}}
            <div class="">
                <div class="card">
                    <div class="card-header" style="background-color: #ffffff;">
                        <h2 style="color: #ea7831;">Jobs</h2>
                    </div>
                    <br>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead style="background-color: #EA7831;">
                                <tr>
                                    <th style="width: 10px">Job ID</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                    <th>Shedule Date</th>
                                    <th>Deliverables ETA</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>231546</td>
                                    <td><span class="badge badge-pill badge-success">ongoing</span></td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>
                                <tr>
                                    <td>231546</td>
                                    <td><span class="badge badge-pill badge-warning">Warning</span></td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            {{-- end content --}}
        </div>

        <div id="Tab2" class="tabcontent">
            {{-- content --}}
            <div class="">
                <div class="card">
                    <div class="card-header" style="background-color: #ffffff;">
                        <h2 style="color: #ea7831;">Jobs</h2>
                    </div>
                    <br>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead style="background-color: #ea7831;">
                                <tr>
                                    <th style="width: 10px">Job ID</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                    <th>Shedule Date</th>
                                    <th>Deliverables ETA</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>231546</td>
                                    <td>ongoing</td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>
                                <tr>
                                    <td>231546</td>
                                    <td>ongoing</td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>
                                <tr>
                                    <td>231546</td>
                                    <td>ongoing</td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            {{-- end content --}}
        </div>

        <div id="Tab3" class="tabcontent">
            {{-- content --}}
            <div class="">
                <div class="card">
                    <div class="card-header" style="background-color: #ffffff;">
                        <h2 style="color: #ea7831;">Jobs</h2>
                    </div>
                    <br>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead style="background-color: #ea7831;">
                                <tr>
                                    <th style="width: 10px">Job ID</th>
                                    <th>Status</th>
                                    <th>Address</th>
                                    <th>Shedule Date</th>
                                    <th>Deliverables ETA</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>231546</td>
                                    <td>ongoing</td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>
                                <tr>
                                    <td>231546</td>
                                    <td>ongoing</td>
                                    <td>
                                        Lorem Ipsum is
                                    </td>
                                    <td>21-04-2024</td>
                                    <td>21-04-2024</td>
                                    <td>Lorem Ipsum is </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            {{-- end content --}}
        </div>
    </section>
    <script>
        function openTab(evt, TabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(TabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection
