<?php 

/*
Template Name: contact-seller
*/

?>


<?php get_header(); ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <h2 class="bigTitle"><?php the_title(); ?></h2>
        </div>
      </div>
    </div>

    <!-- CONTAINER CONTACTO -->
    <section class="contcato">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 colFull">
                       <form>
                          <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre y apellido">
                          </div>
                          <div class="mb-3">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
                           </div>
                          <button type="submit" class="botonEnvio">Enviar</button>
                      </form>
                </div>

                <div class="col-12 col-md-4 colCeroPixel">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-contacto.png" alt="Imagen contacto">
                </div>
            </div>
        </div>
    </section>
    <!-- /CONTAINER CONTACTO -->



    <!-- NUESTRO EQUIPO -->
    <?php include("includes/nuestro-equipo.php"); ?>
    <!-- /NUESTRO EQUIPO -->


    <!-- BANNER HERRERO -->
    <section class="bannerHerrero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>HERRERO</h2>
                    <button type="button" class="boton">VER COLECCION COMPLETA</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /BANNER HERRERO -->



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