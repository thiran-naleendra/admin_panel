@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    



    <section class="content">
        <div class="container rounded bg-white mt-5">
            <div class="card card-primary">
               
            </div>
            <br>
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead style="background-color: #EA7831; color:white;">
                        <tr>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hitesh Chauhan</td>
                            <td>0712044440</td>
                            <td>Admin</td>
                            <td style="text-align:center;">
                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">Edit</button>
                              </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
                
            </div>

        </div>
    </section>
  
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButtons = document.querySelectorAll('.btn-success');
    
            editButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
    
                    Swal.fire({
                        title: 'Create Customer',
                        html: `
                            <style>
                                .swal2-container .swal2-html-container {
                                    text-align: left;
                                }
                                .swal2-container .form-control {
                                    width: 100%;
                                }
                            </style>
                            <form id="create-customer-form" class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="col-md-6">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="position">
                                </div>
                                <div class="col-md-6">
                                    <br>
                                </div>
                            </form>
                        `,
                        showCancelButton: false,
                        confirmButtonText: 'Create Customer',
                        preConfirm: () => {
                            const name = Swal.getPopup().querySelector('#name').value;
                            const mobileNumber = Swal.getPopup().querySelector('#mobileNumber').value;
                            const email = Swal.getPopup().querySelector('#email').value;
                            const password = Swal.getPopup().querySelector('#password').value;
                            const position = Swal.getPopup().querySelector('#position').value;
                            if (!name || !mobileNumber || !email || !password || !position) {
                                Swal.showValidationMessage('Please fill out all fields');
                                return false;
                            }
                            return {
                                name: name,
                                mobileNumber: mobileNumber,
                                email: email,
                                password: password,
                                position: position
                            };
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Handle the form submission here
                            console.log('Form data:', result.value);
                        }
                    });
                });
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
@endsection
