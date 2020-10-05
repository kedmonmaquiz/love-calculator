<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6c012d">
    <title>Love Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('assets/images/kopa.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,html{
            font-family: sans-serif;
            max-width: 800px;
            margin:auto;
        }
        .bg{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            margin-bottom:5px;
            background-position: center;
            background-size: cover;
        }
        #submit{
            display: block;
            background-color: #400909;
            border-radius: 5px;
            text-decoration: none;
        }
        .bg-dashboard{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            margin-bottom: 5px;
            background-position: center;
            background-size: cover;
        }
        .bg-contact{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            background-position: center;
            background-size: cover;
        }
        #contact-link{
            color: white;
            text-decoration: none;
        }
        .form-control, .form-control:focus, .form-control:active {
           background-color: #faa7a7;
           border-color: #faa7a7;
         }
         .form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #8b0000;
            opacity: 1; /* Firefox */
            font-size: 20px;
        }

        .form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
                    color: r#8b0000;
        }

        .form-control::-ms-input-placeholder { /* Microsoft Edge */
                    color: r#8b0000;
         }

         ::-moz-selection { /* Code for Firefox */
          color: white;
          background: red;
        }

        ::selection {
          color: white;
          background: red;
        }

       
    </style>
</head>
<body style="overflow-x: hidden;">
    <div class="">
            <div class="row">
                <div class="col-sm-12 text-center bg">
                    <h4 class="mb-5 mt-5 text-white">You have been fooled by {{$owner->name}}</h4>
                    <p class="text-white" style="font-family:Arial">Your name as well as name of your love has been sent to {{$owner->name}}</p>
                    <div class="p-3"><img src="{{ asset('assets/images/prank.gif') }}" alt=""></div>     
                </div>
            </div>

            <!--dashboard-->
            <div class="row">
               <div class="col-sm-12 pt-3 pb-3 bg-dashboard text-center">
                  <div class="text-white">
                    <p class="text-white">Register now to play the same prank to your friends &nbsp; <a href="/love" class="btn btn-danger">Register now</a></p>
                    <h3 class="text-white">How it works ?</h3>
                    <div class="container">
                        <ul class="list-group">
                        <li class="list-group-item"><span class="badge badge-warning">step 1</span> &nbsp;<span class="text-dark">Register and share your link</span></li>
                        <li class="list-group-item"><span class="badge badge-warning">step 2</span> &nbsp;<span class="text-dark">Check your Friend's Secret Crush on your Secret link.</span></li>
                    </ul>
                    </div>
                </div>
               </div>
            </div>

            <!--contact-->
            <div class="row">
               <div class="col-sm-12 pt-3 pb-3 bg-contact">
                  <div class="text-center text-white">
                    <a href="/contact" id="contact-link">Contact</a>
                </div>
               </div>
            </div>
    </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>