<!-- About -->
<section class="about" id="about">
	<div class="container">
		<div class="take-info">
			<div class="take-info__cont">
				<?php include "inc/block_left-sidebar.php"; ?>
				<div class="contant">
					<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
					<?php the_content(); ?>
				</div>
				<?php include "inc/block_sidebar-two.php"; ?>
			</div>
		</div>
	</div>
</section>