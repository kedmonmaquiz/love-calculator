<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6c012d">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Love Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('assets/images/kopa.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,html{
            height: 100%;
            font-family: sans-serif;
            max-width: 800px;
            margin:auto;
        }
        .bg{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            margin-bottom:5px;
            background-position: center;
            background-size: cover;
            height: 100vh;
            line-height: 100vh;
        }
       
    </style>
</head>
<body style="overflow-x: hidden;">
    <div class="">
            <div class="row">
                <div class="col-sm-12 text-center bg">
                    <div><img src="{{ asset('assets/images/unnamed.gif') }}" width="300px" alt=""></div>
                </div>
            </div> 
    </div>
</body>
</html>