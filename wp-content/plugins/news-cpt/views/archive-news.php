<?php
/*Template Name: Archive News
 *
 * You can customize this view by putting a replacement file of the same name (single.php) in the events/ directory of your theme.
 *
 */ 

?>
<?php get_header(); ?>

	<?php do_action( 'himalayas_before_body_content' );

	$himalayas_layout = himalayas_layout_class(); ?>
	
<div id="content" class="site-content">
   <main id="main" class="clearfix <?php echo $himalayas_layout; ?>">
    <div class="tg-container">
		<div class="section-title-wrapper">
					<h2 class="main-title"><?php
						if ( is_day() ) :
							printf( __( 'Daily News Archives: %s' ), get_the_date() );
						elseif ( is_month() ) :
							printf( __( 'Monthly News Archives: %s' ),  get_the_date( _x( 'F Y', 'monthly archives date format', 'twentytwelve' ) )  );
						elseif ( is_year() ) :
							printf( __( 'News in %s' ),   get_the_date( _x( 'Y', 'yearly archives date format', 'twentytwelve' ) )  );
						else :
							_e( 'News' );
						endif;
					?></h2>
		</div> <!-- .archive-header -->
  <style type="text/css"> 
/***<add>***/
.portelement_2 div.right-block div h3 a {
    font-size: 1.1em;
    color: #333333;
    font-weight: bold;
}
.portelement_2 div.right-block div p span, .portelement_2 div.right-block div h3 a:hover{color:#f15a24 !important;}

.portelement_2 .play-icon.youtube-icon  {
	background: url(http://www.aet-tankers-sg.com/wp-content/plugins/portfolio-gallery/Front_end/../images/play.youtube.png) center center no-repeat;
	background-size: 30% 30%;
}
.portelement_2 .play-icon.vimeo-icon  {
	background: url(http://www.aet-tankers-sg.com/wp-content/plugins/portfolio-gallery/Front_end/../images/play.vimeo.png) center center no-repeat;
	background-size: 30% 30%;
}
.portelement_2 .play-icon {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
}
.add-H-relative {
	position: relative;
}	
.add-H-block {
	display: block;
}		
/***</add>***/
.portelement_2 {
	position: relative;
	width:99%; 
	margin:0px 2px 0px 2px;
	padding:2%;
	clear:both;
	overflow: hidden;
	border:1px solid #dedede;
	background:#f9f9f9;
}

.portelement_2 > div {
	display:table-cell;
}

.portelement_2 div.left-block_2 {
	padding-right:10px;
}

.portelement_2 div.left-block_2 .main-image-block_2 {
	clear:both;
	width:240px; 
}

.portelement_2 div.left-block_2 .main-image-block_2 img {
	margin:0px !important;
	padding:0px !important;
	width:240px !important; 
	height:auto;
}

.portelement_2 div.left-block_2 .thumbs-block {
	position:relative;
	margin-top:10px;
}

.portelement_2 div.left-block_2 .thumbs-block ul {
	width:240px; 
	height:auto;
	display:table;
	margin:0px;
	padding:0px;
	list-style:none;
}

.portelement_2 div.left-block_2 .thumbs-block ul li {
	margin:0px 3px 0px 2px;
	padding:0px;
	width:75px; 
	height:75px; 
	float:left;
}

.portelement_2 div.left-block_2 .thumbs-block ul li a {
	display:block;
	width:75px; 
	height:75px; 
}

.portelement_2 div.left-block_2 .thumbs-block ul li a img {
	margin:0px !important;
	padding:0px !important;
	width:75px; 
	height:75px; 
}

.portelement_2 div.right-block {
	vertical-align:top;
}

.portelement_2 div.right-block > div {
	width:100%;
	padding-bottom:10px;
	margin-top:10px;
			background:url('http://www.aet-tankers-sg.com/wp-content/plugins/portfolio-gallery/Front_end/../images/divider.line.png') center bottom repeat-x;
		
}

.portelement_2 div.right-block > div:last-child {
	background:none;
}

.portelement_2 div.right-block .title-block_2  {
	margin-top:3px;
}

.portelement_2 div.right-block .title-block_2 h3 {
	margin:0px;
	padding:0px;
	font-weight:normal;
	font-size:18px !important;
	line-height:22px !important;
	color:#0074a2;
}

.portelement_2 div.right-block .description-block_2 p,.portelement_2 div.right-block .description-block_2 * {
	margin:0px;
	padding:0px;
	font-size:14px;
	color:#555555;
}


.portelement_2 div.right-block .description-block_2 h1,
.portelement_2 div.right-block .description-block_2 h2,
.portelement_2 div.right-block .description-block_2 h3,
.portelement_2 div.right-block .description-block_2 h4,
.portelement_2 div.right-block .description-block_2 h5,
.portelement_2 div.right-block .description-block_2 h6,
.portelement_2 div.right-block .description-block_2 p, 
.portelement_2 div.right-block .description-block_2 strong,
.portelement_2 div.right-block .description-block_2 span {
	padding:2px !important;
	margin:0px !important;
}

.portelement_2 div.right-block .description-block_2 ul,
.portelement_2 div.right-block .description-block_2 li {
	padding:2px 0px 2px 5px;
	margin:0px 0px 0px 8px;
}

.portelement_2 .button-block {
	position:relative;
}

.portelement_2 div.right-block .button-block a,.portelement_2 div.right-block .button-block a:link,.portelement_2 div.right-block .button-block a:visited {
	position:relative;
	display:inline-block;
	padding:6px 12px;
	background:#2ea2cd;
	color:#ffffff;
	font-size:14px;
	text-decoration:none;
}

.portelement_2 div.right-block .button-block a:hover,.pupup-elemen.element div.right-block .button-block a:focus,.portelement_2 div.right-block .button-block a:active {
	background:#0074a2;
	color:#ffffff;
}



@media only screen and (max-width: 767px) {
	
	.portelement_2 > div {
		display:block;
		width:100%;
		clear:both;
	}

	.portelement_2 div.left-block_2 {
		padding-right:0px;
	}

	.portelement_2 div.left-block_2 .main-image-block_2 {
		clear:both;
		width:100%; 
	}

	.portelement_2 div.left-block_2 .main-image-block_2 img {
		margin:0px !important;
		padding:0px !important;
		width:100% !important;  
		height:auto;
	}

	.portelement_2 div.left-block_2 .thumbs-block ul {
		width:100%; 
	}
}
#huge_it_portfolio_content_2 a{
    border:none;
}

#huge_it_portfolio_content_2 #huge_it_portfolio_options_2 {
	position: relative;
        overflow: hidden;
    margin-top: 5px;
    float: none;
    width: 100%;
}

#huge_it_portfolio_content_2 #huge_it_portfolio_options_2 ul {
  margin: 0px !important;
  padding: 0px !important;
  list-style: none;
}

