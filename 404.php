<?php /*Template Name: 404 Page */ ?>
<?php get_header(); ?>

<!-- Start Post -->
<?php query_posts('cat=16&posts_per_page=1'); ?>
<?php while (have_posts()) : the_post(); ?>
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

			<div id="spacer"></div>

			</article>
      </div>

    <div class="twocol last">
    </div>
  </div>
</section>
<!-- End Post -->
<?php endwhile;?>

<?php get_footer(); ?>
