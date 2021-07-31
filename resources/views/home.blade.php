

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LOOKHUNT</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <script> var BaseUrl= '{{url('')}}/'; </script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <style>
         .link_input{
            font-family: sans-serif;
         }
         .send_for_approval_icon{
         display: none;
         }
         .errors{
         margin: 12px;
         }
      
         .uploadOuter {
         text-align: center;
         padding: 20px;
         strong {
            padding: 0 10px
         }
         }
         .dragBox {
         width: 250px;
         height: 100px;
         margin: 0 auto;
         position: relative;
         text-align: center;
         font-weight: bold;
         line-height: 95px;
         color: #999;
         border: 2px dashed #ccc;
         display: inline-block;
         transition: transform 0.3s;
         input[type="file"] {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: 0;
            top: 0;
            left: 0;
         }
         }
         .draging {
         transform: scale(1.1);
         }
         #preview {
         text-align: center;
         img {
            max-width: 100%
         }
         }
      </style>
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
               <div class="col-sm-3  text-right btn-web">
                  <a class="mt-1" type="button"  data-toggle="dropdown">{{$user->name ? $user->name : $user->email}} <img class="img-fluid" src="{{asset('images/profile.png')}}"> </a>
                  <ul class="dropdown-menu">
                     <li><a href="#" data-toggle="modal" data-target="#my-profile">MY PROFILE</a></li>
                     <li><a href="#" data-toggle="modal" data-target="#new-hunt">ADD NEW HUNT</a></li>
                     <li><a href="#">MY WARDROBE</a></li>
                     <li><a href="#" data-toggle="modal" data-target="#notifi">NOTIFICATIONS</a></li>
                     <li><a href="#" data-toggle="modal" data-target="#my-hunt">MY HUNT</a></li>
                     <li><a href="{{route('logout')}}">SIGN OUT</a></li>
                  </ul>
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
                     <p><button type="button" class="btn btn-dark px-4">Ok</button> </p>
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
                  <p class="mt-2"><button type="button" class="btn btn-dark px-4" data-toggle="modal" data-target="#my-hunt">CUSTOMIZE</button> </p>
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
                           <label class="btn btn-outline-dark mr-lg-2 rounded px-4" for="btncheck1" id="filter_sort"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>Sort</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck2" id="filter_shop_btn" data-toggle="modal" data-target="#filterShopModal">Shop</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck3" id="filter_style_btn" data-toggle="modal" data-target="#filterStyleModal">Style</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck1" id="filter_size_btn" data-toggle="modal" data-target="#filterSizeModal">Size</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck2" id="filter_colour_btn">Colour</label>
                           <label class="btn btn-outline-dark mx-lg-1 rounded px-lg-4" for="btncheck3" id="filter_price_btn">Price Range</label>
                           <label class="btn btn-dark mx-2 rounded px-3" for="btncheck3"><i class="fa fa-angle-down"></i></label>
                        </div>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="container">
                        <div class="row">
                           @foreach($hunts as $key => $hunt)
                           <div class="col-md-3 col-sm-6">
                              <div class="product-grid3">
                                 <div class="product-image3">
                                    <a href="#" data-toggle="modal" data-target="#myModal" onclick="huntDetails('{{ $hunt->id }}')">
                                       <img class="pic-1" src="{{asset('hunts_images/'.$hunt->image_link)}}">
                                       <img class="pic-2" src="{{asset('hunts_images/'.$hunt->image_link)}}">
                                    </a>
                                    <span class="product-new-label">
                                       <a href="#" class="text-dark">	
                                          <img style="width:23px;" class="img-fluid" src="{{asset('images/bag.png')}}">
                                          <br><b>${{$hunt->price}}</b>
                                       </a>
                                    </span>
                                    <span class="product-new-label2">
                                       <i class="heart fa fa-heart-o" aria-hidden="true"></i><br>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           @endforeach
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
               <button type="button" class="close" data-dismiss="modal">
                  <i class="fa fa-angle-left fa-2x text-dark"></i>
               </button>
               <div class="row">
                  <div class=" col-sm-4 mx-auto">
                     <img class="pic-1 img-fluid mt-2" id="huntDetailsImage" src="{{asset('images/g1.png')}}">
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
                     <p class="text-center mb-0" id="huntDetailsPostBy">YUKEBOX19</p>
                     <h5 class="text-center mt-3">BLACK SHORT DRESS</h5>
                     <p class="text-center mb-0">
                        <span><img class="img-fluid" src="{{asset('images/profile.png')}}"> </span>
                        <span class="ml-2"><img style="width:32px" class="img-fluid"  src=""></span>
                        <span class="ml-2"><b>AliexpreSs</b></span>
                        <span class="ml-2"><a href="#"  id="huntDetailsLink" type="button" class="btn btn-dark px-4">BUY FOR $3</a></span>
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


