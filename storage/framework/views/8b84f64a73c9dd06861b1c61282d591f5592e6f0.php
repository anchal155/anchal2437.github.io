<!--navigation header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">
            <img src="<?php echo e(asset('images/logo1.png')); ?>">CCTV Security System</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a href="/aboutus" class="nav-link text-uppercase font-weight-bold">About Us</a></li>
                <li class="nav-item"><a href="/contactus" class="nav-link text-uppercase font-weight-bold">Contact Us</a></li>
                <li class="nav-item"><a href="/news" class="nav-link text-uppercase font-weight-bold">News</a></li>
                <li class="nav-item dropdown">
                    <a href="/services" class="nav-link dropdown-toggle text-uppercase font-weight-bold" data-toggle="dropdown">Services</a>
                    <!---drop-down menu links-->
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item" data-trigger="hover" 
                                data-target="#myModal" data-toggle="modal" onclick="showModal('data')">Camera installation</a>
                            <a href="#" class="dropdown-item"data-trigger="hover" 
                                data-target="#myModal" data-toggle="modal"onclick="clickModal('variable')">Camera Repairing</a>
                            <a href="#" class="dropdown-item"data-trigger="hover" 
                               data-target="#myModal" data-toggle="modal"onclick="seeModal('data')">Survillence camera</a>
                            <a class="dropdown-item"data-trigger="hover" 
                                data-target="#myModal" data-toggle="modal"onclick="createModal('data')">CCTV Camera service</a>
                            <a href="#"class="dropdown-item"data-trigger="hover" 
                                data-target="#myModal" data-toggle="modal"onclick="displayModal('data')">DVR repairs</a>
                            <a href="#"class="dropdown-item"data-trigger="hover" 
                               data-target="#myModal" data-toggle="modal"onclick="myModal('data')">Configuration of Ip Cameras</a>
                        </div>
                </li><!--closure of li dropdow link -->
            </ul>
        </div>
        </div>
    </nav><!--closure of navigation bar -->
</header>


<!--- Modal box---->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
    <!--Modal Heading -->
                <h4 class="modal-title" id="myModalLabel"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
            </div> <!--end of modal header-->
        <div class="modal-body">
            <p id="desc">
            </p>
        </div> <!--end of model body-->
        <!--Modal Footer-->
    
      <div class="modal-footer">
        <h6>For More Information Get in Touch With Us</h6>
        <a href ="/contactus">
        <button type="button" class="btn btn-primary">Contact Us</button>
        </a>
      </div> <!--end of modal footer-->
    </div><!--end of modal content -->
  </div> <!---end of modal-dialog-->
</div><!---end of main div container-->

    <?php /**PATH C:\Users\anchal\Desktop\laravel\cctv\resources\views/common/header.blade.php ENDPATH**/ ?>