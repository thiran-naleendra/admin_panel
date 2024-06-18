@extends('admin.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />

    <style>

        .heading-class{
                font-family: 'Inter', sans-serif;
                font-size: 1.5rem;
                font-weight: 700;
                line-height: 0rem;
                text-align: left;
                color: #262d59;
                margin-bottom: 3rem;
            }
            .icon-gap {
                margin-right: 5px;
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
                }

                .btn-model {
                background-color: #262D59; /* Blue color */
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 5px 19px;
                cursor: pointer;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .btn-model:hover {
                background-color: #0056b3; /* Darker blue color */
            }

            .icon-gap {
                margin-right: 5px; /* Adjust the gap between icon and text */
            }

            .scrollable-table {
            overflow-x: auto;
            max-height: 500px; /* Adjust the max-height as per your requirement */
        }

        .btn-register{
            background-color: #262D59; /* Blue color */
                border: none;
                color: white;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 5px 19px;
                cursor: pointer;
                border-radius: 5px;
                transition: background-color 0.3s;
        }

    </style>
        
    <section class="content">
        <div class="container rounded bg-white mt-5">
            <div class="heading-class">Our Customers</div>
            <div class="text-right">
                <button type="button" class="btn-model" data-toggle="modal" data-target="#customerModal">
                    <i class="fa fa-plus-circle icon-gap" aria-hidden="true"></i>Add Customer
                </button>
            </div>
            
            <br>
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
                                <div class="text-right">
                                <button type="submit" class="btn-register">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="scrollable-table">
                    <ul class="responsive-table">
                        @foreach ($user as $us)
                        <li class="table-row">
                            <div class="col col-1 alignments" data-label="Job Id">{{ $us->name }}</div>
                            <div class="col col-2 alignments" data-label="Address">{{ $us->mobile_no }}</div>
                            <div class="col col-2" data-label="Schedule Date">{{ $us->email }}</div>
                            <div class="col col-2" data-label="Visit Date">{{ $us->position }}</div>
                            <div class="col col-1">
                                <i class="fas fa-pencil-alt editIcon"  data-name="{{ $us->name }}" data-mobile="{{ $us->mobile_no }}" data-email="{{ $us->email }}" data-position="{{ $us->position }}"></i>
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
    </section>

    <!-- Your custom JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editIcons = document.querySelectorAll('.editIcon');
    
            editIcons.forEach(icon => {
                icon.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const mobile = this.getAttribute('data-mobile');
                    const email = this.getAttribute('data-email');
                    const position = this.getAttribute('data-position');
    
                    Swal.fire({
                        title: 'Edit Customer',
                        html: `
                            <style>
                                .swal2-container .swal2-html-container {
                                    text-align: left;
                                }
                                .swal2-container .form-control {
                                    width: 100%;
                                }
                            </style>
                            <form id="edit-customer-form" class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" value="${name}">
                                </div>
                                <div class="col-md-6">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber" value="${mobile}">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" value="${email}">
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="col-md-6">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" id="position" value="${position}">
                                </div>
                                <div class="col-md-6">
                                    <br>
                                </div>
                            </form>
                        `,
                        showCancelButton: true,
                        confirmButtonText: 'Update Customer',
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
                            // You can submit the form via AJAX or directly update your backend
                        }
                    });
                });
            });
        });
    </script>
    
@endsection
