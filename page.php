<?php
	get_header();

?>


<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2><?php the_title(); ?></h2>
							</header>
							
							<p>既然你诚心诚意的发问了
为了防止世界被破坏
为了维护世界的和平
贯彻爱与真实的邪恶
可爱又迷人的反派角色
我们是穿梭在银河中的火箭队
白洞，白色的明天在等着我们
就是这样 ……喵……喵……</p>
						<?php the_content(); ?>
							<div class="row">
								<div class="4u">
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img3.luoo.net/pics/vol/548c4ad455f6a.jpg_640x452.jpg" alt="" /></a>
										<header>
											<h3>Ipsum Feugiat</h3>
										</header>
									</article>
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img001.21cnimg.com/photos/game_0/20150301/c100-0-0-500-318_r0/21EC9BB9BD6E3898F9DC7E15862C975E.jpeg" alt="" /></a>
										<header>
											<h3>Rhoncus Semper</h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img3.luoo.net/pics/vol/54b006072f465.jpg_640x452.jpg" alt="" /></a>
										<header>
											<h3>Magna Nullam</h3>
										</header>
									</article>
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img3.luoo.net/pics/vol/54f7460f82e15.jpg_640x452.jpg" alt="" /></a>
										<header>
											<h3>Natoque Vitae</h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img3.luoo.net/pics/vol/53eb8d3a513f4.jpg_640x452.jpg" alt="<?php the_content(); ?>" /></a>
										<header>
											<h3><?php the_title(); ?></h3>
										</header>
									</article>
<?php $args = array(
	'post_type' => 'page',
	);
	$the_query = WP_Query($args);
	wp_reset_postdata();

?>
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><?php the_content(); ?></a>
										<header>
											<h3><?php the_title(); ?></h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>
<?php get_footer(); ?>