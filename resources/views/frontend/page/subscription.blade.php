@extends("frontend.layouts.master")

@section("content")


<!-- Hero Start -->
<div class="container-fluid bg-light mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1">Subscription</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="index">Home</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Subscription</li>
        </ol>
    </div>
</div>
<!-- Hero End -->

<!-- Service Start -->
<div class="container-fluid service">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5">We Have 04 Subscription systems</h1>
        </div>
        <div class="row g-4 display-block">
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInRight" data-wow-delay="0.1s">
                <div class="bg-wheat rounded service-item subscription">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <div class="pricing pricing-theme">
                                <div class="pricing-item">
                                  <h3 class="pricing-title">Basic</h3>
                                  <div class="pricing-price"><span class="pricing-currency">$</span>9.90</div>
                                  <p class="pricing-sentence">Become Our Regular Client</p>
                                  <ul class="pricing-feature-list">
                                    <li class="pricing-feature">Order Anytime</li>
                                    <li class="pricing-feature">Multiple Food Order</li>
                                    <li class="pricing-feature">Food-Order for Occation</li>
                                    <li class="pricing-feature">Birthday/Annivarsary Gift</li>
                                    <li class="pricing-feature">1GB of storage space</li>
                                    <li class="pricing-feature">Unlimited calls</li>
                                  </ul>
                                  <button onclick="showBasicModal()" id="id01" class="pricing-action">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInDown" data-wow-delay="0.3s">
                <div class="bg-wheat rounded service-item subscription">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <div class="pricing pricing-theme">
                            <div class="pricing-item">
                                <h3 class="pricing-title">Standard</h3>
                                <div class="pricing-price"><span class="pricing-currency">$</span>29.90</div>
                                <p class="pricing-sentence">Become Our Standard Client</p>
                                <ul class="pricing-feature-list">
                                  <li class="pricing-feature">Order Anytime</li>
                                  <li class="pricing-feature">Multiple Food Order</li>
                                  <li class="pricing-feature">Food-Order for Occation</li>
                                  <li class="pricing-feature">Birthday/Annivarsary Gift</li>
                                  <li class="pricing-feature">1GB of storage space</li>
                                  <li class="pricing-feature">Unlimited calls</li>
                                </ul>
                                <button onclick="showStandardModal()" class="pricing-action">Subscribe</button>
                            </div>
                        </div>

   </div>                 </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                <div class="bg-wheat rounded service-item subscription">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <div class="pricing pricing-theme">
                            <div class="pricing-item">
                                <h3 class="pricing-title">Premium</h3>
                                <div class="pricing-price"><span class="pricing-currency">$</span>59.90</div>
                                <p class="pricing-sentence">Gigantic business solution</p>
                                <ul class="pricing-feature-list">
                                    <li class="pricing-feature">Unlimited calls</li>
                                    <li class="pricing-feature">Free hosting</li>
                                    <li class="pricing-feature">Unlimited hours of support</li>
                                    <li class="pricing-feature">Social media integration</li>
                                    <li class="pricing-feature">Analytics integration</li>
                                    <li class="pricing-feature">Unlimited storage space</li>
                                </ul>
                                <button onclick="showPremiumModal()" class="pricing-action">Subscribe</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInLeft" data-wow-delay="0.7s">
                <div class="bg-wheat rounded service-item subscription">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <div class="pricing pricing-theme">
                                <div class="pricing-item">
                                    <h3 class="pricing-title">Pro</h3>
                                    <div class="pricing-price"><span class="pricing-currency">$</span>70.55</div>
                                    <p class="pricing-sentence">Gigantic business solution</p>
                                    <ul class="pricing-feature-list">
                                        <li class="pricing-feature">Unlimited calls</li>
                                        <li class="pricing-feature">Free hosting</li>
                                        <li class="pricing-feature">Unlimited hours of support</li>
                                        <li class="pricing-feature">Social media integration</li>
                                        <li class="pricing-feature">Analytics integration</li>
                                        <li class="pricing-feature">Unlimited storage space</li>
                                    </ul>
                                    <button onclick="showProModal()" class="pricing-action">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- modal start -->
<div id="id01" class="modal">
    <form class="modal-content animate" action="" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!-- <img src="img/foody.png" alt="logo" class="avatar"> -->
            <h1 class="display-5">Subscription Form</h1>
            <h3 class="text-head">Selected Plan: Basic</h3>
            <h3 class="pricing-title-modal">Plan Price: $90.9</h3>
        </div>

        <div class="container">
            <div class="row g-4 form">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <input type="name" class="form-control border-primary p-2" placeholder="Your Name">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="file" class="form-control border-primary p-2" placeholder="Your Contact No.">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="note" class="form-control border-primary p-2" placeholder="note">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="id02" class="modal">
    <form class="modal-content animate" action="" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!-- <img src="img/foody.png" alt="logo" class="avatar"> -->
            <h1 class="display-5">Subscription Form</h1>
            <h3 class="text-head">Selected Plan: Standard</h3>
            <h3 class="pricing-title-modal">Plan Price: $29.90</h3>
        </div>

        <div class="container">
            <div class="row g-4 form">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <input type="name" class="form-control border-primary p-2" placeholder="Your Name">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="file" class="form-control border-primary p-2" placeholder="Your Contact No.">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="note" class="form-control border-primary p-2" placeholder="note">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="id03" class="modal">
    <form class="modal-content animate" action="" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!-- <img src="img/foody.png" alt="logo" class="avatar"> -->
            <h1 class="display-5">Subscription Form</h1>
            <h3 class="text-head">Selected Plan: Premium</h3>
            <h3 class="pricing-title-modal">Plan Price: $59.90</h3>
        </div>

        <div class="container">
            <div class="row g-4 form">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <input type="name" class="form-control border-primary p-2" placeholder="Your Name">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="file" class="form-control border-primary p-2" placeholder="Your Contact No.">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="note" class="form-control border-primary p-2" placeholder="note">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="id04" class="modal">
    <form class="modal-content animate" action="" method="post">

        <div class="imgcontainer">
            <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
            <!-- <img src="img/foody.png" alt="logo" class="avatar"> -->
            <h1 class="display-5">Subscription Form</h1>
            <h3 class="text-head">Selected Plan: Pro</h3>
            <h3 class="pricing-title-modal">Plan Price: $70.55</h3>
        </div>

        <div class="container">
            <div class="row g-4 form">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <input type="name" class="form-control border-primary p-2" placeholder="Your Name">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="email" class="form-control border-primary p-2" placeholder="Enter Your Email">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="mobile" class="form-control border-primary p-2" placeholder="Your Contact No">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="date" class="form-control border-primary p-2" placeholder="Select Date">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="file" class="form-control border-primary p-2" placeholder="Your Contact No.">
                </div>
                <div class="col-lg-6 col-md-6">
                    <input type="note" class="form-control border-primary p-2" placeholder="note">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Submit Now</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

