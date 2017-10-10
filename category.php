<?php get_header(); ?>
<div class="page">
	
	<div class="page_layout clearfix">
		
		<div class="row">
			<div class="column column_2_3">
				<div class="page_header clearfix page_margin_top">
					<h1 class="page_title"> <?php echo single_tag_title(); ?></h1>
					<div class="category-desc"><?php echo tag_description(); ?> </div>
				</div>
				<div class="row">
					<ul class="blog big">
						<?php 
							if(have_posts()):  
							$count=1;
							while ( have_posts() ) : the_post();
						?>
						<li class="post" style="border-bottom:1px solid #ccc; padding-bottom:5px;">
							<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'thumbnail' );?>
								<?php if( $feat_image): ?>
								<img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'>
								<?php endif; ?>
							</a>
							<div class="post_content">
								<h2 class="with_number">
									<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
									<a class="comments_number" href="?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
								</h2>
								<ul class="post_details">
									<li class="category">
										<?php $posttags = get_the_tags();?>
										<?php 
											if ($posttags) {
											foreach($posttags as $tag) {
										?>
											<a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'>
												<?php echo $tag->name; ?>
											</a>
										<?php 
											}
											}
										?>
									</li>
									<li class="date">
										<?php echo get_the_date('g:i F j, Y' ); ?>
									</li>
								</ul>
								<p><?php echo substr(get_the_excerpt(),0,100); ?></p>
								<a class="read_more" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="arrow"></span><span>WATCH</span></a>
								<a class="read_more" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="arrow"></span><span>DOWNLOAD</span></a>
							</div>
						</li>
						<?php if($count==1 || $count==3||$count==5): ?>
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- Text Link ads for livevideoshub -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-1518250080154239"
						     data-ad-slot="8723242738"
						     data-ad-format="link"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						
						<?php endif; ?>
						<?php if($count==2 || $count==4 ||$count==6): ?>
						<div class=""><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- contact -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-1518250080154239"
						     data-ad-slot="2550265139"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						</div>
						<?php endif; ?>
					
						<?php 
						$count++;
							endwhile;
							endif;
						?>
					</ul>
				</div>
				<ul class="pagination clearfix page_margin_top_section">
					<?php twentyfourteen_paging_nav(); ?>
				</ul>
			</div>
			<div class="column column_1_3 page_margin_top">
				<?php echo get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>			
<?php get_footer(); ?>