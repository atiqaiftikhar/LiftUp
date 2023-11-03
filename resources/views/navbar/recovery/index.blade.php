@extends('layouts.masterfront')
@section('content')

 <!-- Services Section Two -->
 <section class="services-section-two alternate">
    <div class="auto-container">
        <section class="feature-section">
            <div class="auto-container">
                <div class="title-box">
                    <h2>Car Recovery & Transport</h2>
                </div>
            </div>
        <div class="services-list">
            <div class="row clearfix">
            <!-- Services List -->
                <div class="service col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-gas-pump"></span></div>
                        <h3><a href="" onclick="myFunction()" >Normal</a></h3>
                        <p>We will put together a detailed ...</p>
                    </div>
                </div>

                <div class="service col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-transport-3"></span></div>
                        <h3><a href="" onclick="myFunction()">Flat</a></h3>
                        <p>Using the outcomes from the Analysis,</p>
                    </div>
                </div>

                <div class="service col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-battery-1"></span></div>
                        <h3><a href="" onclick="myFunction()" >Box</a></h3>
                        <p>our virtual are highly experienced.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section Two -->
<div class="container-fluid" >
    <div class="card" >
        <div class="card-body "  >
           <div class="container">
            <div class="auto-container">
                <div class="title-box">
                </div>
            </div>
        <div class=row>
            <div class="col-md-6 " >

                <h2>Car Recovery & Transport</h2>
                <p class="p-2">Need to get your car from point A to point B? Towr has got it. You can
                    send your car
                    to
                    the workshop for a regular
                    maintenance and get it back at your doorstep. Towr gives you the flexibility to
                    schedule
                    it beforehand so you can plan
                    your car check-up in advance and get it done without having to go out of your home.
                    Not
                    impressed yet? Towr offers
                    different types of towing trucks to match your car type so that you can transport
                    your
                    luxury cars safely and in style.</p>


            <ol>
                In brief, we have
                <li>Extensive car recovery experience</li>
                <li>Expertise in a wide range of cars</li>
                <li>24 hour car recovery</li>
                <li>On-request service available</li>
                <li>Affordable car recovery services</li>


            </ol>
        </div>
            <div class="col-md-6">
                <img style="max-width :500px;width: 100%;" src="{{asset('assetsfront/images/recovery1.png')}}" alt="">

            </div>

        </div>
        <div class=row>
            <div class="col-md-6">
                <img style="max-width :500px;width: 100%;" src="{{asset('assetsfront/images/recovery2.png')}}" alt="">

            </div>
            <div class="col-md-6 " >

                <p class="p-2">Need to get your car from point A to point B? Towr has got it. You can
                    send your car
                    to
                    the workshop for a regular
                    maintenance and get it back at your doorstep. Towr gives you the flexibility to
                    schedule
                    it beforehand so you can plan
                    your car check-up in advance and get it done without having to go out of your home.
                    Not
                    impressed yet? Towr offers
                    different types of towing trucks to match your car type so that you can transport
                    your
                    luxury cars safely and in style.</p>


            <ol>
                In brief, we have
                <li>Extensive car recovery experience</li>
                <li>Expertise in a wide range of cars</li>
                <li>24 hour car recovery</li>
                <li>On-request service available</li>
                <li>Affordable car recovery services</li>


            </ol>
        </div>


        </div>


        </div>

           </div>
    </div>

</div>
<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Contact Info Block -->
            <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon flaticon-placeholder"></span>
                    <p>13005 Greenville Avenue <br> California, TX 70240</p>
                </div>
            </div>

            <!-- Contact Info Block -->
            <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon flaticon-phone"></span>
                    <p>+1 800125 6524</p>
                    <p><a href="#">mail@autowork.com</a></p>
                </div>
            </div>

            <!-- Contact Info Block -->
            <div class="contact-info-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon flaticon-stopwatch"></span>
                    <p>10:00am to 6:00pm</p>
                    <p>Sunday Closed</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Section -->








<script>
function myFunction() {
  alert(
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
                 </div>);
}
</script>






@endsection
