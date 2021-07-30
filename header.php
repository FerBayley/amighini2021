<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AMIGHINI has served the architecture market for more than 65 years with the best hand made quality you ever seen, European Salvage 
    Antique Doors, Custom & Landamark Reproductions. For nearly half a century, AMIGHINI has been managed by professional architects exploring the juxtaposition of modern 
    design with traditional architectural elements." />
    <meta name="keywords" content="Double entry door, single entry door, doors, Antique, glass doors, interior door, mahogany Wood doors, barn doors, Wood 
    Windows, stainglass, wrought iron, gates, balconies, fence, service, stripping, sanding, patch, landmark, custom, hardware, cremone bolt, vintage 
    decor, table, shelves, fireplace, fountains, tiles, lighting, chandelier, industrial, european, collection,  ring bell, bronze, latch, surface bolt, back 
    plate, knocker, knob, lever, mail slot, france, pull handle, Italy, art nouveau, art deco, mantel, chair, coffee, mirror, vanity, lead glass, etched 
    glass, vitreaux, dome, skylights, stain glass windows, paint, restore, carpenter, artesian, jerey city, new York, steel windows, custom doors, steel, Spanish, glass, 
    project, woodwork, stairs, mahogany, oak, cherry, walnut, stain, gorgeous, amazing, stone, antique tiles, floor tiles, wall tiles, furniture, Hoboken, old school, 
    historic, design, installation, delivery, job site services, night table, antique bathtub, statue, bench, dresser, French casement, salvage, decorative, wood floring, 
    hand forged, light post, lantern, elements, brownstone door, "/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="http://localhost:8888/amighini/wp-content/themes/amighini/style.css" /> -->
    <link rel="stylesheet" href="https://amighini.net/wp-content/themes/amighini/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
    
  </head>
  <body>

    <!-- CONTENEDOR CENTRAL -->

    <!-- HEADER -->
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
          <div class="container-fluid logo">
            <!-- LOGO -->
            <div class="logo">
              <a href="<?php echo esc_url( home_url( '/index' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo Amighini"></a>
            </div>
            <!-- /LOGO -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-v menuHamburguesa"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                -->
                <?php

                    $args = array(
                      'theme_location' => 'menu-principal', 
                      'container' => 'nav',
                      'container_class' => 'menu-principal'
                    );
                    wp_nav_menu($args);
                  ?>
              </ul>
            </div>
          </div>
        </nav>
    <!-- /HEADER -->
