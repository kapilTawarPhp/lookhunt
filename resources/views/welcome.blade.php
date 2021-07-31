

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LOOKHUNT</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <script> var BaseUrl= '{{url('')}}/'; </script>
   </head>
   <body>
      <header>
         <div class="container">
            <div class="row mt-2">
               <div class="col-sm-4 logo px-0">
                  <div class="d-flex">
                     <a href="{{url('')}}/home"> 
                     <img class="img-fluid" src="{{asset('images/logo.png')}}" alt="Lookhunt">
                     </a>        
                     <p class="mix-my mt-md-1">MIX MY WARDROBE</p>
                  </div>
               </div>
               <div class="col-sm-5 px-lg-0">
                  <div class="form-group has-search">
                     <span class="fa fa-search form-control-feedback"></span>
                     <input type="text" class="form-control font-chnage" placeholder="Search for items brands and inspiration">
                  </div>
               </div>
               <div class="col-sm-3 text-right btn-web">
                  <a href="javascript:void(0)" class="btn btn-dark px-4 py-2 mt-lg-1" onclick="openLoginPopup()">SIGN UP</a>
                  <a href="#" class="btn  px-3 mt-1">Us</a>
               </div>
            </div>
         </div>
      </header>
      <section class="slider">
         <div class="container ">
            <div class="row bg-img">
               <div class="col-sm-12">
                  <div class="col-sm-6 mx-auto text-center py-5">
                     <h3 class="mt-5 text-black">FRESH LOOKS ON YOUR EMAIL</h3>
                     <h5>PERSONALIZED BY OUR CURATORS</h5>
                     <p class="text-center mx-auto mb-2"><input type="text" style="width: 60%;opacity: 0.6;text-align: center;" class="form-control mx-auto" placeholder="Type your email"></p>
                     <p ><button type="button" class="btn btn-dark px-4">Ok</button> </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- <section class="products">
         <div class="container bg-white">
           <div class="row  pt-4">
             <div class="col-sm-3 mx-auto text-center ">
                 <h4 class="text-black">LOOK CRITERIA</h4>
                 <img  class="img-fluid girl-black" src="images/girls.png" alt="girl">
                 <p class="mt-2"><button type="button" class="btn btn-dark px-4">CUSTOMIZE</button> </p>
             </div>
             <div class="col-sm-9 mx-auto ">
                 <h3 class=" text-black"><b>SUMMER SHORT DRESS MATCHING RED HIGH-HEELS</b></h3>
                 <div class="row mt-2">
                     <div class="col-sm-3 "> 
                         <img  class="img-fluid " src="images/g1.png" alt="girl">
                     </div>
                     <div class="col-sm-3 "> 
                         <img  class="img-fluid " src="images/g2.png" alt="girl">
                     </div>
                     <div class="col-sm-3 "> 
                         <img  class="img-fluid " src="images/g3.png" alt="girl">
                     </div>
                     <div class="col-sm-3 "> 
                         <img  class="img-fluid " src="images/g4.png" alt="girl">
                     </div>
                 </div>  
             </div>
           </div>
         </div>  
         
         </section> -->
      <section class="products mb-4">
         <div class="container bg-white">
            <div class="row  pt-4">
               <div class="col-sm-3 mx-auto text-center ">
                  <h4 class="text-black">LOOK CRITERIA</h4>
                  <img  class="img-fluid girl-black" src="{{asset('images/girls.png')}}" alt="girl">
                  <p class="mt-2"><button type="button" class="btn btn-dark px-4">CUSTOMIZE</button> </p>
               </div>
               <div class="col-sm-9 mx-auto ">
                  <h3 class=" text-black">SUMMER SHORT DRESS MATCHING RED HIGH-HEELS</h3>
                  <div class="row">
                     <div class="col-sm-12 my-2">
                        <a href="#" class="text-dark">View More</a>
                     </div>
                  </div>
                  <div class="row mt-2 mb-4">
                     <div class="col-sm-12">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                           <label class="btn btn-outline-dark mr-lg-2 rounded px-4" for="btncheck1"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                           Sort</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck2">Shop</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck3">Style</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck1">Size</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck2">Colour</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck3">Price Range</label>
                           <label class="btn btn-dark mx-2 rounded px-3" for="btncheck3"><i class="fa fa-angle-down"></i></label>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="product-grid3">
                                 <div class="product-image3">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                    <img class="pic-1" src="{{asset('images/g1.png')}}">
                                    <img class="pic-2" src="{{asset('images/g1.png')}}">
                                    </a>
                                    <!-- <ul class="social">
                                       <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                       <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-bag"></i></a></li>
                                       </a>
                                       </li>
                                       </ul> -->
                                    <span class="product-new-label"><a href="#" class="text-dark">  <img style="width:23px;" class="img-fluid" src="{{asset('images/bag.png')}}"><br><b>$3</b></a></span>
                                    <span class="product-new-label2">
                                    <i class="heart fa fa-heart-o" aria-hidden="true"></i><br></span>
                                 </div>
                                 <!--   <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <div class="price">
                                        $63.50
                                        <span>$75.00</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star disable"></li>
                                        <li class="fa fa-star disable"></li>
                                    </ul>
                                    </div> -->
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="product-grid3">
                                 <div class="product-image3">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                    <img class="pic-1" src="{{asset('images/g2.png')}}">
                                    <img class="pic-2" src="{{asset('images/g2.png')}}">
                                    </a>
                                    <!--   <ul class="social">
                                       <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-bag"></i></a></li>
                                       </a>
                                       </li>
                                       </ul> -->
                                    <span class="product-new-label"><a href="#" class="text-dark"><img style="width:23px;" class="img-fluid" src="{{asset('images/bag.png')}}"><br><b>$3</b></a></span>
                                    <span class="product-new-label2">
                                    <i class="heart fa fa-heart-o" aria-hidden="true"></i><br></span>
                                 </div>
                                 <!--  <div class="product-content">
                                    <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                                    <div class="price">
                                        $43.50
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                    </ul>
                                    </div> -->
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="product-grid3">
                                 <div class="product-image3">
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                    <img class="pic-1" src="{{asset('images/g3.png')}}">
                                    <img class="pic-2" src="{{asset('images/g3.png')}}">
                                    </a>
                                    <!--  <ul class="social">
                                       <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-bag"></i></a></li>
                                       </a>
                                       </li>
                                       </ul> -->
                                    <span class="product-new-label"><a href="#" class="text-dark"><img style="width:23px;" class="img-fluid" src="{{asset('images/bag.png')}}"><br><b>$3</b></a></span> 
                                    <span class="product-new-label2">
                                    <i class="heart fa fa-heart-o" aria-hidden="true"></i><br></span>
                                 </div>
                                 <!--  <div class="product-content">
                                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                    <div class="price">
                                        $63.50
                                        <span>$75.00</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star disable"></li>
                                        <li class="fa fa-star disable"></li>
                                    </ul>
                                    </div> -->
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="product-grid3">
                                 <div class="product-image3">
                                    <a href="#">
                                    <img class="pic-1" src="{{asset('images/g4.png')}}">
                                    <img class="pic-2" src="{{asset('images/g4.png')}}">
                                    </a>
                                    <!--   <ul class="social">
                                       <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-bag"></i></a></li>
                                       </a>
                                       </li>
                                       </ul> -->
                                    <span class="product-new-label"><a href="#" class="text-dark"><img style="width:23px;" class="img-fluid" src="{{asset('images/bag.png')}}"><br><b>$3</b></a></span>
                                    <span class="product-new-label2">
                                    <i class="heart fa fa-heart-o" aria-hidden="true"></i><br></span>
                                 </div>
                                 <!--   <div class="product-content">
                                    <h3 class="title"><a href="#">Men's Blazer</a></h3>
                                    <div class="price">
                                        $63.50
                                        <span>$75.00</span>
                                    </div>
                                    <ul class="rating">
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star"></li>
                                        <li class="fa fa-star disable"></li>
                                        <li class="fa fa-star disable"></li>
                                    </ul>
                                    </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </body>
