<?php get_header(); ?>



<article class="single_article">
	<div class="row">
		<div class="col-md-9 single_article_content">
			<!-- Get post mặt định -->
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>		

				<h2 class="category_name"><?php the_category(' ,'); ?></h2>
				<h1><?php the_title(); ?></h1>
				<div class="first-like">
					<time class="l" itemprop="datePublished" datetime="<?php the_date('d-m-Y'); ?>">
						<i class="fa fa-calendar" aria-hidden="true">											
						</i> <span><?php echo get_the_date(); ?></span>
					</time>
					<div class="l author_pulic"> 
						<i class="dslc-icon-ext-user3"></i> 
						<span itemprop="author" >Tác giả : <?php the_author(); ?></span>
					</div>
				</div>
				<?php the_post_thumbnail(); ?>

				
				<?php the_content(); ?>



				<blockquote class="read_more_category">
					<p>
						<strong>Xem thêm : </strong><span style="color:#ff0000;"> <?php the_category(' ,'); ?> </span><!-- <a href="<?php the_category(' ,'); ?>"></a> -->
					</p>
				</blockquote>

				<p><em>Liên hệ <strong>tại SkyTech</strong>  ngay hôm nay để có ưu đãi tốt nhất..</em></p>
				
				<p>
					<strong>Hotline: <span style="color:#ff0000;">0905.063.126(Mr.Vinh)</span> - <span style="color:#ff0000;">0905.893.680(Mr.Lĩnh)</span>&nbsp;&nbsp; </strong><br>
					
				</p>

				<p><strong>Email: <span style="color:#008000;">sales@skytechkey.com</span></strong></p>


				<div class="tags_container clear">
					<strong><i class="fa fa-tags" aria-hidden="true"></i> Tags:</strong>
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
						  foreach($posttags as $tag) {
						    // echo $tag->name . ' '; ?>
						    <span class="post_tag" id="tag_462">
								<a rel="tag" href="<?php echo get_tag_link($tag->term_id) ?>" class="hvr-bounce-to-right"><i class="fa fa-check" aria-hidden="true"></i>  <!-- thiáº¿t káº¿ website khÃ¡ch sáº¡n --> <?php echo $tag->name; ?></a>
							</span>
						 <?php }
						}
						?>
				</div>

				

				<div class="cmt" style="width: 100%">
					<div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
				</div>

				<div id="fb-root"></div>
				<script>
				(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=750688268378229";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
				</script>





				<div class="more-articles clear">

	                         		
	                         		<?php 
	                         			$categories = get_the_category($post->ID);
	                         			if ($categories) 
	                         			{
	                         				$category_ids = array();
	                         				foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
	                         				$args=array(

									        'category__in' => $category_ids,
									        'post__not_in' => array($post->ID),
									        'showposts'=>6, // Số bài viết bạn muốn hiển thị.
									        'caller_get_posts'=>1
									        );

									  
									        
	                         			}
	             //             			$args = array(
										    // 'post_type' => 'post',
										    // 'orderby'   => 'rand',
										    // 'posts_per_page' => 6, 
										    // );
										 
										$the_query = new WP_Query( $args );
										 
										if ( $the_query->have_posts() ) {?>
										 <p class="title_top">Bài viết liên quan: </p>
										<div class="container_releated_post clear row">
										   <?php while ( $the_query->have_posts() ) {?>
												<div class="col-md-6 box-releated-single-group">
			                         				<div class="box-releated-single clear">
						                        		<span class="imgNews fl">
						                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						                                		<?php the_post_thumbnail(); ?>
															</a>
						                        		</span>
						                        		<span class="news-title">
						                            		<a href="<?php the_permalink(); ?>" title="T<?php the_title(); ?>">
						                                		<?php the_title(); ?>
															</a>
						                            	</span>
													</div>
			                         			</div>
										 <?php $the_query->the_post();
										        $string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
										    }
										   ?>
										   	
										</div>

										<?php
										    /* Restore original Post Data */
										    wp_reset_postdata();
										} else {
										 
										$string .= 'no posts found';
										}

	                         		 ?>

	       
	                         </div>
	
			<?php endwhile; else : ?>
			<p>Không có</p>
			<?php endif; ?>
			<!-- Get post mặt định -->
			
		</div>
		<div class="col-md-3 single-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
	
</article>


<?php get_footer(); ?>