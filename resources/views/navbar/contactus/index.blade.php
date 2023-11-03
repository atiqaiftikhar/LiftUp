
@extends('layouts.masterfront')
@section('content')





 <!-- Contact Section -->
 <section class="contact-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Contact US</h2>
            <div class="separator"><span class="flaticon-settings-2"></span></div>
        </div>

         <div class="contact-form">
            <form method="post" action="sendemail.php" id="contact-form">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group pull-right">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Name" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" placeholder="Phone No" required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <button type="submit" name="submit-form">send Massage</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>

        <div class="contact-info">
            <div class="row clearfix">
                <div class="image-column col-lg-8 col-md-12 col-sm-12">
                    <figure><img src="{{asset('assetsfront/images/redcar.png')}}" alt=""></figure>
                </div>

                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>
                            <span class="icon flaticon-placeholder"></span>
                            <p><strong>Address:</strong><br>13005 Greenville Avenue California.</p>
                        </li>

                        <li>
                            <span class="icon flaticon-phone"></span>
                            <p><strong>Phone:</strong>+1 800125 6524</p>
                            <p><span>Email:</span><a href="#">mail@autowork.com</a></p>
                        </li>

                        <li>
                            <span class="icon flaticon-stopwatch"></span>
                            <p><strong>Workshop Timeing :</strong><br>  10:00am to 6:00pm  Sunday Closed</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->

<!-- Contact Map Section -->
<section class="contact-map-section">
    <!--Map Outer-->
    <div class="map-outer">
        <!--Map Canvas-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s" height="400" style="border:0;"></iframe>
    </div>
</section>
<!-- End Map Section -->











@endsection
