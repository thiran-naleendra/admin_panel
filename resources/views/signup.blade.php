<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up | Ludiflex</title>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #ececec;
        }

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
            border-radius: 30px;
            border: none;
            box-shadow: 0px 5px 10px 1px rgba(0, 0, 0, 0.05);
            outline: none;
            transition: .3s;
        }

        ::placeholder {
            font-weight: 500;
            color: #222;
        }

        .input-field:focus {
            width: 105%;
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
</head>

<body>
    <div class="login-box">
        <div class="image-container">
            <img src="{{ url('image/geo.png') }}" width="400px" height="auto" alt="User Image">
        </div>
        <div class="login-header">

            <header>Sign Up</header>
        </div>
        <form id="sign-up-form" method="POST" action="{{ route('create_user') }}" enctype="multipart/form-data">
            @csrf
            

            <div class="form-container">
                <div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Email" name="email" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Name" name="name" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Position" name="position" autocomplete="off" required>
                    </div>
                </div>
                <div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Mobile Number" name="mobile_no" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" class="input-field" placeholder="Password" name="password" autocomplete="off" required>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password_confirmation" class="input-field" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
                        <span id="password-error" class="error" style="display: none;">Passwords do not match.</span>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="input-submit">
                <button type="submit" class="submit-btn" style="padding-left: 2.5rem; padding-right: 2.5rem; color:#fff">Sign Up</button>
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
</body>

</html>
