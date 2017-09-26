<?php get_header(); ?>

<!-- Start Post -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<span itemscope itemtype="https://schema.org/Article">
<section class="container">
  <div class="row">
      <div class="twocol">
      </div>

      <div class="eightcol">
        	<article>
        	<h1 id="article_title" class="center" itemprop="name headline"><?php the_title(); ?></h1>
        	<div class="article">
			  <?php the_content(); ?>
			</div>
			<cite><p class-"center"><?php the_tags('by ','',''); ?></p></cite>
			<div id="spacer"></div>

			</article>
      </div>

    <div class="twocol last">
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<!-- End Post -->

<?php get_footer(); ?>
