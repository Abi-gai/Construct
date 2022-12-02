<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Hub</title>
    <link rel="stylesheet" href="./assets/landingpage.css"/>
    <style>
        *{
            transition: 0.3s;
            scroll-behaviour: smooth;
            

        }
        body{
            margin:0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("./images/pexels-stefan-grage-5637555.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: normal;
        }
        .container{
            width: 30%;
            height: 20%;
            display: flex;
            justify-content: space-between;
            align-items: center;        
        }

        .auth-link {
            margin: 0;
            padding: 0;
            padding: 1rem 0.8rem;
            text-decoration: none;
            border: none;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5rem;
            background: #FFFFFF;
            border-radius: 10px;
            color: #000;
            font-weight: 600;
            text-align: center;
            width: 40%;
        }

        .auth-link:hover {
            transform: scale(1.1);
            background: 
        }
    </style>
</head>
<body>
    <div class="container">
        <a class="auth-link" href="./auth/login">Login</a>
        <a class="auth-link" href="./auth/signup">Sign up</a>
    </div>
</html>
