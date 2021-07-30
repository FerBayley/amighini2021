    <!-- NUESTROS CLIENTES -->
    <section class="nuestrosClientes">
        <div class="container">
            <div class="row">
                <h2>SOME OF OUR CUSTOMERS</h2>
                <div class="col-12 col-md-3">
                    <?php query_posts('category_name=clientes-1&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                </div>

                <div class="col-12 col-md-3">
                    <?php query_posts('category_name=clientes-2&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                </div>

                <div class="col-12 col-md-3">
                    <?php query_posts('category_name=clientes-3&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                </div>

                <div class="col-12 col-md-3">
                    <?php query_posts('category_name=clientes-4&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /NUESTROS CLIENTES -->