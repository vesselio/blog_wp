<?php get_header(); ?>

<div class='container padding-top-bottom-25'>
    <div class='row'>
        <?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
        <div class='hidden-xs col-sm-3 col-md-3'>
            <?php get_sidebar( 'sidebar1' ); ?>
        </div>
        <?php }; ?>
        <div class='col-xs-12 col-sm-9 col-md-9'>
            <article id="post-not-found" class="hentry clearfix">
                <section class="entry-content">
                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                </section>
            </article>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>