    <!-- NUESTRO EQUIPO -->
    <section class="nuestroEquipo">
        <div class="container tituloDestacadoNuestroEquipo">
          <div class="row">
            <div class="col">
              <h2>OUR TEAM</h2>
            </div>
          </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-2 all">
                    <?php query_posts('category_name=equipo-col-1&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h3><?php the_content(); ?></h3>
                    <?php endwhile; ?>
                </div>
                <div class="col-sm-12 col-md-2 all">
                <?php query_posts('category_name=equipo-col-2&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php endwhile; ?>
                </div>
                <div class="col-sm-12 col-md-2 all">
                <?php query_posts('category_name=equipo-col-3&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php endwhile; ?>
                </div>
                <div class="col-sm-12 col-md-2 all">
                <?php query_posts('category_name=equipo-col-4&showposts=4'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php endwhile; ?>
                </div>
                <div class="col-sm-12 col-md-2 all">
                <?php query_posts('category_name=equipo-col-4&showposts=4'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /NUESTRO EQUIPO -->