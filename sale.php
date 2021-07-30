<?php 

/*
Template Name: sale
*/

?>

<?php get_header(); ?>


<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <h2 class="bigTitle"><?php the_title(); ?></h2>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col-12 col-md-2 colGaleria">
      <?php query_posts('category_name=catalogo-sale-col1&showposts=1000'); ?>
       <?php while (have_posts()) : the_post(); ?>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
        <h2 class="tituloPublicacion"><?php the_title(); ?></h2>
        <!-- CAMPOS PERSONALIZADOS 1 -->
        <p class="Descripcion">
        <?php 
         $cf_code = get_post_meta( get_the_ID(), 'Code', true );
         $cf_height = get_post_meta( get_the_ID(), 'Height', true );
         $cf_large = get_post_meta( get_the_ID(), 'Large', true );
         $cf_material = get_post_meta( get_the_ID(), 'Material', true );
         $cf_precio = get_post_meta( get_the_ID(), 'Precio', true );
         $cf_width = get_post_meta( get_the_ID(), 'Width', true );
         $cf_year = get_post_meta( get_the_ID(), 'Year', true );

         if ($cf_code) echo "Code: ".$cf_code. "<br>";
         if ($cf_height) echo "Height: ".$cf_height. "<br>";
         if ($cf_large) echo "Large: ".$cf_large. "<br>";
         if ($cf_material) echo "Material: ".$cf_material. "<br>";
         if ($cf_precio) echo "Precio: ".$cf_precio. "<br>";
         if ($cf_width) echo "Width: ".$cf_width. "<br>";
         if ($cf_year) echo "Year: ".$cf_year. "<br>"; 
        ?>
        </p>
        <!-- /CAMPOS PERSONALIZADOS 1 -->
        <div class="textoPublicacion">
          <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button type="button" class="botonVerMasDinamic">Ver más</button>
        </a>
        <?php endwhile; ?>
    </div>

    <div class="col-12 col-md-2 colGaleria">
    <?php query_posts('category_name=catalogo-sale-col2&showposts=1000'); ?>
       <?php while (have_posts()) : the_post(); ?>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
        <h2 class="tituloPublicacion"><?php the_title(); ?></h2>
        <!-- CAMPOS PERSONALIZADOS 2 -->
        <p class="Descripcion">
        <?php 
         $cf_code = get_post_meta( get_the_ID(), 'Code', true );
         $cf_height = get_post_meta( get_the_ID(), 'Height', true );
         $cf_large = get_post_meta( get_the_ID(), 'Large', true );
         $cf_material = get_post_meta( get_the_ID(), 'Material', true );
         $cf_precio = get_post_meta( get_the_ID(), 'Precio', true );
         $cf_width = get_post_meta( get_the_ID(), 'Width', true );
         $cf_year = get_post_meta( get_the_ID(), 'Year', true );

         if ($cf_code) echo "Code: ".$cf_code. "<br>";
         if ($cf_height) echo "Height: ".$cf_height. "<br>";
         if ($cf_large) echo "Large: ".$cf_large. "<br>";
         if ($cf_material) echo "Material: ".$cf_material. "<br>";
         if ($cf_precio) echo "Precio: ".$cf_precio. "<br>";
         if ($cf_width) echo "Width: ".$cf_width. "<br>";
         if ($cf_year) echo "Year: ".$cf_year. "<br>"; 
        ?>
        </p>
        <!-- /CAMPOS PERSONALIZADOS 2 -->
        <div class="textoPublicacion">
          <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button type="button" class="botonVerMasDinamic">Ver más</button>
        </a>
        <?php endwhile; ?>
    </div>


    <div class="col-12 col-md-2 colGaleria">
    <?php query_posts('category_name=catalogo-sale-col3&showposts=1000'); ?>
       <?php while (have_posts()) : the_post(); ?>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
        <h2 class="tituloPublicacion"><?php the_title(); ?></h2>
        <!-- CAMPOS PERSONALIZADOS 3 -->
        <p class="Descripcion">
        <?php 
         $cf_code = get_post_meta( get_the_ID(), 'Code', true );
         $cf_height = get_post_meta( get_the_ID(), 'Height', true );
         $cf_large = get_post_meta( get_the_ID(), 'Large', true );
         $cf_material = get_post_meta( get_the_ID(), 'Material', true );
         $cf_precio = get_post_meta( get_the_ID(), 'Precio', true );
         $cf_width = get_post_meta( get_the_ID(), 'Width', true );
         $cf_year = get_post_meta( get_the_ID(), 'Year', true );

         if ($cf_code) echo "Code: ".$cf_code. "<br>";
         if ($cf_height) echo "Height: ".$cf_height. "<br>";
         if ($cf_large) echo "Large: ".$cf_large. "<br>";
         if ($cf_material) echo "Material: ".$cf_material. "<br>";
         if ($cf_precio) echo "Precio: ".$cf_precio. "<br>";
         if ($cf_width) echo "Width: ".$cf_width. "<br>";
         if ($cf_year) echo "Year: ".$cf_year. "<br>"; 
        ?>
        </p>
        <!-- /CAMPOS PERSONALIZADOS 3 -->
        <div class="textoPublicacion">
          <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button type="button" class="botonVerMasDinamic">Ver más</button>
        </a>
        <?php endwhile; ?>
    </div>



    <div class="col-12 col-md-2 colGaleria">
    <?php query_posts('category_name=catalogo-sale-col4&showposts=1000'); ?>
       <?php while (have_posts()) : the_post(); ?>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
        <h2 class="tituloPublicacion"><?php the_title(); ?></h2>
        <!-- CAMPOS PERSONALIZADOS 4 -->
        <p class="Descripcion">
        <?php 
         $cf_code = get_post_meta( get_the_ID(), 'Code', true );
         $cf_height = get_post_meta( get_the_ID(), 'Height', true );
         $cf_large = get_post_meta( get_the_ID(), 'Large', true );
         $cf_material = get_post_meta( get_the_ID(), 'Material', true );
         $cf_precio = get_post_meta( get_the_ID(), 'Precio', true );
         $cf_width = get_post_meta( get_the_ID(), 'Width', true );
         $cf_year = get_post_meta( get_the_ID(), 'Year', true );

         if ($cf_code) echo "Code: ".$cf_code. "<br>";
         if ($cf_height) echo "Height: ".$cf_height. "<br>";
         if ($cf_large) echo "Large: ".$cf_large. "<br>";
         if ($cf_material) echo "Material: ".$cf_material. "<br>";
         if ($cf_precio) echo "Precio: ".$cf_precio. "<br>";
         if ($cf_width) echo "Width: ".$cf_width. "<br>";
         if ($cf_year) echo "Year: ".$cf_year. "<br>"; 
        ?>
        </p>
        <!-- /CAMPOS PERSONALIZADOS 4 -->
        <div class="textoPublicacion">
          <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button type="button" class="botonVerMasDinamic">Ver más</button>
        </a>
        <?php endwhile; ?>
    </div>

    <div class="col-12 col-md-2 colGaleria">
    <?php query_posts('category_name=catalogo-sale-col5&showposts=1000'); ?>
       <?php while (have_posts()) : the_post(); ?>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
        <h2 class="tituloPublicacion"><?php the_title(); ?></h2>
        <!-- CAMPOS PERSONALIZADOS 5 -->
        <p class="Descripcion">
        <?php 
         $cf_code = get_post_meta( get_the_ID(), 'Code', true );
         $cf_height = get_post_meta( get_the_ID(), 'Height', true );
         $cf_large = get_post_meta( get_the_ID(), 'Large', true );
         $cf_material = get_post_meta( get_the_ID(), 'Material', true );
         $cf_precio = get_post_meta( get_the_ID(), 'Precio', true );
         $cf_width = get_post_meta( get_the_ID(), 'Width', true );
         $cf_year = get_post_meta( get_the_ID(), 'Year', true );

         if ($cf_code) echo "Code: ".$cf_code. "<br>";
         if ($cf_height) echo "Height: ".$cf_height. "<br>";
         if ($cf_large) echo "Large: ".$cf_large. "<br>";
         if ($cf_material) echo "Material: ".$cf_material. "<br>";
         if ($cf_precio) echo "Precio: ".$cf_precio. "<br>";
         if ($cf_width) echo "Width: ".$cf_width. "<br>";
         if ($cf_year) echo "Year: ".$cf_year. "<br>"; 
        ?>
        </p>
        <!-- /CAMPOS PERSONALIZADOS 5 -->
        <div class="textoPublicacion">
          <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button type="button" class="botonVerMasDinamic">Ver más</button>
        </a>
        <?php endwhile; ?>
    </div>


    <div class="col-12 col-md-2 colGaleria">
    <?php query_posts('category_name=catalogo-sale-col6&showposts=1000'); ?>
       <?php while (have_posts()) : the_post(); ?>
       <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } ?>
        <h2 class="tituloPublicacion"><?php the_title(); ?></h2>
        <!-- CAMPOS PERSONALIZADOS 6 -->
        <p class="Descripcion">
        <?php 
         $cf_code = get_post_meta( get_the_ID(), 'Code', true );
         $cf_height = get_post_meta( get_the_ID(), 'Height', true );
         $cf_large = get_post_meta( get_the_ID(), 'Large', true );
         $cf_material = get_post_meta( get_the_ID(), 'Material', true );
         $cf_precio = get_post_meta( get_the_ID(), 'Precio', true );
         $cf_width = get_post_meta( get_the_ID(), 'Width', true );
         $cf_year = get_post_meta( get_the_ID(), 'Year', true );

         if ($cf_code) echo "Code: ".$cf_code. "<br>";
         if ($cf_height) echo "Height: ".$cf_height. "<br>";
         if ($cf_large) echo "Large: ".$cf_large. "<br>";
         if ($cf_material) echo "Material: ".$cf_material. "<br>";
         if ($cf_precio) echo "Precio: ".$cf_precio. "<br>";
         if ($cf_width) echo "Width: ".$cf_width. "<br>";
         if ($cf_year) echo "Year: ".$cf_year. "<br>"; 
        ?>
        </p>
        <!-- /CAMPOS PERSONALIZADOS 6 -->
        <div class="textoPublicacion">
          <?php the_content(); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <button type="button" class="botonVerMasDinamic">Ver más</button>
        </a>
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