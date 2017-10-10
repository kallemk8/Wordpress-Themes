﻿			<div class="footer_container">
				<div class="footer clearfix">
					<div class="row page_margin_top_section">
						<div class="column column_3_4">
							<?php wp_nav_menu(array('theme_location'=>'footer-menu','menu_class'=>'footer_menu')); ?>
							
						</div>
						<div class="column column_1_4">
							<a class="scroll_top" href="#top" title="Scroll to top">Top</a>
						</div>
					</div>
					<div class="row copyright_row">
						<div class="column column_2_3">
							&copy; Copyright <a href="http://www.liveaudiosongs.com" title="Liveaudiosongs" target="_blank">Liveaudiosongs</a> 
						</div>
						<div class="column column_1_3">
							<ul class="footer_menu">
								<li>
									<h6><a href="http://www.livevideoshub.com/disclaimer/" title="Contact Us">Disclaimer</a></h6>
								</li>
								<li>
									<h6><a href="http://www.livevideoshub.com/kallemdesign/" title="About">About</a></h6>
								</li>
								<li>
									<h6><a href="<?php echo home_url(); ?>/category/trailers/" title="Authors">Category</a></h6>
								</li>
								<li>
									<h6><a href="http://www.livevideoshub.com/contact-us/" title="Contact Us">Contact Us</a></h6>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background_overlay"></div>
		<?php wp_footer(); ?>
	</body>
</html> 