#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 ul {
  margin: 0px !important;
  padding: 0px !important;
  overflow: hidden;
  }

            #huge_it_portfolio_content_2 #huge_it_portfolio_options_2 ul {
                float: left;
            }
    
#huge_it_portfolio_content_2 #huge_it_portfolio_options_2 ul li {
    border-radius: 0px;
    list-style-type: none;
    margin: 0px !important;
	padding: 0;
    float:left !important;margin: 4px 8px 4px 0px !important;border: 1px solid #ccc;}

#huge_it_portfolio_content_2 #huge_it_portfolio_options_2 ul li a {
    background-color: #F7F7F7 !important;
    font-size:14px !important;
    color:#555555 !important;
    text-decoration: none;
    cursor: pointer;
    margin: 0px !important;
    display: block;
    padding:3px;
}

/*#huge_it_portfolio_content_2 #huge_it_portfolio_options_2 ul li:hover {
    
}*/

#huge_it_portfolio_content_2 #huge_it_portfolio_options_2 ul li a:hover {
    background-color: #FF3845 !important;
    color:#ffffff !important;
    cursor: pointer;
}

#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 {
    margin-top: 5px;
    float: left;
   width: 30%;
    }

#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 ul li {
    list-style-type: none;
    border-bottom: 1px solid #ccc;}

#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 ul li a {
    font-size:14px !important;
    color:#555555 !important;
    background-color: #F7F7F7 !important;
    border-radius: 0px;
    padding: 3px;
    display: block;
    text-decoration: none;
}

