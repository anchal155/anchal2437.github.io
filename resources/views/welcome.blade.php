@extends('upper')

@section('content')

<!--- preloader div -->

<div id="loader-wrapper">
  <div id="loader"></div>
    <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
</div>

<!---navigation bar header container -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="text-container">
                        <h1><span class="text">Complete CCTV <a class="typewrite" data-period="2000"     data-type=' ["Camera.", "systems." ]'>
                            <span class="wrap"></span></a>
                        </h1>
                        <p class="p-large"> We want your home to be safe and secured</p>
                            <a href="/aboutus">
                                <button type="button" class="btn btn-primary justify-content center">Learn  More About us</button>
                            </a>
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('images/image33.jpg')}}" alt="alternative" >
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
    <!-- end of header -->

    
<!---container of 2nd section -->
<div class="container">
    <h2 class="header-container">Who We Are? </h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="section-container-fluid">
                    <h5 class="text1">CCTV Installation & Maintainence Services</h5>
                    <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</P> 
                    <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</P> 
                            
                </div> <!-- end of section-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="section1-container-fluid px-0">
                    <img class="img-fluid" src="{{asset('images/camera.png')}}" alt="alternative">
                </div> <!-- end of text2-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
</div> <!-- end of container -->

<!--cards container -->

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="mycontainer-container-fluid">
                <img class="img-fluid" src="{{asset('images/cctv8.png')}}" alt="alternative">
            </div> <!-- end of mycontainer-container -->
        </div> <!-- end of col -->
        
        <div class="col-lg-6">
            <div class="mycontainer1-container-fluid px-0">
                <h5 class="text1">Why Choose Us ?</h5>
                    <ul id="serviceid">
                        <li><span><img src="{{asset('images/cctv27.png')}}">Highly experienced team to guide & assist your requirements. No high pressure sales</span></li>
                        <li><span><img src="{{asset('images/cctv28.png')}}"></span>Our surveyor will visit your premises and discuss your needs</li>
                        <li><span><img src="{{asset('images/cctv29.png')}}"></span>Latest equipment to protect your property</li>
                        <li><span><img src="{{asset('images/cctv30.png')}}"></span>Full installation & maintenance service from our own engineers</li>
                    </ul>   
            </div> <!-- end of text2-container -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->


<!-- services-->
<section id="services" class="pb-5">
    <div class="container">
        <h5 class="section-title">Our Offerings</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-deck">
                    <!-- Card -->
                        <div class="card">
                            <img class="card-image-top" src="{{ asset('images/imag2.jpg') }}" alt="alternative" style="height:50%;">
                            <div class="card-body p-2 my-4">
                                <h6 class="card-title">CCTV Camera Installation </h6>
                                <p>Our team of enthusiastic advocates will analyse and evaluate your matter and come up with concrete solution</p>
                            </div>
                        </div>
                    <!-- end of card1 -->

                    <!-- Card -->
                        <div class="card">
                            <img class="card-image-top" src="{{ asset('images/cctv camera repair.jpg') }}" alt="alternative" style="height:50%">
                            <div class="card-body p-2 my-4">
                                <h6 class="card-title">CCTV camera repair.</h6>
                                <p>We deal in all matters relating to Real Estate including RERA , CREDAI, etc.</p>
                            </div><!--end of card-body -->
                        </div>
                    <!-- end of card2 -->

                    <!-- Card -->
                        <div class="card">
                            <img class="card-image-top" src="{{ asset('images/survillence.jpg') }}" alt="alternative">
                            <div class="card-body p-2 my-4">
                                <h6 class="card-title">Optimization of surveillance cameras.</h6>
                                <p>We provide comprehensive legal services to our clients under litigation of Civil aw in all stream </p>
                             </div> <!---card-body -->
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-deck" id="row2">
                    <!-- Card -->
                        <div class="card">
                            <img class="card-image-top" src="{{ asset('images/image32.jpg') }}" alt="alternative">
                            <div class="card-body p-2 my-4">
                                <h6 class="card-title">CCTV Camera service</h6>
                                <p>We deal in all matters relating to Real Estate including RERA , CREDAI, etc.</p>
                            </div>
                        </div>
                    <!-- end of card -->

                    <!-- Card -->
                        <div class="card">
                                <img class="card-image-top" src="{{ asset('images/image30.jpg') }}" alt="alternative" style="max-height:50%;">
                                <div class="card-body p-2 my-4">
                                    <h6 class="card-title">Repairs regarding DVR and their connections.</h6>
                                    <p>thhrphphphpsbhn lnbphg[oj[ofjphvp</p>
                                </div>  
                        </div>
                    <!-- end of card -->

                    <!-- Card -->
                        <div class="card">
                            <img class="card-image-top" src="{{ asset('images/image31.jpg') }}" alt="alternative">
                            <div class="card-body p-2 my-4">
                                <h6 class="card-title">Configuration of IP cameras.</h6>
                                <p>We provide comprehensive legal services to our clients under litigation of Civil Law in all stream </p>
                            </div>
                        </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> 
    </div> <!-- end of container -->
</section>

      
<!--contact jumbotron --> 
<div class="jumbotron">
    <div class="container">
        <h5 class="header">NEED TO TALK TO AN EXPERT</h5>   
        <p>See how one of our experts can help you today !</p>
        <a href= "/contactus" button type="button" class="btn btn-secondary btn-large">Contact us </a>
    </div>
</div>

<!--section-4 container -->
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="img-container">
                <img class="img-fluid" src="{{asset('images/house1.png')}}" alt="alternative">
            </div> <!-- end of image-container -->
        </div> <!-- end of col -->

        <div class="col-lg-6">
            <div class="mycontainer">
                <h5 class="title-container">CCTV Installation services</h5>
                    <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        
            </div> <!-- end of title-container -->
        </div>
    </div> <!-- end of row -->
</div> <!-- end of container -->
  
  @endsection