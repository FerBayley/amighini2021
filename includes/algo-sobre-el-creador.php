    <!-- ALGO SOBRE EL CREADOR -->
    <section class="algoSobreElCreador">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                   <?php query_posts('category_name=creador&showposts=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    } ?>
                </div>
                <div class="col-12 col-md-6">
                    <h2><?php the_title(); ?></h2>
                    <article><p><?php the_content(); ?></p></article>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /ALGO SOBRE EL CREADOR -->