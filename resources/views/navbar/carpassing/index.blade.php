@extends('layouts.masterfront')
@section('content')
<br>
<br>
<div class="container">
       <div class="card" style="">

        <div class="card-body "  >
            <div row mt-5 >
                <div col-md-6>
                    <h2 class="mt-2">Car Passing</h2>
                    <img style="max-width :500px;width: 100%;" src="https://towr.ae/images/car-3.png" alt="">

                </div>
                <div col-md-6  style="background: #EDEFFB;">

                           <p class="p-2">If your car needs a quick car wash and you’re too busy to get to the service station yourself, we’ve got a solution for you. You can book a mobile car wash in just a few clicks and get your car washed at your doorstep. Now that’s what you call happiness!
                           </p>


                </div>
            </div>


        </div>
    </div>



{{--  card 2--}}
<br>
<br>


<div class="row">

    <div class="col-md-6">

        <div class="card" style="">

            <div class="card-body "  >


                    <div class="row height d-flex justify-content-center align-items-center">

                        <div class="col-md-8">

                             <div class="search">
                                <i class="fa fa-search"></i>
                                 <input type="text" class="form-control" placeholder="Select Pickup Location">

                             </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                        </div>
                      </div>


                    <div class="container top100">

                        <div class="row">
                          <style>#map{height:400px;width:100%}</style>
                            <div class="col">


                                        <!--Google map-->
                                <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                                  <iframe style="height: 100% ; width:100%" src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                   style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>


                    </div>
                     <!--Google Maps-->
                     <br>


<div class="row">
    {{-- buttons --}}
    <div class="col-md-4">
        <a href="" class="btn btn-danger">Normal</a>
    </div>
    <div class="col-md-4">
        <a href="" class="btn btn-danger">Flat</a>
    </div>
    <div class="col-md-4">
        <a href="" class="btn btn-danger">Box</a>
    </div>

</div>


            </div>
        </div>
    </div>

        <div class="col-md-6">

            <div class="card" style="">

                <div class="card-body "  >


                            <div class="row height d-flex justify-content-center align-items-center">

                                <div class="col-md-8">

                                   <div class="search">
                                     <i class="fa fa-search"></i>
                                     <input type="text" class="form-control" placeholder="Select drop Location">
                                    </div>
                                </div>
                                  <div class="col-md-4">
                                      <button class="btn btn-primary"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                   </div>
                               </div>
                           </div>


                                <div class="container top100">

                                  <div class="row">
                                      <style>#map{height:400px;width:100%}</style>
                                        <div class="col">


                                            <!--Google map-->
                                         <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                                             <iframe style="height: 100% ; width:100%" src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                              style="border:0" allowfullscreen></iframe>
                                          </div>
                                      </div>
                                 </div>
                             </div>
                          <!--Google Maps-->
                          <br>


                          <div class="row">
                            {{-- buttons --}}
                            <div class="col-md-4">
                                <a href="" class="btn btn-danger">Normal</a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="btn btn-danger">Flat</a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="btn btn-danger">Box</a>
                            </div>

                        </div>






                </div>
            </div>


        </div>



</div> {{-- row div --}}





</div>


<br>
<br>

@endsection
