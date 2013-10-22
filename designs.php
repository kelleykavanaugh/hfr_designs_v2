    <?php /*Template Name: Designs */
    get_header(); ?>
    <div id="content">
      <div class="row-fluid">
        <div class="span8">
          <h1><?php the_title(); ?></h1>
          <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content() ?>
            <!--Wigetized Area-->
            <div id="widgetized">
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('designs-page')) : else : ?>
            <?php endif; ?>
            </div><!--/widgetized-->
            <!--/Wigetized Area-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
        </div><!--/ .span -->
        <div class="span4">
          <?php get_sidebar(); ?>
        </div><!--./span4-->
      </div><!--/ .row -->
    </div><!--.end content-->
    <?php get_footer(); ?>