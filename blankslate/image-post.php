<?php
/*
 * Template Name: Image Post
 * Template Post Type: post, page, product
 */

 get_header();  ?>

 <nav id="menu" role="navigation" class="site-nav">
 	<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
 </nav>

 <section id="content" role="main" class="site-main">

 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="photo-series">
	 	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 		<header class="header">
	 			<h1 class="entry-title photo-series__title"><?php the_title(); ?></h1>
	 			<?php edit_post_link(); ?>
	 		</header>
	 		<section class="entry-content">
	 			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<div class="image-container">
	 				<?php the_content(); ?>
				</div>
	 			<div class="entry-links">
	 				<?php wp_link_pages(); ?>
	 			</div>
	 		</section>
	 	</article>
	</div>
 	<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
 	<?php endwhile; endif; ?>
 </section>

 <?php get_sidebar(); ?>
 <?php get_footer(); ?>
