<!Doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    
    <!--boostrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--required jquery libraries of bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
               
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    
    <!---external stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/loader.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>" type="text/css">    
    <link rel="stylesheet" href="<?php echo e(asset('css/modal.css')); ?>" type="text/css">    

    <!--external Javascript file -->  
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
  
    <script src="https://kit.fontawesome.com/50473a9a97.js" croossorigin="anonymous"></script>   

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Anchal Mantri">

    <meta name="description" content="CCTV Security System one of the best service installation system whre you will get all the facilities,we want your home to be safe and secured">

    <title>CCTV Security System</title>
    <link rel = "icon" href =  "<?php echo e(asset('images/logo3.png')); ?>" type = "image/x-icon"> 
   
  </head>

  <body>

    <?php echo $__env->make('common/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('common/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </body>
</html><?php /**PATH C:\Users\anchal\Desktop\laravel\cctv\resources\views/upper.blade.php ENDPATH**/ ?>