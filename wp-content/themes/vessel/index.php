<?php get_header(); ?>

<div class='container padding-top-bottom-25'>
    <div class='row'>
        <?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
        <div class='hidden-xs col-sm-3 col-md-3'>
            <?php get_sidebar( 'sidebar1' ); ?>
        </div>
        <?php }; ?>
        <div class='col-xs-12 col-sm-9 col-md-9'>
            <div class='container'>
                <?php if (have_posts()) : ?>

                <div class='row'>
                    <div class='col-sm-12 col-md-12'>
                        <?php while (have_posts()) : the_post(); ?>

                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">
                                <header class="article-header">
                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                    <p class="byline vcard"><?php
                                        printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link());
                                    ?></p>
                                </header>
                                <section class="entry-content clearfix">
                                    <?php the_excerpt(); ?>
                                </section>
                                <footer class="article-footer">
                                    <?php the_hashtags(); ?>
                                </footer>
                            </article>
                            <hr class='border-color-gray' />
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class='row margin-top-25'>
                    <div class='col-xs-6 col-sm-6 col-md-6 text-left'>
                        <?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-6 text-right'>
                        <?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?>
                    </div>
                </div>

                <?php else : ?>

                <div class='row'>
                    <div class='col-sm-12 col-md-12'>
                        <article id="post-not-found" class="hentry clearfix">
                                <header class="article-header">
                                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                            </header>
                                <section class="entry-content">
                                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                            </section>
                            <footer class="article-footer">
                                    <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                            </footer>
                        </article>
                    </div>
                </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>