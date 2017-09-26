<?php get_header(); ?>

<!-- Start Post -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="container">
  <div class="row">
      <div class="twocol">
      </div>

      <div class="eightcol">
        	<article>
        	<h2><?php the_title(); ?></h2>
        	<div>
			  <?php the_content(); ?>
			</div>
			</article>
      </div>

    <div class="twocol last">
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<!-- End Post -->

<?php get_footer(); ?>
