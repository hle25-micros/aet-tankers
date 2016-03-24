<?php
/*Template Name: Single News
 *
 *You can customize this view by putting a replacement file of the same name single-news.php) in the directory of your theme.
 *
 */
 
get_header(); 
?>

	<?php do_action( 'himalayas_before_body_content' );

	$himalayas_layout = himalayas_layout_class(); ?>

	<div id="content" class="site-content">
	   <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
	      <div class="tg-container">
		  <?php while ( have_posts() ) : the_post(); ?>
				<div class="section-title-wrapper">
					
				</div>
				<div id="primary">
					<div id="content-2">
					<div class="l-content">	
							<div class="group-left-detail-news">								
								<div class="field field-name-field-page-background" style="width:99%;margin: 5px 5px;">
									<h4><?php echo get_the_title(); ?></h4>
									<p>
										<span title="<?php the_time('c') ?>" class="date_post"><?php the_time('F j, Y') ?></span>
									 </p>
									 <?php 
										$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', false, '' ); 
									 ?>
									 <img alt="<?php echo get_the_title(); ?>" id="wd-cl-img0" src="<?php echo $src[0];?>" style="float: left; margin: 6px 10px;width:240px;">
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
							<div class="group-right-detail-news" >	
								<div id="othernews"  style="background-color: #DDD; margin-top: 94px;">
								<h4 style="margin: 5px; 5px; font-size:18px;">Related News</h4>
								<?php
										// Get all posts for the year
										$postid = $post->ID;
										$posts_this_year = $wpdb->get_results( "SELECT ID, post_title, post_date FROM wp_posts WHERE post_type = 'news' AND post_status = 'publish' AND ID <> ".$postid." AND YEAR(post_date) = '2015'" );										
										echo '<ul>';

										// For each post for that year, do the following
										foreach ( $posts_this_year as $post ) {
											// Display the title as a hyperlinked list item
											echo '<li><a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a>&nbsp;<span class="date-post-other"><i>('.date("d F Y",strtotime($post->post_date)).')</i></span></li>';
										}

										// End the unordered list
										echo '</ul>';									
								?>
								</div>
							</div>
						</div>
						
					</div><!-- #content -->
				</div><!-- #primary -->
<?php endwhile; ?>
				<?php  himalayas_sidebar_select(); ?>
			</div>
		</main>
	</div>

	<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>