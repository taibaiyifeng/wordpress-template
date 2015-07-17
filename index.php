<?php
get_header();
?>
<!-- Header -->
			<div id="header" class="skel-layers-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="http://www.todayhealth.com.cn/editor/UploadFile/200981710759162.jpg" alt="" /></span>
							<h1 id="title">太白遗风</h1>
							<p>Hyperspace Engineer</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							
							<ul>
								<li><a href="<?php bloginfo('template_url');?>/#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="<?php bloginfo('template_url');?>/#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="<?php bloginfo('template_url');?>/#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
								<li><a href="<?php bloginfo('template_url');?>/#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="<?php bloginfo('template_url');?>/#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="<?php bloginfo('template_url');?>/#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://github.com/taibaiyifeng/" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="<?php bloginfo('template_url');?>/#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="<?php bloginfo('template_url');?>/#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
				
				</div>
			
			</div>
<?php
$args=array(
  'post_type'=>'page',//查找出所有页面（多个结果集，复数）
  //'page_id'=>x//仅仅查询id号为x(x是数字，你自己系统中‘现有’的某个文章的id)的页面，只有一个结果，单数，如果page_id不指定，则返回所有page
);
// 实例化wp_query
$the_query = new WP_Query( $args );
 
// 开始循环
//if ( $the_query->have_posts() ) {//如果找到了结果，便输出以下内容
 //       echo '<ul>';
//	while ( $the_query->have_posts() ) {//再次判断是否有结果
//		$the_query->the_post();//不用问为什么，每次都要写这个；
//		echo '<li>' . get_the_title() . '</li>';//这里开始输出你想要的模板标签
//	}
//        echo '</ul>';
//} else {
	// 如果没有找到任何结果，就输出这个
//}
 
wp_reset_postdata();//不用问为什么，每次都记得写就好
?>
<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">Hi，I'm <strong><?php the_title();?></strong>, a <a href="<?php bloginfo('template_url');?>/">free</a> networker<br />活力。。。。青春
								<p><?php wp_list_pages();?></p>
							</header>
							
							<footer>
								<a href="http://localhost/wordpress/2015/07/15/见者所见，带心则有心/" class="button scrolly">进入太白网络</a>
							</footer>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2>爱美女，爱生活</h2>
							</header>
							
							<p>既然你诚心诚意的发问了
为了防止世界被破坏
为了维护世界的和平
贯彻爱与真实的邪恶
可爱又迷人的反派角色
我们是穿梭在银河中的火箭队
白洞，白色的明天在等着我们
就是这样 ……喵……喵……</p>
						
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
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img3.luoo.net/pics/vol/53eb8d3a513f4.jpg_640x452.jpg" alt="" /></a>
										<header>
											<h3>Dolor Penatibus</h3>
										</header>
									</article>
									<article class="item">
										<a href="<?php bloginfo('template_url');?>/#" class="image fit"><img src="http://img3.luoo.net/pics/vol/5468bc57e944e.jpg_640x452.jpg" alt="" /></a>
										<header>
											<h3>Orci Convallis</h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Me</h2>
							</header>

							<a href="<?php bloginfo('template_url');?>/#" class="image featured"><img src="http://pic.58pic.com/58pic/13/86/73/21858PIC9GC_1024.jpg" alt="" /></a>
							
							<p><?php if (have_posts()) {
								while (have_posts()) {
									the_post();
								}
								
							} ?>
							<?php the_content(); ?>
							</p>

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>See you later</p>
							
							<form method="post" action="#">
								<div class="row 50%">
									<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="text" name="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<input type="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>
			
			</div>
<?php if(have_posts()):while (have_posts()) :the_post();?>
<?php endwhile;else:?>
<?php endif;?>
		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="<?php bloginfo('template_url');?>/">TaiBaiYiFeng</a></li>
					</ul>
				
			</div>
<?php get_footer(); ?>