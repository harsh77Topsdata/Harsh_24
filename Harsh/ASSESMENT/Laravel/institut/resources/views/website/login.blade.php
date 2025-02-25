<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f6fa;
        }
        .container {
            display: flex;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }
        .illustration {
            background-color: #e6f3ff;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .illustration img {
            width: 50px;
            height: auto;
        }
        .form-container {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #0056d8;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #003a9f;
        }
        .social-login {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }
        .social-login button {
            padding: 10px;
            border: none;
            background-color: #f4f4f4;
            cursor: pointer;
            border-radius: 5px;
            flex: 1;
            margin: 0 5px;
        }
        .social-login button:hover {
            background-color: #ddd;
        }
        .signup {
            text-align: center;
        }
        .signup a {
            color: #0056d8;
            text-decoration: none;
        }
        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
@include('sweetalert::alert')
    <div class="container">
        <div class="student">
            <img src="{{url('website/img/student.jpg')}}" alt="Illustration">
        </div>
        <div class="form-container">
            <h2>Student Login</h2>
            <form action="{{ url('/user_auth') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="username" placeholder="Enter your username/email" required>
                <input type="password" name="password" placeholder="Enter your password" required>
                <button type="submit" class="btn">Login In</button>
            </form>
            <div class="social-login">
                <button>Google</button>
                <button>Facebook</button>
            </div>
            <div class="signup">
                <p>Don't have an account? <a href="signup">Signup Now</a></p>
            </div>
        </div>
    </div>
</body>
</html>
