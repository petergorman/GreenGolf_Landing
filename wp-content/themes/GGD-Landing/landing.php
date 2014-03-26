<?php
/*
Template Name: Landing Page
*/
?>

<?php get_header(landing); ?>

<div class="wrapper big-img div-table" style="background-image:url(<?php the_field('hero_image'); ?>);">

<div class="div-cell">
			
<header class="container">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2 logo-intro">

				<img src="<?php bloginfo('template_directory'); ?>/img/ggd-logo_lg.png" width="439" height="204" alt="Green Golf Deals - Teeing up Australia's best golf deals" />
				<?php the_field('hero_copy'); ?>
			
		</div><!-- END Col -->
		
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			
		</div><!-- ENd Col -->
		
	</div><!-- END Row -->

</header>

</div><!-- END Div Cell -->

</div><!-- END Wrapper -->

<section class="wrapper about-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-1 about-content">
				
				<?php the_field('about_section'); ?>
				
			</div><!-- END Col -->
			
			
			
			<div class="col-xs-12 col-sm-4 follow-us">
			
				<div class="fb-like-box" data-href="https://www.facebook.com/gimmegolfdeals" data-width="100%" data-height="240px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
				
			</div><!-- END Col -->
		</div><!-- END Row -->
	</div><!-- END Container -->
</section><!-- END Wrapper -->


<section class="wrapper contact-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			
				<?php the_field('contact_section'); ?>
				
				<br>
				<a href="mailto:greg@Greengolfdeals.com.au"><button type="button" class="btn ggd-btn btn-white col-xs-12 col-sm-4"><h2>Let's talk</h2></button></a>
			</div><!-- END Col -->
		</div><!-- END Row -->
	</div><!-- END Container -->
</section><!-- END Wrapper -->

<?php get_footer(); ?>