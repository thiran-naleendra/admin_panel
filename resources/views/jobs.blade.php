@extends('layouts.app')
@section('content')
    <section class="content">
        <br>
        <div class="container rounded  mt-5">
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
                <!-- /.card -->


            </div>
        </div>
    </section>
@endsection
