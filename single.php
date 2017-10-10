<?php get_header(); ?>
<style type="text/css">
	h1.post_title{
		font-size: 30px;
	}
.comment-form-comment #comment{
	display: none;
}
.width150{
	width: 200px;
}
.positionset{
	position: relative;
	top: -20px;
}
.positionset2{
	position: relative;
	top: -10px;
}
.positionset3{
	position: relative;
	
}
.onlymobile{
	display: none;
}
.anthorlink{
	font-size: 16px;
	font-weight: bold;
	padding: 10px 0px;
	display: block;
	color: #ED1C24;
}
.post_content ul, .post_content ol {
	color: #000;
}

@media (max-width:768px){
.onlymobile{
	display: block;
}
}
</style>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="page">
	<div class="page_layout page_margin_top clearfix">
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="row">
					<div class="post single">
						<h1 class="post_title">
							<?php echo get_the_title(); ?>
						</h1>
						<ul class="post_details clearfix">
							<li class="detail date"><?php echo get_the_date('F j Y' ); ?></li>
							<li><div class="fb-like" data-href="https://www.facebook.com/livevideoshub/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
						</ul>
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- contact -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-1518250080154239"
						     data-ad-slot="2550265139"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?>
						<?php if( $feat_image): ?>
						<a href="<?php echo $feat_image[0]; ?>" class="post_image page_margin_top prettyPhoto" title="<?php echo get_the_title(); ?>">
							<img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'>
						</a>
						<?php endif; ?>
						<div class="post_content clearfix">
							<div class="">
								<h2 class="excerpt" style="margin-top:0px; font-size:18px;"><?php echo get_field('subtitle'); ?></h2>
								<div class="onlymobile">
										<div class="width150">
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
										</div>
									</div>
								<div class="text">
									<?php echo apply_filters('the_content',$post->post_content); ?>
									<div class="width150">
									<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
									</div>
									<?php if(get_field('all_songs_320')): ?>
									<ul class="text-center movie_download">

										<li class="">
										<div class='download_text'>Click Below To Download All Songs [320KBPS]</div>
										<a href="<?php echo get_field('all_songs_320'); ?>"  target="_blank" >[Download Link] </a>
										</li>
										<div class="only-mobile"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<!-- smallmobilebanner -->
										<ins class="adsbygoogle"
										     style="display:inline-block;width:320px;height:100px"
										     data-ad-client="ca-pub-1518250080154239"
										     data-ad-slot="5972307534"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script></div>
										<li class="">
										<div class='download_text'>Click Below To Download All Songs [128KBPS]</div>
										<a href="<?php echo get_field('all_songs_128'); ?>" target="_blank" >[Download Link] </a>
										</li>
									</ul>
									<?php endif; ?>
									 <div class="onlymobile">
										<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
										<ins class="adsbygoogle"
										     style="display:block"
										     data-ad-client="ca-pub-1518250080154239"
										     data-ad-slot="9404697537"
										     data-ad-format="auto"></ins>
										<script>
										(adsbygoogle = window.adsbygoogle || []).push({});
										</script>
									</div>
									<?php if(get_field('all_songs_320')): ?>
									<div class="individual-songs">
										Click Below To Download Individual Songs
									</div>
									<?php endif; ?>
									<ul class="text-center movie_download">
										<?php while(has_sub_field('single_songs')): ?>
										<li class="">
											<div class='download_text'>
											<?php echo get_sub_field('song_name'); ?></div>
											<div class=''><?php echo get_sub_field('about_song'); ?></div>
											<a href="<?php echo get_sub_field('song_320'); ?>"  target="_blank" rel="nofollow" >[Download Link 320] </a><br/><br/>
											<a href="<?php echo get_sub_field('song_128'); ?>"  target="_blank" rel="nofollow">[Download Link 128] </a><br/><br/>
											<?php if(get_sub_field('song_128')): ?>
											<audio controls src="<?php echo get_sub_field('song_128');  ?>" preload="none">
											</audio>
											<?php endif; ?>
											<?php if(!get_sub_field('song_128')): ?>
											<audio controls src="<?php echo get_sub_field('song_320');  ?>" preload="none">
											</audio>
											<?php endif; ?>
											<div class="only-mobile">
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- smallmobilebanner -->
											<ins class="adsbygoogle"
											     style="display:inline-block;width:320px;height:100px"
											     data-ad-client="ca-pub-1518250080154239"
											     data-ad-slot="5972307534"></ins>
											<script>
											(adsbygoogle = window.adsbygoogle || []).push({});
											</script>
											</div>
										</li>
										<?php endwhile; ?>
									</ul>

								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
							<li>
								<a target="_blank" title="<?php echo get_the_title(); ?>" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" class="social_icon facebook">
									&nbsp;
								</a>
							</li>
							<li>
								<a target="_blank" title="<?php echo get_the_title(); ?>" href="http://twitter.com/share?url=<?php echo get_permalink(); ?>" class="social_icon twitter">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank" href="http://www.digg.com/submit?url=<?php echo get_permalink(); ?>" class="social_icon digg">
									&nbsp;
								</a>
							</li>
							<li>
								<a  title="<?php echo get_the_title(); ?>" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" class="social_icon googleplus">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="social_icon pinterest">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://reddit.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon reddit">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.stumbleupon.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon stumbleupon">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.tumblr.com/share/link?url=<?php echo get_permalink(); ?>" class="social_icon tumblr">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" text="<?php echo get_the_title(); ?>" target="_blank"  href="https://www.blogger.com/blog-this.g?u=<?php echo get_permalink(); ?>&n=<?php echo get_the_title(); ?>&t=<?php echo get_the_excerpt(); ?>" class="social_icon blogger">
									&nbsp;
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top">
					<ul class="taxonomies tags left clearfix">
						<?php $posttags = get_the_tags();?>
						<?php 
							if ($posttags) {
							foreach($posttags as $tag) {
						?>

						<li><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'>
								<?php echo $tag->name; ?>
							</a></li>
						<?php 
							}
							}
						?>
					</ul>
					<ul class="taxonomies categories right clearfix">
					<?php 	$categories = get_the_category();
						
						if ( ! empty( $categories ) ) {
						    foreach( $categories as $category ) {
						      echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' .get_the_title(). '">' . esc_html( $category->name ) . '</a></li>';
						    }
						   
						} 
						?>
						

					</ul>
				</div>
				<div class="row page_margin_top_section">
					<?php// echo comments_template();?>
				</div>
			</div>
			<div class="column column_1_3">
				<?php echo get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>			
<?php get_footer(); ?> 