<?php get_header(); ?>

<div class='container padding-top-bottom-25'>

	<div class='row'>
		<?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
        <div class='hidden-xs col-sm-3 col-md-3'>
            <?php get_sidebar( 'sidebar1' ); ?>
        </div>
        <?php }; ?>

		<div class='col-xs-12 col-sm-9 col-md-9'>
			<?php if (is_category()) { ?>
				<h1 class="archive-title h2">
					<span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
				</h1>

			<?php } elseif (is_tag()) { ?>
				<h1 class="archive-title h2">
					<span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
				</h1>

			<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author;
			?>
				<h1 class="archive-title h2">

					<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

				</h1>
			<?php } elseif (is_day()) { ?>
				<h1 class="archive-title h2">
					<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
				</h1>

			<?php } elseif (is_month()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
					</h1>

			<?php } elseif (is_year()) { ?>
					<h1 class="archive-title h2">
						<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
					</h1>
			<?php } ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

					<header class="article-header">

						<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="byline vcard"><?php
							printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(__( 'F jS, Y', 'bonestheme' )), bones_get_the_author_posts_link() );
						?></p>

					</header>

					<section class="entry-content clearfix">

						<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

						<?php the_excerpt(); ?>

					</section>

					<footer class="article-footer">

					</footer>

				</article>
			<hr class='border-color-gray' />
			<?php endwhile; ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry clearfix">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

		</div>

	</div>

</div>

<?php get_footer(); ?>