<!-- NEW HUNT -->
<div class="container">
   <!-- The Modal -->
   <div class="modal fade" id="new-hunt" >
      <div class="modal-dialog modal-dialog-slideout modal-md">
         <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body ">
               <button type="button" class="close" data-dismiss="modal"><i class="fa fa-angle-left fa-2x text-dark"></i></button>
               <div class="row mt-3">
                  <div class=" col-sm-11 mx-auto">
                     <h4 class="text-center mb-3">SEND A NEW HUNT</h4>
                     <label>PICK IMAGE</label>
                     <div class="form-group" style="margin-left: 20px;">
                    
                        {{-- <input type="file" name="new_hunt_image" id="new_hunt_image"> --}}
						<!-- add Drah and Drop New Html -->
						
						<div class="uploadOuter">
								<label for="uploadFile" class="btn btn-primary">Upload Image</label>
								<strong>OR</strong>
								<span class="dragBox" >
								Darg and Drop image here
								<input type="file" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  />
								</span>
								</div>
						<div id="preview"></div>
			  
                     </div>
                     <div class="row" style="margin-left: 20px;">
                        <input class="form-control link_input" placeholder="OR PASTE LINK HERE" name="new_hunt_image_link" id="new_hunt_image_link">
                        {{--
                        <div class=" col-sm-5 text-right">
                           <a href="#" type="button" class="btn btn-dark px-4">PICK IMAGE</a>
                        </div>
                        --}}
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <table class="table gender table-borderless">
                              <tr>
                                 <td class="color-grey">
                                    GENDER
                                 </td>
                                 <td>
                                    <p class="mb-0 select_gender active" data-value="A">
                                       <a href="#">ANY</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_gender" data-value="M">
                                       <a href="#" class="text-center">
                                       <img style="width:23px;" class="img-fluid" src="{{asset('images/male.png')}}">
                                       MALE
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_gender" data-value="F">
                                       <a href="#" class="text-center">
                                       <img style="width:23px;" class="img-fluid" src="{{asset('images/male.png')}}"><br>
                                       FEMALE
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                    WEATHER
                                 </td>
                                 <td>
                                    <p class="mb-0 select_weather active" data-value="A">
                                       <a href="#">ANY</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_weather" data-value="S">
                                       <a href="#" class="text-center">
                                       <img style="width:23px;" class="img-fluid" src="{{asset('images/summer.png')}}">
                                       SUMMER
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_weather" data-value="T">
                                       <a href="#" class="text-center">
                                       <img style="width:23px;" class="img-fluid" src="{{asset('images/cloud.png')}}">
                                       transitional
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_weather" data-value="W">
                                       <a href="#" class="text-center">
                                       <img style="width:23px;" class="img-fluid" src="{{asset('images/winter.png')}}">
                                       WINTER
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                    STYLE
                                 </td>
                                 <td>
                                    <p class="mb-0 active select_style" data-value="A">
                                       <a href="#">ANY</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_style" data-value="F">
                                       <a href="#" class="text-center">
                                       FORMAL
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_style" data-value="$1M">
                                       <a href="#" class="text-center">
                                       $1M
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_style" data-value="C">
                                       <a href="#" class="text-center">
                                       CASUAL
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                    SIZE
                                 </td>
                                 <td>
                                    <p class="mb-0 active select_size" data-value="S">
                                       <a href="#">S</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_size" data-value="M">
                                       <a href="#">M</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_size" data-value="L">
                                       <a href="#">L</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_size" data-value="XL">
                                       <a href="#">XL</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_size" data-value="XXL">
                                       <a href="#">XXL</a>
                                    </p>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="color-grey">
                                    COLOUR
                                 </td>
                                 <td>
                                    <input type="color" list="presetColors" class="" name="new_hunt_colour" id="new_hunt_colour" style="width: 48px">
                                    <datalist id="presetColors">
                                       <option>#00FFFF</option>
                                       />
                                       <option>#808080</option>
                                       <option>#000080</option>
                                       <option>#C0C0C0</option>
                                       <option>#000000</option>
                                       <option>#008000</option>
                                       <option>#808000</option>
                                       <option>#008080</option>
                                       <option>#0000FF</option>
                                       <option>#00FF00</option>
                                       <option>#800080</option>
                                       <option>#FFFFFF</option>
                                       <option>#FF00FF</option>
                                       <option>#800000</option>
                                       <option>#FF0000</option>
                                       <option>#FFFF00</option>
                                    </datalist>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="color-grey">
                                    PRICE
                                 </td>
                                 <td colspan="2">
                                    <p class="mb-0 active select_style" data-value="A">
                                       $ <input type="number" class="form-control text-center" name="new_hunt_price" id="new_hunt_price" placeholder="0.00" step="0.01" style="width: 123px">
                                    </p>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="color-grey">
                                    CLOTHES
                                 </td>
                                 <td>
                                    <p class="mb-0 active select_clothes" data-value="any">
                                       <a href="#">ANY</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="shirt">
                                       <a href="#" class="text-center">
                                       SHIRT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="trousers">
                                       <a href="#" class="text-center">
                                       TROUSERS<br>
                                       3 colors
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="belt">
                                       <a href="#" class="text-center">
                                       BELT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="lingerie">
                                       <a href="#" class="text-center">
                                       LINGERIE
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="watch">
                                       <a href="#">WATCH</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="suit">
                                       <a href="#" class="text-center">
                                       SUIT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="shorts">
                                       <a href="#" class="text-center">
                                       SHORTS
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="shoes">
                                       <a href="#" class="text-center">
                                       SHOES
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="scarf">
                                       <a href="#" class="text-center">
                                       SCARF
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="tie">
                                       <a href="#">TIE</a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="pants">
                                       <a href="#" class="text-center">
                                       PANTS
                                       WHITE
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="boxers">
                                       <a href="#" class="text-center">
                                       BOXERS
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="tshirt">
                                       <a href="#" class="text-center">
                                       T-SHIRT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0 select_clothes" data-value="bowtie">
                                       <a href="#" class="text-center">
                                       bowtie
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                           </table>
                        </div>
                     </div>
                     ------------
                     <h5 class="text-center mb-0 mt-3">WHITE PANTS</h5>
                     <p class="text-center mb-0">
                        <span><img class="img-fluid" src="{{asset('images/profile.png')}}"> </span>
                        <span class="ml-2"><img style="width:32px" class="img-fluid" src="{{asset('images/bag.png')}}"></span>
                        <span class="ml-2"><b>AliexpreSs</b></span>
                        <span class="ml-2"><a href="#" type="button" class="btn btn-dark px-4">BUY FOR $3</a></span>
                        <span class="ml-2"><i class="fa fa-exclamation-circle fa-2x mt-3" aria-hidden="true"></i></span>
                        <span class="ml-2"><i class="fa fa-trash fa-2x mt-3"></i></span>
                     </p>
                     <p class="text-center mt-1 mb-3">ADD LINK</p>
                     -------------
                  </div>
               </div>
               {{--<!-- <div class="row">
                  <div class=" col-sm-11 mx-auto">
                  	<h5 class="text-center mt-3 mb-0">TROUSERS</h5>
                  	<p class="text-center mt-0 mb-3">ADD LINK</p>
                  	<p class="text-center mb-0">
                  	<span class="ml-2"><a href="#" type="button" class="btn btn-dark px-4">SEND FOR APPROVAL</a></span>
                  	</p>
                  </div>
                  </div> -->--}}


				
               
				
				
				<div class="row" id="selected_clothes_div">
                  <div class=" col-sm-11 mx-auto form-group">
                     <h5 class="text-center mt-3 mb-0" id="selected_clothes_name">ANY</h5>
                     <input type="" class="text-center form-control link_input" placeholder="ADD LINK" id="selected_clothes_link" name="selected_clothes_link" style="width: 100%">
                     <!-- <p class="text-center mt-0 mb-3" >ADD LINK</p> -->
                  </div>
               </div>
               <p class="text-danger text-center errors" id="new-hunt-error"></p>
               <p class="text-center mb-0">
                  <span class="ml-2">
                  <button type="button" id="new_hunt_submit_btn" class="btn btn-dark px-4">
                  <span class="send_for_approval_icon">
                  <i class="fa fa-spinner fa-spin"></i>
                  </span>
                  SEND FOR APPROVAL</button>
                  </span>
               </p>
            </div>
            <!-- Modal footer -->
            <!--  <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div> -->
         </div>
      </div>
   </div>
