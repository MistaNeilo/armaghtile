<?php get_header(); ?>

<div class="container">
    <div class="col-md-9">
        <main role="main">
            <!-- section -->
            <section>

                <h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

                <?php get_template_part('loop'); ?>

                <?php get_template_part('pagination'); ?>

            </section>
            <!-- /section -->
        </main>

    </div>
    <div class="col-md-3">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>
