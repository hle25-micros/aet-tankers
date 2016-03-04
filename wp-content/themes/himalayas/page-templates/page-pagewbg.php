<?php
/**
 * Template Name: Page with background
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

	<div id="content" class="site-content">
	   <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
	      <div class="tg-container">
				<div>
                  <h1 class="entry-title"><?php echo get_the_title(); ?></h1>
				</div>
				<div id="primary">
					<div id="content-2">
					<div class="l-content">
					<?php	
					if ( has_post_thumbnail() ) {
the_post_thumbnail();
}
					/* $args = array(
    'post_type' => 'page',
    'post_status' => 'publish'
); 
$pages = get_pages($args); 
foreach($pages as $page) {
        echo get_the_post_thumbnail( $page->ID, 'full' );
}*/

 ?>
						&nbsp;
						<div class="group-left">
							<div class="field field-name-field-page-background"><img src="http://www.aet-tankers.com/sites/default/files/styles/page_background_full/public/page-backgrounds/career-bg.jpg?itok=GevI1ra-" alt="" width="1433" height="900" /></div>
						</div>
						<div class="group-right">
							<div class="field field-name-field-page-intro">
								<div class="intro">

								</div>
							</div>
						<div class="field field-name-body">
							<div class="field-expander field-expander-0">
								<div class="details">
									<?php while ( have_posts() ) : the_post();

										get_template_part( 'content', 'page' );

										do_action( 'himalayas_before_comments_template' );
										// If comments are open or we have at least one comment, load up the comment template
										if ( comments_open() || '0' != get_comments_number() )
											comments_template();
										do_action ( 'himalayas_after_comments_template' );

									endwhile; ?>
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

	<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>