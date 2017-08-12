				<div id="sidebar-front" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar-front' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-front' ); ?>
						<?php echo wdi_feed(array("id"=>"1")); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
