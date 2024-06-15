@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">




    <section class="content">
        <div class="container rounded bg-white mt-5">
            <div class="card card-primary">

            </div>
            <br>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#customerModal">Add Customer</button>



            <!-- The Modal -->
            <div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="customerModalLabel">Register Customer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="customerForm" action="{{ route('create_user') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobileno">Mobile No</label>
                                    <input type="text" class="form-control" id="mobileno" name="mobile_no" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" required>
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" id="position" name="position" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>






            <div class="table-responsive">
                <table class="table table-hover">
                    <thead style="background-color: #EA7831; color:white;">
                        <tr>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $us)

                       
                        <tr>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->mobile_no }}</td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->position }}</td>
                            <td style="text-align:center;">
                                <button class="btn btn-success" data-toggle="modal" data-target="#myModal"
                                    contenteditable="false">Edit</button>
                            </td>
                        </tr>
                        @endforeach

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
                            const mobileNumber = Swal.getPopup().querySelector(
                                '#mobileNumber').value;
                            const email = Swal.getPopup().querySelector('#email').value;
                            const password = Swal.getPopup().querySelector('#password')
                                .value;
                            const position = Swal.getPopup().querySelector('#position')
                                .value;
                            if (!name || !mobileNumber || !email || !password || !
                                position) {
                                Swal.showValidationMessage(
                                    'Please fill out all fields');
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
