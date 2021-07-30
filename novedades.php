<?php 

/*
Template Name: novedades
*/

?>


<?php get_header(); ?>
    

    <!-- HERO NOVEDADES -->
    <section class="heroNovedades">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">NEWS</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-novedades' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /HERO NOVEDADES -->    

    <!-- PRODUCTOS HOME & DECOR -->
    <section class="productos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 efetoImg">
                    <a href="<?php echo esc_url( home_url( '/catalogo-novedades' ) ); ?>">
                       <?php query_posts('category_name=imagen-novedades-1&showposts=5'); ?>
                       <?php while (have_posts()) : the_post(); ?>
                       <?php if ( has_post_thumbnail() ) {
                         the_post_thumbnail();
                       } ?>
                       <p class="texto"><?php the_content(); ?></p>
                       <h2><?php the_title(); ?></h2>
                       <?php endwhile; ?>
                    </a>
                </div>
                <div class="col-12 col-md-6 efetoImg">
                    <a href="<?php echo esc_url( home_url( '/catalogo-novedades' ) ); ?>">
                       <?php query_posts('category_name=imagen-novedades-2&showposts=5'); ?>
                       <?php while (have_posts()) : the_post(); ?>
                       <?php if ( has_post_thumbnail() ) {
                         the_post_thumbnail();
                       } ?>
                       <p class="texto"><?php the_content(); ?></p>
                       <h2><?php the_title(); ?></h2>
                       <?php endwhile; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /PRODUCTOS HOME & DECOR -->


    <!-- HOME & DECOR -->
    <section class="bannerHomeDecor">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">HOME & DECOR</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-home-decor' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /HOME & DECOR -->

    <!-- NUESTRO EQUIPO -->
    <?php include("includes/nuestro-equipo.php"); ?>
    <!-- /NUESTRO EQUIPO -->


    <!-- BANNER HERRERO -->
    <section class="bannerHerrero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">HERRERO</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-herrero' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
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
                    <h2 class="textoPresentacion textoPresentacionResponsive">COMING SOON</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-comming-soom' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER COMING SOOM -->


    <!-- BANNER SERVICIOS -->
    <section class="bannerServicios">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">SERVICES</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-servicios' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER SERVICIOS -->

    <!-- BANNER ANTIQUE DOORS -->
    <section class="bannerAntiqueDoors">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">ANTIQUE DOORS</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-antique-doors' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER ANTIQUE DOORS -->


    <!-- ALGO SOBRE EL CREADOR -->
    <?php include("includes/algo-sobre-el-creador.php"); ?>
    <!-- /ALGO SOBRE EL CREADOR -->

    <!-- NUESTROS CLIENTES -->
    <?php include("includes/nuestros-clientes.php"); ?>
    <!-- /NUESTROS CLIENTES -->

    <?php get_footer(); ?>