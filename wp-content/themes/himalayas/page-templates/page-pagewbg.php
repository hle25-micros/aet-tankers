<?php
/**
 * Template Name: With background Template
 *
 * Displays the Team Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Himalayas
 * @since Himalayas 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'himalayas_before_body_content' );

	$himalayas_layout = himalayas_layout_class(); ?>
<?php while ( have_posts() ) : the_post(); ?>
 <?php 
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', false, '' ); 
		//print_r($src);
	?>
	<div id="content" class="site-content" style="background:url('<?php echo $src[0];?>') no-repeat;background-size: 100% 1000px;">
	   <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
	      <div class="tg-container">				
				<div class="section-title-wrapper">
<h2 class="main-title"><?php echo get_the_title(); ?></h2>
</div>
				<div id="primary">
					<div id="content-2">
					<div class="l-content">					
 						<div class="group-left">
							<div class="field field-name-field-page-background" style="width:100%;height:800px;"><img src="<?php echo $src[0];?>" alt="" width="1" height="1" /></div>
						</div>
						<div class="group-right">
							<div class="field field-name-field-page-intro">
								<div class="intro">

								</div>
							</div>
						<div class="field field-name-body">
							<div class="field-expander field-expander-0">
								<div class="details">
									
<?php 
										get_template_part( 'content', 'page' );

										do_action( 'himalayas_before_comments_template' );
										// If comments are open or we have at least one comment, load up the comment template
										if ( comments_open() || '0' != get_comments_number() )
											comments_template();
										do_action ( 'himalayas_after_comments_template' );

								?>	
								</div>
							</div>
						</div>
						</div>&nbsp;
						</div>
						
					</div><!-- #content-2 -->
				</div><!-- #primary -->

				<?php  himalayas_sidebar_select(); ?>
			</div>
		</main>
	</div>
<?php endwhile; ?>
	<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>