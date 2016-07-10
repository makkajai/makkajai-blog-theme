<?php
/*
Template Name: all_posts
*/
?>

 <?php get_header(); ?>
 	<div class="main">
		<div class="row">
			<div class="columns large-8">
				<div class="content">
          
          <?php // Display blog posts on any page @ http://m0n.co/l
          		$temp = $wp_query; $wp_query= null;
          		$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
          		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>

				</div><!-- /.content -->

				<?php morning_time_lite_pagination() ?>

			</div><!-- /.columns large-8 -->

			<div class="columns large-4">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div><!-- /.sidebar -->
			</div><!-- /.columns large-4 -->
		</div><!-- /.row -->
	</div><!-- /.main -->
 <?php get_footer(); ?>