<?php $__env->startSection('content'); ?>
<?php /* <?php echo $__env->make('alertas.exito', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> */ ?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php echo $__env->make('carousel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->

<div class="container" id= "empresa">
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenidos la documentación de la practica 1
            </h1>
        </div>
        <div class="col-lg-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>   
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
	interval: 5000 //changes the speed
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>