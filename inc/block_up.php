<!-- Up -->
<section class="up" id="up">
	<div class="container">
		<h1 class="title">
			<?php
			if (is_category()) {
				echo get_queried_object()->name;
			}  else {
				the_title();
			}
			?>
		</h1>
	</div>
</section>