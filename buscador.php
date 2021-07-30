<?php 

/*
Template Name: buscador
*/

?>

<?php get_header(); ?>


<div class="container mt-5">
  <div class="row">
    <div class="col">
      <h2 class="bigTitle">Search here below <i class="fas fa-angle-double-down"></i></h2>
    </div>
  </div>
</div>


<div class="container">
    <div class="row">
        <div class="col">
         <div id="sidebar-primary" class="sidebar">
           <?php dynamic_sidebar( 'primary' ); ?>
         </div>
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