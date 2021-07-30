

<?php get_header(); ?>


<div class="container resultadosDeBusqueda">
    <div class="row">
        <div class="col">


        <?php if ( have_posts() ) : ?>
	    <?php while ( have_posts() ) : the_post(); ?>    
        <div class="linkResultados">
	      <a href="<?php the_permalink(); ?>"><h2 class="titulo"><?php the_title(); ?></h2></a>
        </div>
        <br>
        <hr>
	    <?php endwhile; ?>
        <?php else: ?>
            <h5 class="noEncontrado">No results found ...</h5>
        <?php endif; ?>

        </div>
    </div>
</div>





    <!-- NUESTRO EQUIPO -->
    <?php include("includes/nuestro-equipo.php"); ?>
    <!-- /NUESTRO EQUIPO -->


    <!-- BANNER HERRERO -->
    <section class="bannerHerrero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion">HERRERO</h2>
                    <button type="button" class="boton">VER COLECCION COMPLETA</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER HERRERO -->


    <!-- BANNER COMING SOOM -->
    <section class="bannerComingSoom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>COMING SOOM</h2>
                    <button type="button" class="boton">VER COLECCION COMPLETA</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER COMING SOOM -->


    <!-- HOME & DECOR -->
    <section class="bannerHomeDecor">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion">HOME & DECOR</h2>
                    <button type="button" class="boton">VER COLECCION COMPLETA</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /HOME & DECOR -->
        
    <!-- ALGO SOBRE EL CREADOR -->
    <?php include("includes/algo-sobre-el-creador.php"); ?>
    <!-- /ALGO SOBRE EL CREADOR -->

    <!-- NUESTROS CLIENTES -->
    <?php include("includes/nuestros-clientes.php"); ?>
    <!-- /NUESTROS CLIENTES -->


    <?php get_footer(); ?>