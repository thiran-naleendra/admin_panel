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
        <div class="container rounded bg-white mt-5">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90">
                        <span class="font-weight-bold">John Doe</span>
                        <span class="text-black-50">john_doe12@bbb.com</span>
                        <span>United States</span>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="tab d-flex justify-content-between align-items-center mb-3">
                            <button class="btn btn-primary tablinks" onclick="openCity(event, 'view')">View Profile</button>
                            <button class="btn btn-primary tablinks" onclick="openCity(event, 'edit')">Edit Profile</button>
                        </div>
                        <div id="view" class="tabcontent">
                        <div class="row mt-3">
                                <div class="col-md-3"><label>Name</label></div>
                                <div class="col-md-9">John Doe</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Username</label></div>
                                <div class="col-md-9">John Doe</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Email</label></div>
                                <div class="col-md-9">john_doe12@bbb.com</div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Links</label></div>
                                <div class="col-md-9"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Bio</label></div>
                                <div class="col-md-9"></div>
                            </div>
                        </div>
                        <div id="edit" class="tabcontent">
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Name</label></div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Name" >
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Username</label></div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Email</label></div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Links</label></div>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="2" placeholder="Links"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3"><label>Bio</label></div>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="2" placeholder="Bio"></textarea>
                                </div>
                            </div>
                            <div class="mt-5 text-right">
                                <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
    </section>
@endsection
