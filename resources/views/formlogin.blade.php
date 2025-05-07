<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Custom CSS Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #151f28;
            background-image: url(https://static.wixstatic.com/media/nsplsh_6cc42710f52b47e5b70d2ae60d608b0d~mv2.jpg/v1/fill/w_640,h_328,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/nsplsh_6cc42710f52b47e5b70d2ae60d608b0d~mv2.jpg);
            background-size: cover;
            margin: 0;
            backdrop-filter: blur(5px);
        }

        body::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(13, 13, 13, 0.8);
            z-index: 1;
        }

        .latar {
            position: relative;
            z-index: 2;
        }

        .box {
            position: relative;
            width: 380px;
            height: 400px;
            background: #1c1c1c;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 400px;
            background: linear-gradient(0deg, transparent, transparent, #ffffff, #ffffff, #ffffff);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
        }

        .box::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 400px;
            background: linear-gradient(0deg, transparent, transparent, #ca9e00, #ca9e00, #ca9e00);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }

        .border-line {
            position: absolute;
            top: 0;
            inset: 0;
        }

        p {
            font-family: "Lexend", sans-serif;
            font-weight: 400;
            color: white;
            filter: drop-shadow(2px);
            text-align: center;
            margin-bottom: 80px;
            text-shadow: black;
        }

        .border-line::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 400px;
            background: linear-gradient(0deg, transparent, transparent, #ffffff, #ffffff, #ffffff);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -1.5s;
        }

        .border-line::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 400px;
            background: linear-gradient(0deg, transparent, transparent, #ca9e00, #ca9e00, #ca9e00);
            z-index: 1;
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -4.5s;
        }

        /* Animasi untuk bergeser ke kanan */
        .slide-right {
            animation: slideRight 0.5s forwards;
        }

        @keyframes slideRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Animasi untuk bergeser ke kiri */
        .slide-left {
            animation: slideLeft 0.5s forwards;
        }

        @keyframes slideLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .box form {
            position: absolute;
            inset: 4px;
            background: #222;
            padding: 50px 40px;
            border-radius: 10px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        .box form h2 {
            color: #fff;
            font-size: 26px;
            font-weight: 500;
            text-align: center;
            letter-spacing: 1px;
        }

        .input-box {
            position: relative;
            width: 300px;
            margin-top: 20px;
        }

        .input-box input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            border: none;
            outline: none;
            box-shadow: none;
            color: #23242a;
            font-size: 16px;
            letter-spacing: 1px;
            transition: 0.5s;
            z-index: 10;
        }

        .input-box span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            color: #8f8f8f;
            font-size: 16px;
            letter-spacing: 1px;
            transition: 0.5s;
            z-index: 10;
        }

        .input-box input:valid~span,
        .input-box input:focus~span {
            color: #fff;
            font-size: 12px;
            transform: translateY(-34px);
        }

        .input-box i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }

        .input-box input:valid~i,
        .input-box input:focus~i {
            height: 44px;
        }

        .imp-links {
            display: flex;
            justify-content: space-between;
        }

        .imp-links a {
            color: #ececec;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        .imp-links a:hover {
            color: #fff;
        }

        .btn {
            width: 40%;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 45px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-top: 10px;
            cursor: pointer;
        }

        .btn:active {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="latar">
        <h1 class="text-center shadow">REST-TI</h1>
        <p>Mulailah Bergabung dengan dunia Kuliner</p>
        <div class="box">
            <div class="border-line"></div>
            <form action="{{ route('login.submit') }}" method="POST">
    @csrf
                <h2>Log In</h2>
                <div class="input-box">
                    <input type="text" name="username" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="imp-links">
                    <a href="#">Forget Password</a>
                    <a href="SignUp.html">Sign Up</a>
                </div>
                <input type="submit" value="Login" name="Login" class="btn">
            </form>
        </div>
    </div>
</body>
</html>
