<?PHP get_header(); 
	/*
		Template Name: Home Page
	*/
?>
	<div class="page">
		<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<div class="column column_2_3">
				<div class="row ">
					<div class="column column_1_2" >
						<h4 class="box_header">LATEST TELUGU SONGS</h4>
						<ul class="blog small clearfix">
							<?php 
			                    query_posts('cat=3&posts_per_page=20');
									if(have_posts()):
								$count=1;
									while ( have_posts() ) : the_post();
							?>
							<li class="post" >
							<h6>
								<span style="color:red;">* <?php echo get_the_date('Y'); ?> &nbsp; </span> <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php echo get_field('movie_name'); ?>
								</a>
							</h6>
							</li>
							<?php 
								endwhile;
								endif;
							?>
						</ul>
					</div>
					<div class="column column_1_2">
						<h4 class="box_header">LATEST HINDI SONGS</h4>
						<ul class="blog small clearfix">
							<?php 
			                    query_posts('cat=4&posts_per_page=20');
									if(have_posts()):
								$count=1;
									while ( have_posts() ) : the_post();
							?>
							<li class="post" >
							<h6>
								<span style="color:red;">* <?php echo get_the_date('Y'); ?> &nbsp; </span> <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php echo get_field('movie_name'); ?>
								</a>
							</h6>
							</li>
							<?php 
								endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
			</div>
			<div class="column column_1_3">
				<!-- <h4 class="box_header">LATEST ENGLISH SONGS</h4>
				<ul class="blog small clearfix">
					<?php 
	                    query_posts('cat=5&posts_per_page=8');
							if(have_posts()):
						$count=1;
							while ( have_posts() ) : the_post();
					?>
					<li class="post" >
					<h6>
						<span style="color:red;">* <?php echo get_the_date('Y'); ?> &nbsp; </span> <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
						<?php echo get_field('movie_name'); ?>
						</a>
					</h6>
					</li>
					<?php 
						endwhile;
						endif;
					?>
				</ul> -->
			</div>
		</div> 
	</div>
	
</div>
<?php get_footer(); ?>