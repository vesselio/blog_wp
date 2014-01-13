<?php get_header(); ?>

<div class='container padding-top-bottom-25'>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class='row'>
        <?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
        <div class='hidden-xs col-sm-3 col-md-3'>
            <?php get_sidebar( 'sidebar1' ); ?>
        </div>
        <?php }; ?>
        <div class='col-xs-12 col-sm-9 col-md-9'>
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                <header class="article-header">
                    <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
                    <p class="byline vcard"><?php
                        printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link() );
                    ?></p>
                </header>
                <section class="entry-content clearfix" itemprop="articleBody">
                    <?php the_content(); ?>
                </section>
                <footer class="article-footer">
                    <?php the_hashtags(); ?>
                </footer>
                <div class='row margin-top-25'>
                    <div class='col-xs-6 col-sm-6 col-md-6 text-left'>
                        <a href='<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>' title="Previous Post">
                            <span class='glyphicon glyphicon-arrow-left'></span> Previous
                        </a>
                    </div>
                    <div class='col-xs-6 col-sm-6 col-md-6 text-right'>
                        <a href='<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>' title="Next Post">
                            Next <span class='glyphicon glyphicon-arrow-right'></span> 
                        </a>
                    </div>
                </div>
                <hr class='border-color-gray margin-top-25 margin-bottom-25'>
                <div>
                    <?php comments_template(); ?>
                </div>
            </article>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
    <div class='row'>
        <div class='col-xs-12 col-sm-9 col-md-9'>
            <article id="post-not-found" class="hentry clearfix">
                <header class="article-header">
                    <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                </header>
                <section class="entry-content">
                    <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                </section>
                <footer class="article-footer">
                    <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                </footer>
            </article>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>