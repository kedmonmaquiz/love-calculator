<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        #instastory{
          background-image: linear-gradient(pink,orange);
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
                    <h3 class="text-white pt-5 ">{{$owner->name}}</h3>
                    <h5 class="text-white pt-2">Share your link:</h5>
                    <div class="m-3">
                        <textarea name="link" class="form-control" id="copy">{{url('/').'/l/'.$owner->id.'/'.$owner->code}}</textarea>
                    </div>
                    <div class="p-2">
                        <button class="btn btn-primary p-2" value="copy" onclick="copyToClipboard()">Copy this link</button>
                      </div>

                      <div class="p-2" id="alert" style="display: none">
                         <button class="btn btn-dark pt-2 pb-2" style="width: 100%"><strong>Copied to the clipboard</strong></button>
                    </div>

                    <div class="p-2">
                        <a href="whatsapp://send?text=calculate love percentage between you and you crush by clicking the following link: {{url('/').'/l/'.$owner->id.'/'.$owner->code}}"
                            data-action="share/whatsapp/share"  target="_blank" style="display: block;" class="btn btn-success">whatsapp Status</a>
                    </div>
                    <div class="p-2">
                        <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm" id="instastory" style="display: block;width: 100% " class="btn">Add to Instagram bio</button>
                    </div>
                    {{-- <div class="p-2">
                        <button href="#" class="btn btn-primary p-2">WS</button> <button href="#" class="btn btn-primary p-2">IG</button>
                        <button href="#" class="btn btn-primary p-2">FB</button> <button href="#" class="btn btn-primary p-2">MG</button>
                      </div> --}}
                    <div class="p-4">
                        <table class="table table-bordered table-success">
                            <tr style="background-color: green">
                                <th>C/N</th>
                                <th>Friend's Name</th>
                                <th>Love</th>
                            </tr>
                           @if(count($owner->friends)>0)
                             @foreach($owner->friends as $friend)
                               <tr>
                                   <td>{{$loop->index +1}}</td>
                                   <td>{{$friend->name}}</td>
                                   <td>{{$friend->crush}}</td>
                               </tr>
                             @endforeach
                           @else
                           <tr>
                               <td colspan="3">
                                   <p>No Entries made till now.</p>
                                   <p>Share your link to prank your friends.</p>
                               </td>
                           </tr>  
                           @endif
                        </table>
                    </div>
                    <h2 class="pt-5 pb-3 text-white">Take a screenshot of your secret link</h2>
                    <h4 class="pt-2 pb-2 text-white">{{url('/').'/l/'.$owner->id.'/'.$owner->code}}</h4>
                </div>
            </div>

            <!--contact-->
            <div class="row">
               <div class="col-sm-12 pt-3 pb-3 bg-contact">
                  <div class="text-center text-white">
                    <a href="/contact" id="contact-link">My Contact</a>
                </div>
               </div>
            </div>

               
        <!-- Modal -->
        <div class="modal fade" id="instaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">How to add this link to your Instagram BIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <ul>
                   <li>Copy your link</li>
                   <li>Go on your profile in the app</li>
                   <li>Click on Edit Profile</li>
                   <li>Paste the link under Website section</li>
               </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

    </div>

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script>
        $(function(){
           $('#instastory').click(function(){
            $('#instaModal').modal('show');
        });
        });
    </script>
    <script>
    function copyToClipboard() {
        $("#copy").select();
        var c =document.execCommand('copy');
        if(c){
            $('#alert').slideDown();
             setTimeout(function(){
                $('#alert').slideUp();
             },3000);
        }
    }
</script>
</body>
</html>


