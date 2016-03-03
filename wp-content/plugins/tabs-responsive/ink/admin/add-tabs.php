<div style=" overflow: hidden;padding: 10px;">
	<h3><?php _e('Add Tabs',wpshopmart_tabs_r_text_domain); ?></h3>
	<input type="hidden" name="tabs_r_save_data_action" value="tabs_r_save_data_action" />
	<ul class="clearfix" id="colorbox_panel">
	<?php
	 $De_Settings = get_option('wpsm_tabs_r_default_data');
   echo $De_Settings['tabs_sec_title'];
			
			$All_data = unserialize(get_post_meta( $post->ID, 'wpsm_tabs_r_data', true));
			 $TotalCount =  get_post_meta( $post->ID, 'wpsm_tabs_r_count', true );
			if($TotalCount) 
			{
				if($TotalCount!=-1)
				{
					foreach($All_data as $single_data)
					{
						 $tabs_title = $single_data['tabs_title'];
						 $tabs_desc = $single_data['tabs_desc'];
						 $tabs_title_icon = $single_data['tabs_title_icon'];
						 $enable_single_icon = $single_data['enable_single_icon'];
						
						?>
						<li class="wpsm_ac-panel single_color_box" >
							<span class="ac_label"><?php _e('Tab Title',wpshopmart_tabs_r_text_domain); ?></span>
							<input type="text" id="tabs_title[]" name="tabs_title[]" value="<?php echo esc_attr($tabs_title); ?>" placeholder="Enter Tab Title Here" class="wpsm_ac_label_text">
							<span class="ac_label"><?php _e('Tab Description',wpshopmart_tabs_r_text_domain); ?></span>
							<textarea  id="tabs_desc[]" name="tabs_desc[]"  placeholder="Enter Tab Description Here" class="wpsm_ac_label_text"><?php echo esc_html($tabs_desc); ?></textarea>
							
							<span class="ac_label"><?php _e('Tab Icon',wpshopmart_tabs_r_text_domain); ?></span>
							<div class="form-group input-group">
								<input data-placement="bottomRight" id="tabs_title_icon[]" name="tabs_title_icon[]" class="form-control icp icp-auto" value="<?php echo  $tabs_title_icon; ?>" type="text" readonly="readonly" />
								<span class="input-group-addon "></span>
							</div>
							<span class="ac_label"><?php _e('Display Above Icon',wpshopmart_tabs_r_text_domain); ?></span>
							<select name="enable_single_icon[]" style="width:100%" >
								<option value="yes" <?php if($enable_single_icon == 'yes') echo "selected=selected"; ?>>Yes</option>
								<option value="no" <?php if($enable_single_icon == 'no') echo "selected=selected"; ?>>No</option>
								
							</select>
							
							<a class="remove_button" href="#delete" id="remove_bt" ><i class="fa fa-trash-o"></i></a>
							
						</li>
						<?php 
						
					} // end of foreach
				}else{
				echo "<h2>No Tabs Found</h2>";
				}
			}
			else 
			{
				  for($i=1; $i<=3; $i++)
				  {
					  ?>
					 <li class="wpsm_ac-panel single_color_box" >
							<span class="ac_label"><?php _e('Tab Title',wpshopmart_tabs_r_text_domain); ?></span>
							<input type="text" id="tabs_title[]" name="tabs_title[]" value="Sample Title" placeholder="Enter Tab Title Here" class="wpsm_ac_label_text">
							<span class="ac_label"><?php _e('Tab Description',wpshopmart_tabs_r_text_domain); ?></span>
							<textarea  id="tabs_desc[]" name="tabs_desc[]"  placeholder="Enter Tab Description Here" class="wpsm_ac_label_text">Sample Description</textarea>
							
							<span class="ac_label"><?php _e('Tab Icon',wpshopmart_tabs_r_text_domain); ?></span>
							<div class="form-group input-group">
								<input data-placement="bottomRight" id="tabs_title_icon[]" name="tabs_title_icon[]" class="form-control icp icp-auto" value="fa-laptop" type="text" readonly="readonly" />
								<span class="input-group-addon "></span>
							</div>
							<span class="ac_label"><?php _e('Display Above Icon',wpshopmart_tabs_r_text_domain); ?></span>
							<select name="enable_single_icon[]" style="width:100%" >
								<option value="yes" selected>Yes</option>
								<option value="no" >No</option>
								
							</select>
							
							<a class="remove_button" href="#delete" id="remove_bt" ><i class="fa fa-trash-o"></i></a>
							
						</li>
					 <?php
				}
			}
			?>
	</ul>
	
	<div style="display:block;margin-top:20px;overflow:hidden;width: 100%;float:left;">
		<a class="wpsm_ac-panel add_wpsm_ac_new" id="add_new_ac" onclick="add_new_content()"   >
			<?php _e('Add New Tabs', wpshopmart_tabs_r_text_domain); ?>
		</a>
		<a  style="float: left;padding:10px !important;background:#31a3dd;" class=" add_wpsm_ac_new delete_all_acc" id="delete_all_colorbox"    >
			<i style="font-size:57px;"class="fa fa-trash-o"></i>
			<span style="display:block"><?php _e('Delete All',wpshopmart_tabs_r_text_domain); ?></span>
		</a>
	</div>
	
</div>
<h1>Get Support Help Here</h1>
<h3>If You have any issue then please ask us any time</h3>
<a href="https://wordpress.org/support/plugin/colorbox-panels" target="_blank" class="button button-primary button-hero ">Get Support</a>
<br> <br>
<?php require('add-tabs-js-footer.php'); ?>