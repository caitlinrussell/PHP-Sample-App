<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP Sample App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: 50px;
            }

            .title {
                font-size: 34px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .info p {
                font-size: 20px;
                font-family: Times;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a {
                font-family: times;
                border: 1px solid gray;
                border-radius: 5px;
                padding: 10px;
                text-decoration: none;
                background-color: gray;
            }
            a:link {
                color: white !important;
            }
            a:hover {
                background-color: #aaa;
            }
            a:visited {
                color: white !important;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    PHP Sample App
                </div>
                <div class="info">
                    <p>Hello, {{ $name }}!</p>
                    <br />
                    <p>Email address: {{ $mail }}</p>
                    <p>Phone number: {{ $phone }}</p>
                </div>
            </div>
        </div>
    </body>
</html>