</html>
<div class="container">
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-dialog-slideout modal-md">
         <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal"><i class="fa fa-angle-left fa-2x text-dark"></i></button>
               <div class="row">
                  <div class=" col-sm-4 mx-auto">
                     <img class="pic-1 img-fluid mt-2" src="{{asset('images/g1.png')}}">
                     <p class="text-center mb-0 text-gray mt-1">3 weeks ago</p>
                     <p class="text-center "> 
                        <a href="#" data-toggle="modal" data-target="#myModal" class="text-dark"><i class="fa fa-shopping-bag"></i> 48820</a></li>
                        <a href="#" data-toggle="modal" data-target="#myModal" class="text-dark"><i class="fa fa-shopping-cart"></i> 295</a></li>
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class=" col-sm-11 mx-auto">
                     <h3 class="text-center mt-2">SUMMER SHORT DRESS MATCHING RED HIGH-HEELS</h3>
                     <p class="text-center mb-0">POSTED BY: YUKEBOX19</p>
                     <h5 class="text-center mt-3">BLACK SHORT DRESS</h5>
                     <p class="text-center mb-0">
                        <span><img class="img-fluid" src="{{asset('images/profile.png')}}"> </span>
                        <span class="ml-2"><img style="width:32px" class="img-fluid" src="{{asset('images/bag.png')}}"></span>
                        <span class="ml-2"><b>AliexpreSs</b></span>
                        <span class="ml-2"><a href="#" type="button" class="btn btn-dark px-4">BUY FOR $3</a></span>
                        <span class="ml-2"><i class="fa fa-exclamation-circle fa-2x mt-3" aria-hidden="true"></i></span>
                        <span class="ml-2"><i class="fa fa-trash fa-2x mt-3"></i></span>
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class=" col-sm-11 mx-auto">
                     <p class="text-center mb-0">
                        <span><img class="img-fluid" src="{{asset('images/profile.png')}}"> </span>
                        <span class="ml-2"><img style="width:32px" class="img-fluid" src="{{asset('images/bag.png')}}"></span>
                        <span class="ml-2"><b>AliexpreSs</b></span>
                        <span class="ml-2"><a href="#" type="button" class="btn btn-dark px-4">BUY FOR $3</a></span>
                        <span class="ml-2"><i class="fa fa-exclamation-circle fa-2x mt-3" aria-hidden="true"></i></span>
                        <span class="ml-2"><i class="fa fa-trash fa-2x mt-3"></i></span>
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class=" col-sm-11 mx-auto">
                     <h5 class="text-center mt-3">BLACK SMALL BAG</h5>
                     <p class="text-center mb-0">
                        <span><img class="img-fluid" src="{{asset('images/profile.png')}}"> </span>
                        <span class="ml-2"><img style="width:32px" class="img-fluid" src="{{asset('images/bag.png')}}"></span>
                        <span class="ml-2"><b>AliexpreSs</b></span>
                        <span class="ml-2"><a href="#" type="button" class="btn btn-dark px-4">BUY FOR $3</a></span>
                        <span class="ml-2"><i class="fa fa-exclamation-circle fa-2x mt-3" aria-hidden="true"></i></span>
                        <span class="ml-2"><i class="fa fa-trash fa-2x mt-3"></i></span>
                     </p>
                     <h4 class="text-center mt-3">SIMILAR PRODUCTS</h4>
                  </div>
               </div>
            </div>
            <!-- Modal footer -->
            <!--  <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div> -->
         </div>
      </div>
   </div>