</div>


<!-- MY HUNT -->

<div class="container">
   <!-- The Modal -->
   <div class="modal fade" id="my-hunt">
      <div class="modal-dialog modal-dialog-slideout modal-md">
         <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal"><i class="fa fa-angle-left fa-2x text-dark"></i></button>
               <div class=" col-sm-12 mx-auto">
                  <h4 class="text-center">Looking for</h4>
               </div>
               <div class="row mt-3">
                  <div class=" col-sm-11 mx-auto">
                     <table class="table gender table-borderless">
                        <tr>
                           <td class="color-grey">
                              GENDER
                           </td>
                           <td>
                              <p class="mb-0"><a href="#" class="active">ANY</a></p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 <img style="width:23px;" class="img-fluid" src="{{asset('images/male.png')}}">
                                 MALE
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 <img style="width:23px;" class="img-fluid" src="{{asset('images/male.png')}}"><br>
                                 FEMALE
                                 </a>
                              </p>
                           </td>
                        <tr/>
                        <tr>
                           <td class="color-grey">
                              WEATHER
                           </td>
                           <td>
                              <p class="mb-0"><a href="#" class="active">ANY</a></p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 <img style="width:23px;" class="img-fluid" src="{{asset('images/summer.png')}}">
                                 SUMMER
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 <img style="width:23px;" class="img-fluid" src="{{asset('images/cloud.png')}}">
                                 transitional
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 <img style="width:23px;" class="img-fluid" src="{{asset('images/winter.png')}}">
                                 WINTER
                                 </a>
                              </p>
                           </td>
                        <tr/>
                        <tr>
                           <td class="color-grey">
                              STYLE
                           </td>
                           <td>
                              <p class="mb-0"><a href="#" class="active">ANY</a></p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 FORMAL
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 $1M
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 CASUAL
                                 </a>
                              </p>
                           </td>
                        <tr/>
                        <tr>
                           <td class="color-grey">
                              CLOTHES
                           </td>
                           <td>
                              <p class="mb-0"><a href="#">ANY</a></p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 SHIRT
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 TROUSERS<br>
                                 3 colors
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 BELT
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 LINGERIE
                                 </a>
                              </p>
                           </td>
                        <tr/>
                        <tr>
                           <td class="color-grey">
                           </td>
                           <td>
                              <p class="mb-0"><a href="#">WATCH</a></p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 SUIT
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 SHORTS
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 SHOES
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 SCARF
                                 </a>
                              </p>
                           </td>
                        <tr/>
                        <tr>
                           <td class="color-grey">
                           </td>
                           <td>
                              <p class="mb-0"><a href="#">TIE</a></p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 PANTS
                                 WHITE
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 BOXERS
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 T-SHIRT
                                 </a>
                              </p>
                           </td>
                           <td>
                              <p class="mb-0">
                                 <a href="#" class="text-center">
                                 bowtie
                                 </a>
                              </p>
                           </td>
                        <tr/>
                     </table>
                  </div>
               </div>
               <div class="row">
                  <div class=" col-sm-11 mx-auto">
                     <h4 class="text-center">MATCHING</h4>
                     <div class="row">
                        <div class="col-sm-12">
                           <table class="table gender table-borderless">
                              <tr>
                                 <td class="color-grey">
                                    CLOTHES
                                 </td>
                                 <td>
                                    <p class="mb-0"><a href="#">ANY</a></p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       SHIRT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       TROUSERS<br>
                                       3 colors
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       BELT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       LINGERIE
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                 </td>
                                 <td>
                                    <p class="mb-0"><a href="#">WATCH</a></p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       SUIT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       SHORTS
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       SHOES
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       SCARF
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                              <tr>
                                 <td class="color-grey">
                                 </td>
                                 <td>
                                    <p class="mb-0"><a href="#">TIE</a></p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       PANTS
                                       WHITE
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       BOXERS
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       T-SHIRT
                                       </a>
                                    </p>
                                 </td>
                                 <td>
                                    <p class="mb-0">
                                       <a href="#" class="text-center">
                                       bowtie
                                       </a>
                                    </p>
                                 </td>
                              <tr/>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mb-4">
                  <div class=" col-sm-11 mx-auto">
                     <p class="text-center mb-0">
                        <span class="ml-2"><a href="#" type="button" class="btn btn-dark px-4">SHOW 16 RESULTS</a></span>
                     </p>
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


