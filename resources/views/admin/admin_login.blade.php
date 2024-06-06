<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login </title>
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
            justify-content: center;  /* right */
            /* padding-right: 10%; */
            align-items: center;
            min-height: 100vh;
            background: url('https://images.pexels.com/photos/9330906/pexels-photo-9330906.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center fixed;
            background-size: cover;
        }

        .login-box {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 440px;
            height: 480px;
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

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .top-left-image {
            position: absolute;
            top: 0;
            left: 0;
            margin: 20px;
            /* Optional: Adjust margin to move the image inward */
        }
    </style>
</head>

<body>


    <img src="image/geo.png" alt="" width="200px" height="auto" class="top-left-image">

    <div class="login-box" style="background-color: #e6e6e6; border-radius: 10px;">

        <form method="POST" action="{{ route('admin_login') }}">
            <div class="login-header">
                <header style="color: #000000">Admin Login</header>
            </div>
            @csrf
            <!-- Email input -->
            <div class="input-box">

                <input name="name" id="form3Example3" class="input-field" placeholder="User Name" required />

            </div>

            <!-- Password input -->
            <div class="input-box">

                <input type="password" name="password" id="password" class="input-field" placeholder="password"
                    required />

            </div>

            @if ($errors->has('name'))
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: '{{ $errors->first('name') }}'
                    });
                </script>
            @endif

            <div class="input-submit">
                <button type="submit" class="submit-btn"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; color:#fff">Login</button>

            </div>
        </form>
        {{-- <div class="sign-up-link">
            <p>Don't have account? <a href="{{ route('signup') }}">Sign Up</a></p>
        </div> --}}
    </div>
</body>

</html>