</div>
<!-- SIGN-UP-MODEL -->
<div class="container">
   <!-- The Modal -->
   <div class="modal fade" id="myModal2">
      <div class="modal-dialog modal-dialog-slideout modal-md">
         <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
               <button type="button" class="close" onclick="closeLoginPopup()"><i class="fa fa-angle-left fa-2x text-dark"></i></button>
               <div class="row">
               </div>
               <div class="row mt-5">
                  <div class=" col-sm-11 mx-auto">
                     <h4 class="text-center">Create your free account</h4>
                  </div>
               </div>
               <div class="row mt-5 mb-2 font-faimly-lato">
                  <div class=" col-sm-11 mx-auto">
                     <a class="btn btn-danger btn-block rounded py-2" style="background-color: #de4a39;" href="" role="button"><i class="fa fa-google me-2 float-left mt-1"></i>Continue with google</a>
                  </div>
               </div>
               <div class="row font-faimly-lato">
                  <div class=" col-sm-11 mx-auto mb-2">
                     <a class="btn btn-primary btn-block rounded py-2" style="background-color: #4367b2;" href="javascript:void(0)" role="button"><i class="fa fa-facebook me-2 float-left mt-1"></i>Continue with Facebook</a>
                  </div>
               </div>
               <div class="row font-faimly-lato">
                  <div class=" col-sm-11 mx-auto mb-2">
                     <a class="btn btn-dark btn-block rounded py-2" style="background-color: #000000;" href="javascript:void(0)" role="button"><i class="fa fa-apple me-2 float-left mt-1"></i>Continue with Apple</a>
                  </div>
               </div>
               <form  method="POST">
                  <div class="row font-faimly-lato">
                     <div class=" col-sm-11 mx-auto mb-2 ">
                        <div class="row">
                           <div class="col-sm-6">
                              <hr>
                           </div>
                           <div class="col-sm-1">
                              <p class="text-center pt-1">or</p>
                           </div>
                           <div class="col-sm-5">
                              <hr>
                           </div>
                        </div>
                        <p class="text-danger text-center" id="register-error"></p>
                        <div class="form-group">
                           <label for="register_email">Email address</label>
                           <input type="email" id="register_email" name="register_email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                        </div>
                        <div class="form-group">
                           <label for="register_password">Create Password</label>
                           <input type="password" id="register_password" name="register_password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="8 character minimum">
                        </div>
                     </div>
                  </div>
                  <div class="row font-faimly-lato">
                     <div class="col-sm-11 mx-auto mb-2">
                        <button type="button" id="register-form-submit" class="btn btn-warning btn-block rounded py-2 text-white" style="background-color:#e5a00b;">Create an account</button>
                        <p class="text-center mt-2">Already have an account? <b>Sign in</b></p>
                     </div>
                  </div>
               </form>
               <form method="POST">
                  <div class="row font-faimly-lato">
                     <div class=" col-sm-11 mx-auto mb-2 ">
                        <div class="row">
                           <div class="col-sm-6">
                              <hr>
                           </div>
                           <div class="col-sm-1">
                              <p class="text-center pt-1">or</p>
                           </div>
                           <div class="col-sm-5">
                              <hr>
                           </div>
                        </div>
                        <p class="text-danger text-center" id="login-error"></p>
                        <div class="form-group">
                           <label for="login_email">Email address</label>
                           <input type="email" id="login_email" name="login_email" class="form-control border-top-0 border-left-0 border-right-0" placeholder="">
                        </div>
                        <div class="form-group">
                           <label for="login_password">Password</label>
                           <input type="password" id="login_password" name="login_password" class="form-control border-top-0 border-left-0 border-right-0" placeholder="8 character minimum">
                        </div>
                     </div>
                  </div>
                  <div class="row font-faimly-lato">
                     <div class="col-sm-11 mx-auto mb-2">
                        <button type="button" id="login-form-submit" class="btn btn-warning btn-block rounded py-2 text-white" style="background-color:#e5a00b;">Sign In</button>
                     </div>
                  </div>
               </form>
               <div class="row font-faimly-lato">
                  <div class="col-sm-11 mx-auto mb-2">
                     <p class="text-center mt-1">By creating an account or continuing to use a plex application,website, or software, you acknowledge and agree that you have accepted the terms of service and have reviewed the privacy policy</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(".heart.fa").click(function() {
     $(this).toggleClass("fa-heart fa-heart-o");
   });
   @if(!empty($loginpopup))
       $('#myModal2').modal('show');
   @endif
   $('#register-form-submit').click(function() {
       $('#register-error').html('');
       if($('#register_email').val() ==""){
           $('#register-error').html('The email field is required.');
           return false;
       }else if(!validateEmail($('#register_email').val())){
           $('#register-error').html('Please enter valid email address.');
           return false;
       }
       if($('#register_password').val() ==""){
           $('#register-error').html('The password field is required.');
           return false;
       }else if($('#register_password').val().length<8){
           $('#register-error').html('Password at least 8 characters in lenght.');
           return false;
       }
       $.ajax({
           type: 'POST',
           url: BaseUrl+"register",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           data: {
               email:$('#register_email').val(),
               password:$('#register_password').val()
           },
           dataType: "json",
           success: function(response) {
               if(response.status=='fail'){
                   $('#register-error').html(response.message);
                   return false;
               }else{
                   window.location.href=BaseUrl+"home";
               }
           }
       });
   });
   function closeLoginPopup(){
       $('#myModal2').modal('hide');
       history.pushState(null, '', BaseUrl);    
   
   }
   function openLoginPopup(){
       $('#myModal2').modal('show');
       history.pushState(null, '', BaseUrl+'login');    
   
   }
   $('#login-form-submit').click(function() {
       $('#login-error').html('');
       if($('#login_email').val() ==""){
           $('#login-error').html('The email field is required');
           return false;
       }else if(!validateEmail($('#login_email').val())){
           $('#login-error').html('Please enter valid email address.');
           return false;
       }
       if($('#login_password').val() ==""){
           $('#login-error').html('The password field is required');
           return false;
       }
       $.ajax({
           type: 'POST',
           url: BaseUrl+"login",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           data: {
               email:$('#login_email').val(),
               password:$('#login_password').val()
           },
           dataType: "json",
           success: function(response) {
               if(response.status=='fail'){
                   $('#login-error').html(response.message);
                   return false;
               }else{
                   window.location.href=BaseUrl+"home";
               }
           }
       });
   });
   
   function validateEmail(email) {
       const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
       return re.test(String(email).toLowerCase());
   }
   
</script>

