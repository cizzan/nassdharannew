<footer>
	<!-- footer-top-area-start -->
	<div class="footer-top-area pt-100 pb-70 bg-opacity-5" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/bg/2.jpg);">
		<?php $topMenu = get_field('top_menu', 5); ?>

		<div class="container">
			<div class="border-bottom">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="footer-wrapper mb-30">
							<h2 class="footer-title">About NASS</h2>
							<div class="footer-content">
								<p>
									National Academy is the leading institution in Eastern Nepal for Secondary Level Education. It also runs graduate
									Level program B.Ed.IT.
								</p>
							</div>
							<ul class="footer-link">
								<li>
									<i class="zmdi zmdi-pin"></i>
									<?php echo $topMenu['address'];  ?>

								</li>
								<li><i class="zmdi zmdi-phone"></i> <?php echo $topMenu['phone'];  ?>
								</li>
								<li>
									<i class="zmdi zmdi-email"></i> <?php echo $topMenu['email'];  ?>

								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 footer-1 col-sm-6">
						<div class="footer-wrapper mb-30">
							<h2 class="footer-title">Useful Links</h2>
							<ul class="footer-menu">
								<li><a href="about/">About Us</a></li>
								<li><a href="admission/#admission">Admission Procedure</a></li>

								<li>
									<a href="admission/#faq">Frequently Asked Questions</a>
								</li>
								<li><a href="contact/">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-wrapper mb-30">
							<h2 class="footer-title">Notices</h2>
							<?php $catquery = new WP_Query(array(
								'category_name' => 'notice',
								'posts_per_page' => '3'

							)); ?>
							<?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

								<ul class="latest-news">
									<li>
										<div class="latest-news-info">
											<div class="latest-news-content">
												<span><i class="fa fa-calendar-alt"></i><?php echo get_the_date(); ?>
												</span>
												<h5>
													<a href="<?php echo get_permalink(get_the_ID()); //to send the id of post and view in single page. 
																?>"><?php echo the_title(); ?></a>
												</h5>
											</div>
										</div>
									</li>

								</ul>


							<?php endwhile;
							?>
							<?php $categoryLink = get_category_link(the_category_ID(false));
							$categoryLink = str_replace("/category/", "/", $categoryLink);
							?>
							<a href="<?php echo esc_url($categoryLink); //getting the category link
										?>">View all Notices
								<i class="ti-angle-double-right view-all"></i>
								</a>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
					<?php if (have_rows('download_file', 901)) : ?> <div class="col-md-3 col-sm-6">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-title">Downloads</h2>
								<ul class="latest-news">
									<?php $i = 0; ?>
									<?php while (have_rows('download_file', 901)) : the_row();
										$title = get_sub_field('title');
										$file = get_sub_field('file');
										if ($i > 3) {
											break;
										}

									?>
										<li>
											<div class="latest-news-info">
												<div class="latest-news-content">
													<h5>
														<a href="<?php echo $file['url']; ?>"><i class="far fa-file-pdf"></i>
															<?php echo $title; ?></a>
													</h5>
												</div>
											</div>
										</li>
									<?php $i++;
									endwhile; ?>
								</ul>
								<a href="download/">View all Downloads
									<i class="ti-angle-double-right view-all"></i></a>
							</div>
						</div>
					<?php endif; ?>

				</div>
			</div>
			<div class="subscribes-area pt-50">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="subscribess-wrapper mb-30">
							<div class="subscribe-info">
								<h5>Connect Us With :</h5>
							</div>
							<div class="footer-icon">
								<?php if (have_rows('social_sites', 5)) : ?>
									<?php while (have_rows('social_sites', 5)) : the_row();
										$socialSiteLink = get_sub_field('social_site_link');
									?>
										<?php if ($socialSiteLink) : ?>
											<a href="<?php echo $socialSiteLink; ?>" target="_blank"><i class="
										<?php
											$str = $socialSiteLink;
											preg_match('/https:\/\/www.(.*?).com/', $str, $match);
											echo "fab fa-" . $match[1]; ?>">
												</i></a>

										<?php endif; ?>
									<?php endwhile; ?>
								<?php endif; ?>
								<!-- <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
								<a href="https://www.pinterest.com"><i class="fab fa-youtube"></i></a> -->
							</div>
						</div>
					</div>
					<!-- <div class="col-md-6 col-sm-6">
						<div class="subscribess-wrapper mb-30">
							<div class="subscribes-content">
								<h5>Subscribe Now :</h5>
							</div>
							<div id="mc_embed_signup" class="subscribe-form">
								<form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
									<div id="mc_embed_signup_scroll" class="mc-form">
										<input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your Email" required="" />
										<div class="mc-news" aria-hidden="true">
											<input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="" />
										</div>
										<div class="clear clear2">
											<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" />
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- footer-top-area-end -->
	<!-- footer-bottom-area-start -->
	<div class="footer-bottom-area ptb-25">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="copyright">
						<p>
							<i class="fa fa-copyright"></i>Copyright, <?php echo date('Y'); ?>
							<a href="http://devitems.com/">nassdharan.edu.np</a>
						</p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6">
					<ul class="footers-link floatright">
						<li>Site By: <a href="https://www.facebook.com/inepalcreation" target="_blank">iNepal Creation</a></li>
						<!-- <li><a href="#"> FAQ</a></li>
						<li><a href="#"> Support</a></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-bottom-area-end -->
</footer>


<?php wp_footer(); ?>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>
<script type="text/javascript">
	$(window).on('load', function() {
		$('#myModal').modal('show');
	});
</script>
</body>

</html>