<!-- Notification -->
<div class="container">
   <!-- The Modal -->
   <div class="modal fade" id="notifi">
      <div class="modal-dialog modal-dialog-slideout modal-md">
         <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal"><i class="fa fa-angle-left fa-2x text-dark"></i></button>
               <div class="row mt-3">
                  <div class=" col-sm-11 mx-auto">
                     <h4 class="text-center">Notifications</h4>
                  </div>
               </div>
               <div class=" col-sm-11 mx-auto">
                  <div class="row  mt-4">
                     <div class=" col-sm-2">
                        <img class="img-fluid" src="{{asset('images/profile.png')}}">
                     </div>
                     <div class=" col-sm-7 pt-2 px-1">
                        <h6>Galfaroth followed you</h6>
                     </div>
                     <div class=" col-sm-2">
                        <a href="#" type="button" class="btn btn-dark px-4">Show</a>
                     </div>
                  </div>
               </div>
               <div class=" col-sm-11 mx-auto">
                  <div class="row mt-4">
                     <div class=" col-sm-2 ">
                        <img class="img-fluid" src="{{asset('images/profile.png')}}">
                     </div>
                     <div class=" col-sm-7 pt-2 px-1">
                        <h6>14 people clicked on your store links</h6>
                     </div>
                     <div class=" col-sm-2">
                     </div>
                  </div>
               </div>
               <div class=" col-sm-11 mx-auto">
                  <div class="row mt-4">
                     <div class=" col-sm-2 ">
                        <img class="img-fluid" src="{{asset('images/profile.png')}}">
                     </div>
                     <div class=" col-sm-7 pt-2 px-1">
                        <h6>tom@apple.com used your link to register</h6>
                     </div>
                     <div class=" col-sm-2">
                     </div>
                  </div>
               </div>
               <div class=" col-sm-11 mx-auto">
                  <div class="row mt-4">
                     <div class=" col-sm-2 ">
                        <img class="img-fluid" src="{{asset('images/profile.png')}}">
                     </div>
                     <div class=" col-sm-7 pt-2 px-1">
                        <h6>JUDY44 added 4 new hunts</h6>
                     </div>
                     <div class=" col-sm-2">
                        <a href="#" type="button" class="btn btn-dark px-4">Show</a>
                     </div>
                  </div>
               </div>
               <div class=" col-sm-11 mx-auto">
                  <div class="row mt-4">
                     <div class=" col-sm-2 ">
                        <img class="img-fluid" src="{{asset('images/profile.png')}}">
                     </div>
                     <div class=" col-sm-7 pt-2 px-1">
                        <h6>ANGIE LOVED YOUR HUNT</h6>
                     </div>
                     <div class=" col-sm-2">
                     </div>
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


