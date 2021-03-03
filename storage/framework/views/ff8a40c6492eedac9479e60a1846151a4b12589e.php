

<?php $__env->startSection('content'); ?>

<!--background Image section -->
    <section class="heading-container">

        <h2 class="myclass">Get In Touch With Us Today</h2>
        <p class="text4"><span><img src="<?php echo e(asset('images/phone.png')); ?>"class="img-responsive">
        </span> Contact us online or speak to our engineer directly</p>
    </section>



    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="contact-container">
                    <h3 class="main-heading">Contact</h3>
                     <p class="p-class">For more information about the CCTV systems that we provide in ojur region, please don’t hesitate to get in touch with us. We are available to carry out free site surveys directly at your home or place of work, providing you with a free, no obligation quote.</p>
                    <h6 class="head"><strong>Telephone:</strong><h6>
                    <p class="b3"><span>+91-90099009</span></p>
                    <h6 class="email-head"><strong>Email:</strong><h6>
                    <p class="b1"><span>info@domain.com</span></p>
                    <h6 class="address-head"><strong>Head Office</strong></h6>
                    <p class="b2"><address>
                                    <h6 class="line1"> DD/C-3 akashvani staff quarters</h6>
                                    <h6 class="line2">Pin Code:452001</h6>
                                </address>
                    </p>           
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->

     
         <div class="col-lg-6" id="form-container">
            <div class="contact-form">
                <form id="form" action="mailto:info@domain.com?subject=myform_submission" method="post" enctype="text/plain">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name*">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your calling number*">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="postalcode" name="postalcode" placeholder="PostalCode">
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment" placeholder="write message"></textarea>
                    </div>
    
                    <div class="form-check">
                         <label class="form-check-label">
                         <input type="checkbox" class="form-check-input" value="">cctv installation
                         </label>
                    </div>  
                    <div class="form-check">
                         <label class="form-check-label">
                         <input type="checkbox" class="form-check-input" value="">cctv maintainence
                         </label>
                    </div>
                    <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">others
                            </label>
                    </div>
                    <div class="button">
                        <a href="mailto:info@domain.com" class="btn btn-primary">Submit Request
                        </a>
                    </div>
                 
                </form>
         
            </div> <!-- end of image-container -->
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->

    <div class="map-header"> 
        <h6 class="location">You Can Find Our Location In Map</h6>   
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="1090" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=doordarshan%20quarters%20indore%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://2piratebay.org">oeps</a>
            </div>
        </div>
    <div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('upper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\laravel\cctv\resources\views/contactus.blade.php ENDPATH**/ ?>