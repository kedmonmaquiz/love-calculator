<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Love Calculator</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('assets/images/kopa.png')}}">
    <script src="{{asset('assets/js/fontawesome.js')}}"></script>
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

        {{-- @media only screen and (max-width: 600px) { --}}
          /*.row {
            width:600px;
          }
        }*/
       
    </style>
</head>
<body style="overflow-x: hidden;">
    <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bg">
                    <h2 class="pb-5 pt-5 text-white">Love Calculator</h2>
                    <div><img src="{{ asset('assets/images/kopa.png') }}" width="200px" alt=""></div>
                    <div class="pt-5 ml-5 mr-5 pb-5">
                        <form action="/" method="post">
                            <input type="hidden" name="owner_id" id="id" value="{{$id}}" required>
                            <input type="hidden" name="owner_code" id="code" value="{{$code}}" required="">
                            <div class="pt-4">
                                <label for="" class="text-white">Name</label>
                                <input type="text" name="name" autocomplete="off" id="name" class="form-control input" placeholder="Name" >
                            </div>
                            <div class="pt-4">
                                <label for="" class="text-white">Your Love/Crush</label>
                                <input type="text" name="crush" autocomplete="off" id="crush" class="form-control input" placeholder="Love" >
                            </div>
                            <div class="pt-5 pb-4">
                                <button id="submit" class="btn btn-dark pt-2 pb-2" style="width: 100%"> <span class="fa fa-heart"></span> <strong>&nbsp;&nbsp; Calculate &nbsp;&nbsp;<span class="fa fa-heart"></span> </strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--dashboard-->
            @if(\Cookie::get('cookie_owner_id')==$id)
              <div class="row">
               <div class="col-sm-12 pt-3 pb-3 bg-dashboard">
                  <div class="text-center text-white">
                    <a href="/love/{{$id}}/{{$code}}" class="btn btn-success">Dashboard</a>
                </div>
               </div>
            </div>
            @endif

            <!--contact-->
            <div class="row">
               <div class="col-sm-12 pt-3 pb-3 bg-contact">
                  <div class="text-center text-white">
                    <a href="/contact" id="contact-link">My Contact</a>
                </div>
               </div>
            </div>
    </div>

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script>
        $(function(){
           $('#submit').click(function(e){
            e.preventDefault();
            var name = $('#name').val();
            var crush = $('#crush').val();
            var code = $('#code').val();
            var id = $('#id').val();

            $.ajaxSetup({
                      headers:{
                        'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                      }
                   });
            
            $.ajax({
                     url:'/'+id+'/'+code,
                     method:'POST',
                     data:{
                        name: name,
                        crush: crush,
                        id:id
                     },
                     success: function(data){
                       $('html').html(data);
                       console.log('fooled successfully');
                     }
                   });
           });
        });
    </script>
</body>
</html>