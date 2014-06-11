<?php get_header();?>

			<ul class="audience-nav">

				<?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>

			</ul>
			<!--NSU Arew-->
		

		</div>
		<!-- /main navigation -->
		<div id="content_alt">
			
			<div id="full-content">
				<!--- box border -->
				<a id="top" name="top"></a>
				<!--  -->
				<div id="main-content">

					

						<?php get_template_part('slider');?>

					<div class="clear"></div>

					<!-- Banner Section End -->

				<?php get_template_part('baner');?>

					<div id="top">
						<div align="right">
							<a href="#top"><img src="<?php echo get_template_directory_uri();?>/images/top.gif"  alt="top" width="32" height="12" /></a>
						</div>
					</div>
				</div>
			</div>
			<!--footer-->
			<?php get_footer();?>