<!-- MY PROFILE -->
<div class="container">
   <!-- The Modal -->
   <div class="modal  fade" id="my-profile" style="padding-right:0px;">
      <div class="modal-dialog modal-dialog-slideout modal-md">
         <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal"><i class="fa fa-angle-left fa-2x text-dark"></i></button>
               <div class="row">
                  <div class=" col-sm-11 mx-auto mt-3">
                     <h4 class="text-center">Your Profile</h4>
                  </div>
               </div>
               <div class=" col-sm-11 mx-auto">
                  <div class="row mt-4 ">
                     <div class="col-sm-3">
                        <img class="img-fluid" src="{{asset('images/profile.png')}}">
                     </div>
                     <div class=" col-sm-5">
                        <h5 class="border-bottom pb-1">
                           <input type="" name="user_name" value="{{$user->name}}">
                        </h5>
                        <p>username</p>
                     </div>
                     <div class=" col-sm-3">
                        <button id="update_user_btn" type="button" class="btn btn-dark px-4">Update</button>
                     </div>
                  </div>
               </div>
               <div class="col-sm-11 mt-4">
                  <h5 class="text-center">STATS</h5>
               </div>
               <div class="col-sm-11 mx-auto">
                  <div class="row mt-4 ">
                     <div class="col-sm-3 text-center">
                        <h5 >13</h5>
                        <p class="color-grey">FOLLOWERS</p>
                     </div>
                     <div class=" col-sm-5 text-center">
                        <h5 >3</h5>
                        <p class="color-grey text-center">published HUNTS</p>
                     </div>
                     <div class=" col-sm-3 text-center">
                        <h5 >2829</h5>
                        <p class="color-grey">LINK CLICKS</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-11 mx-auto">
                  <div class="row mt-4 ">
                     <div class="col-sm-3 text-center">
                        <p class="color-grey">INVITATION CODE</p>
                     </div>
                     <div class=" col-sm-5 text-center px-1">
                        <input type="text" class="form-control font-chnage py-3" placeholder="https://lookhunt.io/invite/fusda92">
                     </div>
                     <div class=" col-sm-3 text-center">
                        <a href="#" type="button" class="btn btn-dark px-4" style="    font-size: 11px;">
                        copy to 
                        clipboard
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-11 mx-auto mt-3">
                  <div class="row mt-4 ">
                     <div class="col-sm-6 text-center">
                        <h5>4</h5>
                        <p class="color-grey">INVITED FRIENDS</p>
                     </div>
                     <div class=" col-sm-5 text-center px-1">
                        <h5>4992</h5>
                        <p class="color-grey">TOTAL CREDITS*</p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-11 mx-auto text-center mt-3">
                  <a href="#" type="button" class="btn btn-dark px-4" style="    font-size:14px;">
                  TRANSFER 2500 credits<br> to $25 amazon gift card
                  </a>
                  <h5 class="mt-4">UPDATE PASSWORD</h5>
                  <input type="password" name="old_password" class="form-control border-top-0 border-left-0 border-right-0" id="old_password" placeholder="">
                  <label for="old_password mt-1">Old Password</label>
                  <div class="row mt-4 ">
                     <div class="col-sm-6 text-center">
                        <input type="password" name="new_password" class="form-control border-top-0 border-left-0 border-right-0" id="new_password" placeholder="">
                        <label for="new_password mt-2">New Password</label>
                     </div>
                     <div class=" col-sm-5 text-center px-1">
                        <input type="password" class="form-control border-top-0 border-left-0 border-right-0" id="retype_new_password" placeholder="">
                        <label for="retype_new_password mt-2">Retype New</label>
                     </div>
                  </div>
                  <p class="text-danger text-center" id="update-password-error"></p>
                  <div class="col-sm-11 mt-4 text-center">
                     <button type="button" id="update_password_btn" class="btn btn-dark px-4" >
                     UPDATE PASSWORD
                     </button>
                  </div>
                  <div class="col-sm-11 mt-4 ">
                     <a href="{{route('logout')}}" type="button" class="btn btn-dark px-4" >
                     SIGN OUT
                     </a>	
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