#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2  ul li a:hover {
    color:#ffffff !important;
    background-color: #FF3845 !important;
    cursor: pointer;
}
#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 ul li.active a,
#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 ul li.active a:link,
#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2 ul li.active a:visited,
#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2  ul li.active a:hover,
#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2  ul li.active a:focus,
#huge_it_portfolio_content_2 #huge_it_portfolio_filters_2  ul li.active a:active {
    color:#ffffff !important;
    background-color: #FF3845 !important;
    cursor: pointer;
}
#huge_it_portfolio_content_2 section {
    position:relative;
    display:block;
}

#huge_it_portfolio_content_2 #huge_it_portfolio_container_2 {
    }
</style>
<div id="tab_container_597">
	<ul class="wpsm_nav wpsm_nav-tabs" role="tablist" id="myTab_597">		
		<?php
    // Get years that have posts
    $years = $wpdb->get_results( "SELECT YEAR(post_date) AS year FROM wp_posts WHERE post_type = 'news' AND post_status = 'publish' GROUP BY year DESC" );

    //  For each year, do the following
	$current_year = date("Y");
	$current_node = $_SERVER['REQUEST_URI'];
	$current_class = "active";
    foreach ( $years as $year ) {
		$pos = strpos($current_node, $year->year);
		if ($pos === false) {
			// if($current_year==$year->year){
				// $current_class="active";
			// }else{
				$current_class = "";
			//}
		}else{$current_class="active";}
	echo '<li role="presentation" class="'.$current_class.'">
						<a href="/news/'. $year->year.'">
							<i class="fa fa-list-alt"></i> '. $year->year.'											
						</a>
					</li>';
    }
?>
		<?php 
		
			// $current_year = date("Y");
			// for ($x = $current_year-1; $x > 2009; $x--) {
				
			// }
		?>	
	</ul>
<div id="huge_it_portfolio_container_2" class="super-list variable-sizes clearfix hugeitmicro" style="position: relative; overflow: hidden; height: 1006px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php 
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 175,131 ), false, '' ); 
		//print_r($src);
	?>
			<div class="portelement_2 colorbox_grouping    hugeitmicro-item" data-symbol="<?php the_title(); ?>" data-category="alkaline-earth" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
				<div class="left-block_2">
					<div class="main-image-block_2 add-H-relative">
						<a href="<?php the_permalink(); ?>" class="portfolio-group1-2 group1 cboxElement" title="<?php the_title(); ?>">
							<img alt="<?php the_title(); ?>" id="wd-cl-img0" src="<?php echo $src[0];?>" style="width:<?php echo $src[1]."px";?>;height:<?php echo $src[2]."px";?>"></a>
					</div>
					<div class="thumbs-block">
						<ul class="thumbs-list_2">					
						</ul>
					</div>
				</div>
				<div class="right-block">
					<div class="title-block_2">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<div class="description-block_2">
						<p>
							<span><?php the_time('F j, Y') ?></span> <br>
						</p>
						<p>
						<?php the_excerpt(); ?></p>
						<p></p>
					</div>
					<div class="button-block" style="display:none;">
						<a href="http://www.aet-tankers.com/press-room/press-releases/pr/captain-rajalingam-subramaniam-appointed-aet-president-ceo">Download Full Document</a>
					</div>
				</div>
			</div>
      <!-- post -->
      
    <?php endwhile; ?>
	</div>
</div>	
    <script>
