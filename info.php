<?php /*Template Name: News and Events*/ ?>
<?php
/**
 */


get_header(); ?>

<?php include("navigation.php"); ?>
	<div id="wrapper">
	<div id="column">
	 <?php query_posts('category_name=News'); ?>
 
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 <?php if ( in_category('3') ) { ?>
		       <div class="post">
 		<?php } else { ?>
    		       <div class="post">
		 <?php } ?>
			 <h2><?php the_title(); ?></a></h2>
				 <div class="entry">
			   <?php the_content(); ?>
 				</div>
			 </div> <!-- closes the first div box -->

		 <?php endwhile; else: ?>
			 <p>Sorry, no posts matched your criteria.</p>
		 <?php endif; ?>

	</div> <!--End Column-->
<?php get_footer(); ?>

	</div> <!--End Wrapper-->