<!-- filter Style Modal -->
<div class="modal fade" id="filterStyleModal" tabindex="-1" role="dialog" aria-labelledby="filterStyleModalTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="filterStyleModalTitle">Choose Style</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <table class="table gender table-borderless">
               <tr>
                  <td class="color-grey">STYLE</td>
                  <td>
                     <p class="mb-0 select_style filter_style" data-value="A">
                        <a href="#">ANY</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_style filter_style" data-value="F">
                        <a href="#" class="text-center">FORMAL</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_style filter_style" data-value="$1M">
                        <a href="#" class="text-center">$1M</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_style filter_style" data-value="C">
                        <a href="#" class="text-center">CASUAL</a>
                     </p>
                  </td>
               <tr/>
            </table>
         </div>
      </div>
   </div>
</div>


<!-- filter Style Modal -->
<div class="modal fade" id="filterSizeModal" tabindex="-1" role="dialog" aria-labelledby="filterSizeModalTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="filterSizeModalTitle">Choose Size</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <table class="table gender table-borderless">
               <tr>
                  <td class="color-grey">SIZE</td>
                  <td>
                     <p class="mb-0 select_size filter_size" data-value="S">
                        <a href="#">S</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_size filter_size" data-value="M">
                        <a href="#">M</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_size filter_size" data-value="L">
                        <a href="#">L</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_size filter_size" data-value="XL">
                        <a href="#">XL</a>
                     </p>
                  </td>
                  <td>
                     <p class="mb-0 select_size filter_size" data-value="XXL">
                        <a href="#">XXL</a>
                     </p>
                  </td>
               <tr/>
            </table>
         </div>
      </div>
   </div>
