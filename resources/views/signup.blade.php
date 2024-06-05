@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        .login-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 640px;
            height: 540px;
            padding: 30px;
        }

        .login-header {
            text-align: center;
            margin: 20px 0 40px 0;
        }

        .login-header header {
            color: #333;
            font-size: 30px;
            font-weight: 600;
        }

        .input-box .input-field {
            width: 100%;
            height: 60px;
            font-size: 17px;
            padding: 0 25px;
            margin-bottom: 15px;
            border-radius: 10px;
            border: none;
            box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
            outline: none;
            transition: .3s;
        }

        ::placeholder {
            font-weight: 500;
            color: #222;
        }



        .forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        section {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #555;
        }

        #check {
            margin-right: 10px;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        section a {
            color: #555;
        }

        .input-submit {
            position: relative;
        }

        .submit-btn {
            width: 100%;
            height: 60px;
            background: #222;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s;
        }

        .input-submit label {
            position: absolute;
            top: 45%;
            left: 50%;
            color: #fff;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #000;
            transform: scale(1.05, 1);
        }

        .sign-up-link {
            text-align: center;
            font-size: 15px;
            margin-top: 20px;
        }

        .sign-up-link a {
            color: #000;
            font-weight: 600;
        }

        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .input-box {
            display: flex;
            flex-direction: column;
        }

        .input-field {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>



    <section class="content">
        <div class="container rounded bg-white mt-5">
            <div class="card card-primary">
                <div class="card-header" style="background-color: #262D59">
                    <h3 class="card-title">Register User</h3>
                </div>
            </div>
            <br>
            {{-- <div class=""
                style="display: flex; justify-content: center; align-items: center; height: auto; background-color: #f0f0f0; ">


                <form id="sign-up-form" method="POST" action="{{ route('create_user') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-container">
                        <div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Email" name="email"
                                    autocomplete="off" required>
                            </div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="User Name" name="name"
                                    autocomplete="off" required>
                            </div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Position" name="position"
                                    autocomplete="off" required>
                            </div>
                        </div>
                        <div>
                            <div class="input-box">
                                <input type="text" class="input-field" placeholder="Mobile Number" name="mobile_no"
                                    autocomplete="off" required>
                            </div>
                            <div class="input-box">
                                <input type="password" id="password" class="input-field" placeholder="Password"
                                    name="password" autocomplete="off" required>
                            </div>
                            <div class="input-box">
                                <input type="password" id="password_confirmation" class="input-field"
                                    placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
                                
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <select id="" class="input-field" name="password_confirmation" required>
                            <option value="">Select Company</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>

                    </div>
                    <br><br>
                    <div class="input-submit">
                        <button type="submit" class="submit-btn"
                            style="padding-left: 2.5rem; padding-right: 2.5rem; color:#fff">Register User</button>
                    </div>
                    @if ($errors->any())
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                html: '{!! implode('<br>', $errors->all()) !!}'
                            });
                        </script>
                    @endif

                    @if (session('success'))
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: '{{ session('success') }}'
                            });
                        </script>
                    @endif
                </form>
            </div> --}}
            <form id="sign-up-form" method="POST" action="{{ route('create_user') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="User Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Position" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mobile_no">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                        <span id="password-error" class="error" style="display: none; color: red;">Passwords do not match.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Select Company</label>
                    <select id="" class="form-control" name="password_confirmation" required>
                        <option value="">  Select  </option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>

                </div>
                <br>
                <div class="input-submit">
                    <button type="submit" class="submit-btn" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#262D59; color:#fff;">Register User</button>
                </div>
                @if ($errors->any())
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                html: '{!! implode('<br>', $errors->all()) !!}'
                            });
                        </script>
                    @endif

                    @if (session('success'))
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: '{{ session('success') }}'
                            });
                        </script>
                    @endif
            </form>

        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('password').addEventListener('input', validatePassword);
        document.getElementById('password_confirmation').addEventListener('input', validatePassword);

        function validatePassword() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirmation').value;
            var errorSpan = document.getElementById('password-error');

            if (password !== confirmPassword) {
                errorSpan.style.display = 'inline';
            } else {
                errorSpan.style.display = 'none';
            }
        }

        document.getElementById('sign-up-form').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirmation').value;

            if (password !== confirmPassword) {
                event.preventDefault(); // Prevent form submission
                Swal.fire({
                    icon: 'error',
                    title: 'Passwords do not match',
                    text: 'Please make sure that the password and confirm password fields match.'
                });
            }
        });
    </script>
@endsection
