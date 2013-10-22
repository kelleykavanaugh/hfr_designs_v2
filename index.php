    <?php get_header(); ?>
      <div class="circle coin"><i class="icon-heart-empty"></i><h1 class="title"><?php the_title(); ?></h1></div>
        <div class="row-fluid">
          <div class="span12">
            <div class="border-bottom">
            </div><!--/border-bottom-->
          <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="border-bottom">
              <div id="block-text">
                <?php the_content() ?>
              </div><!--/block-text-->
            </div><!--/border-bottom-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>