<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login </title>
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
    </style>
</head>

<body>


    <div class="login-box">

        
        <form method="POST" action="{{ route('login') }}">
            <div class="login-header">
                <header>Login</header>
            </div>


            @csrf


            <!-- Email input -->
            <div class="input-box">

                <input name="name" id="form3Example3" class="input-field" placeholder="Enter a valid Name"
                    required />

            </div>

            <!-- Password input -->
            <div class="input-box">

                <input type="password" name="password" id="password" class="input-field" placeholder="Enter password"
                    required />

            </div>


            <div class="input-submit">
                <button type="submit" class="submit-btn"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; color:#fff">Login</button>

            </div>
        </form>
        <div class="sign-up-link">
            <p>Don't have account? <a href="{{ route('signup') }}">Sign Up</a></p>
        </div>
    </div>
</body>

</html>
