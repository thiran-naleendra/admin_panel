@extends('layouts.app')
@section('content')
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
        </div>
    </section>
@endsection
