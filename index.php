

<?php get_header(); ?>
    

    <!-- HERO ANTIQUE DOORS -->
    <section class="heroAntiqueDoors">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">ANTIQUE WOOD DOORS</h2>
                    <a href="<?php echo esc_url( home_url( '/woods-doors' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /HERO ANTIQUE DOORS -->

    <!-- PRODUCTOS HOME & DECOR -->
    <section class="productos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 efetoImg">
                    <a href="<?php echo esc_url( home_url( '/double-entry-door' ) ); ?>">
                      <?php query_posts('category_name=imagen-antique-doors-1&showposts=1'); ?>
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
                    <a href="<?php echo esc_url( home_url( '/single-entry-door' ) ); ?>">
                      <?php query_posts('category_name=imagen-antique-doors-2&showposts=1'); ?>
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

    <!-- PRODUCTOS HOME & DECOR -->
        <section class="productos">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 efetoImg">
                    <a href="<?php echo esc_url( home_url( '/glass-door' ) ); ?>">
                      <?php query_posts('category_name=imagen-antique-doors-3&showposts=1'); ?>
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
                    <a href="<?php echo esc_url( home_url( '/barn-door' ) ); ?>">
                      <?php query_posts('category_name=imagen-antique-doors-4&showposts=1'); ?>
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

    <!-- BANNER LANDMARK -->
    <section class="bannerLandmark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="textoPresentacion textoPresentacionResponsive">LANDMARK</h2>
                    <a href="<?php echo esc_url( home_url( '/catalogo-landmark' ) ); ?>"><button type="button" class="boton">VIEW COLLECTION</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER LANDMARK -->

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
        
    <!-- ALGO SOBRE EL CREADOR -->
    <?php include("includes/algo-sobre-el-creador.php"); ?>
    <!-- /ALGO SOBRE EL CREADOR -->

    <!-- NUESTROS CLIENTES -->
    <?php include("includes/nuestros-clientes.php"); ?>
    <!-- /NUESTROS CLIENTES -->


    <?php get_footer(); ?>