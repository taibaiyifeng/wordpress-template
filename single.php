<?php 
 get_header(); ?>
	<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>小小哲学家</h2>
							</header>
						
							<span id="post"><?php the_title();?></span>
							
							<?php while (have_posts()) {
								the_post();
							}?>
							<p>作者:<?php the_author();?> <?php the_date();?></p>
							
							<p><?php if(have_posts()):while (have_posts()) :the_post();?>
								<?php endwhile;else: ?>
								<?php echo '文章已经到尽头啦';?>
							<?php endif;?>
						
						
							
							<div class="5u-9u">
							<?php the_content(); ?>
							</div>
							</p>
							<h2>上一篇</h2>
							<?php 
								if (previous_post_link('%link')) {
									previous_post_link('%link');
								}	

							 ?>
							下一篇:<h1>
							<?php 
								if (next_post_link('%link')) {
									next_post_link('%link');
								}
							?></h1>

						</div>
					</section>
	<?php get_footer(); ?>
			