</div>
@php
$filter_style = $filter_size = '';
if(isset($filters)){
foreach($filters as $filter_key => $filter_val){
if(isset($filter_val->style)){
$filter_style = $filter_val->style;
}
if(isset($filter_val->size)){
$filter_style = $filter_val->size;
}
}
}
@endphp
<input type="hidden" id="filter_style" value="{{$filter_style}}">
<input type="hidden" id="filter_size" value="{{$filter_size}}">
<script>
//Drag and Drop 
function dragNdrop(event) 
{
   var fileName   = URL.createObjectURL(event.target.files[0]);
   var preview    = document.getElementById("preview");
   var previewImg = document.createElement("img");
   previewImg.setAttribute("src", fileName);
   preview.innerHTML = "";
   preview.appendChild(previewImg);
}
function drag() 
{
   document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop() 
{
   document.getElementById('uploadFile').parentNode.className = 'dragBox';
}
//End Drag and Drop

//hunt deatils get ajax call
function huntDetails(id)
{
   $.ajax({
      type:'get',
      url: BaseUrl+"huntDetails/"+id,
      headers:{
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      // data:{
      //    name:$('input[name="user_name"]').val(),
      // },
      dataType: "json",
      success: function(response) 
      {
         if(response.status=='fail')
         {
            $('#login-error').html(response.message);
            return false;
         }
         else
         {
            console.log(response);
            $("#huntDetailsPostBy").text("POSTED BY: "+response.data.user_id); 
            $("#huntDetailsImage").attr("src", `${BaseUrl}hunts_images/${response.data.image_link}`);           
         }
      }
   });
}
//End Hunt Deatils get function

   $(".heart.fa").click(function() {
     $(this).toggleClass("fa-heart fa-heart-o");
   });
   
   $("#update_user_btn" ).on( "click", function() {
       $.ajax({
           type: 'PUT',
           url: BaseUrl+"user/{{$user->id}}",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           data: {
               name:$('input[name="user_name"]').val(),
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
   
   
   $( "#update_password_btn" ).on( "click", function() {
   	var old_password = $('#old_password').val();
   	var new_password = $('#new_password').val();
   	var retype_new_password = $('#retype_new_password').val();
   
   	console.log(new_password);
   	console.log(retype_new_password);
   
   	$('#update-password-error').html('');
   	if (new_password.length < 6) {
       	$('#update-password-error').html('New Password is too short.');
           return false;
       }
       if(new_password !== retype_new_password){
           $('#update-password-error').html('New Passwords do not match.');
           return false;
       }
       
       $.ajax({
           type: 'PUT',
           url: BaseUrl+"user/{{$user->id}}",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           data: {
               old_password:old_password,
               new_password:new_password,
           },
           dataType: "json",
           success: function(response) 
		   {
               if(response.status=='fail')
			   {
                   $('#update-password-error').html(response.message);
                   return false;
               }
			   else
			   {
                   window.location.href=BaseUrl+"home";
               }
           }
       });
   });
   
   $( ".select_gender" ).on( "click", function() {
   	$('.select_gender').removeClass('active');
   	$(this).addClass('active');
   });
   $( ".select_weather" ).on( "click", function() {
   	$('.select_weather').removeClass('active');
   	$(this).addClass('active');
   });
   $( ".select_style" ).on( "click", function() {
   	$('.select_style').removeClass('active');
   	$(this).addClass('active');
   });
   $( ".select_clothes" ).on( "click", function() {
   	$('.select_clothes').removeClass('active');
   	$(this).addClass('active');
   
   	$cloth_name = $(this).data('value');
   	$("#selected_clothes_name").text($cloth_name);
   });
   $( ".select_size" ).on( "click", function() {
   	$('.select_size').removeClass('active');
   	$(this).addClass('active');
   });
   
   $("#new_hunt_submit_btn").on( "click", function() {
   	var user_id = "{{$user->id}}";
	//uploadFile
   	// var new_hunt_image = $("#new_hunt_image")[0].files[0];
	var new_hunt_image = $("#uploadFile")[0].files[0];
	console.log(new_hunt_image);
   	var new_hunt_image_link = $("#new_hunt_image_link").val();
   
   	$('#new-hunt-error').html('');
   	if (!new_hunt_image && new_hunt_image_link == '') {
       	$('#new-hunt-error').html('Please Pick an image.');
           return false;
       }
   	var gender = $(".select_gender.active").data('value');
   	var weather = $(".select_weather.active").data('value');
   	var style = $(".select_style.active").data('value');
   	var size = $(".select_size.active").data('value');
   	var colour = $("#new_hunt_colour").val();
   	var price = $("#new_hunt_price").val();
   	if (price == '') {
       	$('#new-hunt-error').html('Please enter Price.');
           return false;
       }
   	var cloth = $(".select_clothes.active").data('value');
   	var cloth_link = $("#selected_clothes_link").val();
   
   	$('.send_for_approval_icon').show();
   	$("#new_hunt_submit_btn").attr('disabled','disabled');
   
   	var form = new FormData();
           form.append('user_id', user_id);
           form.append('new_hunt_image', new_hunt_image);
           form.append('new_hunt_image_link', new_hunt_image_link);
           form.append('gender', gender);
           form.append('weather', weather);
           form.append('style', style);
           form.append('size', size);
           form.append('colour', colour);
           form.append('price', price);
           form.append('cloth', cloth);
           form.append('cloth_link', cloth_link);
   
       $.ajax({
       	headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           url: BaseUrl+"hunt",
           type: "POST",
           cache: false,
           contentType: false,
           processData: false,
           data : form,
           success: function(response){
               if(response.status=='fail'){
                   $('#new-hunt-error').html(response.message);
                   return false;
               }else{
                   window.location.href=BaseUrl+"home";
               }
           }
       });
   
   });
   
   
   $(document).on('click', '.filter_style, .filter_size', function() {
   	var style = $('#filter_style').val();
   	var size = $('#filter_size').val();
   	if ($(this).hasClass('filter_style')) {
   		style = $(this).data('value');
   	}
   	if ($(this).hasClass('filter_size')) {
   		size = $(this).data('value');
   	}
   	
   	var filters = [];
   	if (style !== '') {
           filters.push({'style':style});
   	} 
   	if (size !== '') {
           filters.push({'size':size});
   	} 
   		filters = JSON.stringify(filters);
   		window.location.href = '?filters='+filters;
   
   });
</script>

