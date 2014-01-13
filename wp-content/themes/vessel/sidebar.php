				<div id="sidebar1" class="sidebar" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						
						<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						

					<?php endif; ?>

				</div>