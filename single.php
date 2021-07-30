<?php get_header(); ?>


<!-- Submenu -->
<?php include("includes/submenu.php"); ?>
<!-- /Submenu -->


<div class="container-fluid detallePost mt-5 mb-5">
    <div class="row">
        <div class="col-12 col-md-6 colImg">
            <?php while (have_posts()) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } ?>
        </div>

        <div class="col-12 col-md-6">
          <h2 class="tituloSingle"><?php the_title(); ?></h2>
          <p class="textoSingle"><?php the_content(); ?></p>
          <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- ALGO SOBRE EL CREADOR -->
<?php include("includes/algo-sobre-el-creador.php"); ?>
<!-- /ALGO SOBRE EL CREADOR -->

<!-- NUESTROS CLIENTES -->
<?php include("includes/nuestros-clientes.php"); ?>
<!-- /NUESTROS CLIENTES -->


<?php get_footer(); ?>