jQuery(function(){
var defaultBlockWidth=240;
    
    var $container = jQuery('#huge_it_portfolio_container_2');
    
    
      // add randomish size classes
      $container.find('.portelement_2').each(function(){
        var $this = jQuery(this),
            number = parseInt( $this.find('.number').text(), 10 );
			//alert(number);
        if ( number % 7 % 2 === 1 ) {
          $this.addClass('width2');
        }
        if ( number % 3 === 0 ) {
          $this.addClass('height2');
        }
      });
    
    $container.hugeitmicro({
      itemSelector : '.portelement_2',
      masonry : { 
        columnWidth : 240+20+2      },
      masonryHorizontal : {
        rowHeight: 300+20
      },
      cellsByRow : {
        columnWidth : 300+20,
        rowHeight : 240
      },
      cellsByColumn : {
        columnWidth : 300+20,
        rowHeight : 240
      },
      getSortData : {
        symbol : function( $elem ) {
          return $elem.attr('data-symbol');
        },
        category : function( $elem ) {
          return $elem.attr('data-category');
        },
        number : function( $elem ) {
          return parseInt( $elem.find('.number').text(), 10 );
        },
        weight : function( $elem ) {
          return parseFloat( $elem.find('.weight').text().replace( /[\(\)]/g, '') );
        },
        id : function ( $elem ) {
          return $elem.find('.id').text();
        }
      }
    });
    
    
      var $optionSets = jQuery('#huge_it_portfolio_options_2 .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = jQuery(this);

        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  

        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');

        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {

          changeLayoutMode( $this, options )
        } else {

          $container.hugeitmicro( options );
        }
        
        return false;
      });


    

      var isHorizontal = false;
      function changeLayoutMode( $link, options ) {
        var wasHorizontal = isHorizontal;
        isHorizontal = $link.hasClass('horizontal');

        if ( wasHorizontal !== isHorizontal ) {

          var style = isHorizontal ? 
            { height: '75%', width: $container.width() } : 
            { width: 'auto' };

          $container.filter(':animated').stop();

          $container.addClass('no-transition').css( style );
          setTimeout(function(){
            $container.removeClass('no-transition').hugeitmicro( options );
          }, 100 )
        } else {
          $container.hugeitmicro( options );
        }
      }


    

      $container.delegate( '.default-block_2', 'click', function(){
          var strheight=0;
          jQuery(this).parents('.portelement_2').find('.wd-portfolio-panel_2 > div').each(function(){
                strheight+=jQuery(this).outerHeight()+10;
                //alert(strheight);
          })
          strheight+=205;
	  			if(jQuery(this).parents('.portelement_2').hasClass("large")){
			jQuery(this).parents('.portelement_2').animate({
				height: "205px"
			}, 300, function() {
				jQuery(this).removeClass('large');
				$container.hugeitmicro('reLayout');
			});
			
			jQuery(this).parents('.portelement_2').removeClass("active");
			return false;
		}
		
	
		jQuery(this).parents('.portelement_2').css({height:strheight});
		jQuery(this).parents('.portelement_2').addClass('large');

		$container.hugeitmicro('reLayout');
		jQuery(this).parents('.portelement_2').css({height:"205px"});		 
		 
		//alert(strheight);
		 
		 jQuery(this).parents('.portelement_2').animate({
			height:strheight+"px",
		  }, 300,function(){	$container.hugeitmicro('reLayout');});
	});

    var $sortBy =  jQuery('#huge_it_portfolio_content_2 #sort-by');
    jQuery('#huge_it_portfolio_content_2 #shuffle a').click(function(){
      $container.hugeitmicro('shuffle');
      $sortBy.find('.selected').removeClass('selected');
      $sortBy.find('[data-option-value="random"]').addClass('selected');
      return false;
    });
    
    ////filteringgggggg

        // bind filter on select change
        jQuery(document).ready(function(){
            jQuery('#huge_it_portfolio_filters_2 ul li').click(function() {
              // get filter value from option value
              var filterValue = jQuery(this).attr('rel');
              // use filterFn if matches value
              filterValue = filterValue;//filterFns[ filterValue ] || 
              $container.hugeitmicro({ filter: filterValue });
            });
                                     var topmargin = jQuery("#huge_it_portfolio_options_2").height();
                         jQuery("#huge_it_portfolio_filters_2").css({'margin-top':'5px'});
                        });
        
        //end of filtering
        
        jQuery(window).load(function(){
		$container.hugeitmicro('reLayout');
		jQuery(window).resize(function(){$container.hugeitmicro('reLayout');});
	});

  });
</script>
      <div class="navigation">
        <div class="alignleft"><?php next_posts_link('Previous entries') ?></div>
        <div class="alignright"><?php previous_posts_link('Next entries') ?></div>
      </div>
    
    <?php else: ?>
    
      <p>There are no news items to display.</p>

    <?php endif; ?>
    
<?php  himalayas_sidebar_select(); ?>
			</div>
		</main>
	</div>

	<?php do_action( 'himalayas_after_body_content' ); ?>

<?php get_footer(); ?>