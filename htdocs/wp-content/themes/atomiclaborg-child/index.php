<?php get_header(); ?>


<!-- /Fixed navbar -->
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <?php
        $posts = query_posts(array(
            'post_type' => 'page',
            'post_status' => 'publish'
        ));
    
    	while (have_posts()) {
		the_post(); ?>
	
	<?php 
		echo get_the_ID();
		var_dump(get_field('mostrar_en_carousel_principal', get_the_ID())); 
	?>   	

    <?php }
	
	wp_reset_query();
    ?>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="../imagenes/1.jpg" alt="First slide" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Atomic Lab</h1>
                    <p>Somos átomos libres, si pudiéramos modificarnos, lo haríamos, pero crear los inventos que cambien la vida a millones de personas será suficiente.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">¿Quienes Somos?</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="../imagenes/2.jpg" alt="Second slide" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>¿Que hacemos?</h1>
                    <p>En Atomic Lab trabajamos en equipo para crear soluciones que cambien la vida a millones de personas en el mundo mediante las últimas tecnologías.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Proyectos</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="../imagenes/3.png" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Conocé Limbs</h1>
                    <p>Limbs es el proyecto de Atomic Lab que tiene por objetivo convertir a todos los chicos en superhéroes, imprimiendo y entregando de forma gratuita, prótesis de manos y brazos en 3D a todo aquel que las necesite.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Limbs</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
    <br><hr><br>
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <h2>Atomic Lab</h2>
            <center><img class="img-responsive" src="../imagenes/logo.png" width="80" height="" alt="Generic placeholder image"></center>
            <p>Somos impulsados por una necesidad incesante de superar retos, cambiarle la vida a la gente, generar impacto, inventar un mundo inventor, en Atomic creemos que tenemos las "cicatrices" para probarlo. Trabajamos en distintas áreas, como electrónica, ingeniería, robótica, programación, ciencias exactas, marketing, impresión 3D, realidad virtual y aumentada, entretenimiento y muchas otras tecnologías disruptivas emergentes.</p>
            <p><a class="btn btn-default" href="#" role="button">¡Conocenos Más!</a></p>
        </div>
        <!--<br><hr><br>-->
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Titulo 4</h2>
            <p>Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 Texto 4 .</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Titulo 5</h2>
            <p>Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 Texto 5 </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr class="featurette-divider">
            <center><h2>INVENTOS</h2></center>
            <center><h5>Unimos unos &aacute;tomos de forma creativa para formar los siguientes inventos.</h5></center>
        </div>

    </div>
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    <div class="row featurette">

        <div class="col-md-7">
            <h2 class="featurette-heading"><span class="text-muted">#Limbs</span></h2>
            <p class="lead">Es el proyecto de Atomic Lab que tiene por objetivo convertir a todos los chicos en superhéroes, imprimiendo y entregando de forma gratuita, prótesis de manos y brazos en 3D a todo aquel que las necesite. Más información en http://limbs.earth</p>
        </div>
        <div class="col-md-5">
            <!--<div class="col-md-5 col-md-pull-7">-->
            <img src="../imagenes/Atomic-Podcast.png" width="330" height="245" alt="Generic placeholder image">
            <!--</div>-->
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading"> <span class="text-muted">#Unblinder</span></h2>
            <p class="lead">Aplicación especialmente desarrollada para no videntes, solamente sacando una foto te avisará mediante voz qué es lo que estás viendo, podrás diferenciar desde una manzana verde contra una roja, como así también si un frasco dice “Shampoo” o “Acondicionador”.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">

        <div class="col-md-7">
            <h2 class="featurette-heading"><span class="text-muted">#BraileDinámico</span></h2>
            <p class="lead"> Un dedal que permite traducir un texto plano (ej: desde un libro) a braille</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading"> <span class="text-muted">#LowCost3Dprinter</span></h2>
            <p class="lead">Una impresora 3D de bajo costo, para que todos puedan tener acceso a esta tecnología.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img src="../imagenes/Atomicprinter.png" width="330" height="245" alt="Generic placeholder image">
        </div>
    </div>

    <!--<hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>-->
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

<?php get_footer(); ?>
