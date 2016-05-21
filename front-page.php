<div class="container">
	<!-- slider starts here -->
	<?php if ( function_exists( "easingslider" ) ) { easingslider(10933); } ?>
	<!-- slider ends here -->
	<div class="row margin-top-bottom">
		<div class="col-sm-4 margin-bottom">
			<?php
                $args = array( 'post_type' => 'wod', 'posts_per_page' => 1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) :
                  $loop->the_post();
                  $title = get_the_title();
                  $content = get_the_content();
                  $permalink = get_permalink( get_the_ID());
                  $num_comments =  get_comments_number();
                    if ( $num_comments == 0 ) {
                        $comments = __('No Comments');
                    } elseif ( $num_comments > 1 ) {
                        $comments = $num_comments . __(' Comments');
                    } else {
                        $comments = __('1 Comment');
                    }
                    $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
                  $image = get_the_post_thumbnail(get_the_ID(), 'medium', array( 'class' => 'img-thumbnail img-responsive' ));
                endwhile;
                wp_reset_postdata();
                if ($image == '') {
                    $image = '<img src="'.get_bloginfo('template_directory').'/img/Cookies.jpg">';
                };
            ?>
            <?php echo $image; ?>
		</div>
		<div class="col-sm-8 margin-bottom">
			<?php   
			$my_id = 10866;
			$post_id_5369 = get_post($my_id);
			$content = $post_id_5369->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
			?>
		</div>
	</div>
	<div class="row panel1">
		<div class="col-sm-5 col-xs-12">
			<!-- top left -->
			<?php the_field("what_is_cffc", 10866); ?>
		</div>
		<div class="col-sm-6 col-sm-offset-1 col-xs-12 path-to">
			<!-- top right -->
			<?php the_field("home_page_right_side", 10866); ?>
		</div>
	</div>
</div>
<section id="testimonials">
	<div class="container-fluid title-bar">
		<div class="container ">
			<div class="row">
				<h2 class="bigtitle">Testimonials</h2>
				<?php the_post(); ?>
				<?php the_content(); ?>
			</div><!-- .row -->
		</div><!-- .container-fluid -->
	</div>
</section>
<section id="wod">
<div class="container">
<div class="row">
	<div class="wod col-sm-6">
		<div class="card ">
		<div class="cardtitle">
			<h3>today's WOD</h3>
		</div>
		<?php
		
		$args = array( 'posts_per_page' => 1 );
		
		// The Query
		$the_query = new WP_Query( $args );
		
		// The Loop
		if ( $the_query->have_posts() ) {
			echo '<ul>';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<li><h4>' . the_title() . '</h4></li>';
				echo '<p>' . the_content() . '</p>';
			}
			echo '</ul>';
		} else {
			// no posts found
			echo 'nothing!';
		}
		
		?>
		</div><!-- .card -->
	</div><!-- .wod -->
	<div class="news col-sm-6">
		<div class="card ">
			<div class="cardtitle">
				<h3>news</h3>
			</div>
			<!-- news query . . . -->
			<?php
			
			$args = array( 'posts_per_page' => 1, 'post_type' => 'news' );
			
			// The Query
			$the_query = new WP_Query( $args );
			
			// The Loop
			if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<li><h4>' . the_title() . '</h4></li>';
					echo '<p>' . the_content() . '</p>';
				}
				echo '</ul>';
			} else {
				// no posts found
				echo 'nothing!';
			}
			?>
			<p class="text-center"><a class="btn btn-primary btn-raised">view all news</a></p>
		</div><!-- .card -->
	</div><!-- .news -->
</div><!-- .row -->
</div>
</section>
<div class="container-fluid sponsors-bar">
	<div class="container ">
		<div class="row">
			<div class="col-sm-3 col-xs-6"><img src="/wp-content/themes/cffc2/dist/images/sponsor2.png" alt="" /></div>
			<div class="col-sm-3 col-xs-6"><img src="/wp-content/themes/cffc2/dist/images/sponsor3.png" alt="" /></div>
			<div class="col-sm-3 col-xs-6"><img src="/wp-content/themes/cffc2/dist/images/sponsor4.png" alt="" /></div>
			<div class="col-sm-3 col-xs-6"><img src="/wp-content/themes/cffc2/dist/images/sponsor5.png" alt="" /></div>
		</div><!-- .row -->
	</div><!-- .container-fluid -->
</div>
<div class="container-fluid location">
</div>
<section id="sitemap">
<div class="container-fluid">
<div class="container ">
<div class="row">
<div class="col-sm-4">
<div class="widget">
<h3>About Us</h3>
<ul>
	<li>What is CrossFit?</li>
	<li>Testimonials</li>
	<li>FAQ</li>
	<li>Staff</li>
	<li>Community</li>
	<li>Location</li>
	<li>Contact</li>
</ul>
</div>
</div>
<div class="col-sm-4">
<div class="widget">
<h3>About Us</h3>
<ul>
	<li>What is CrossFit?</li>
	<li>Testimonials</li>
	<li>FAQ</li>
	<li>Staff</li>
	<li>Community</li>
	<li>Location</li>
	<li>Contact</li>
</ul>
</div>
</div>
<div class="col-sm-4">
<div class="widget">
<h3>About Us</h3>
<ul>
	<li>What is CrossFit?</li>
	<li>Testimonials</li>
	<li>FAQ</li>
	<li>Staff</li>
	<li>Community</li>
	<li>Location</li>
	<li>Contact</li>
</ul>
</div>
</div>
</div><!-- .row -->
</div><!-- .container-fluid -->
</div>
</section><footer class="container-fluid foot">
<div class="container">
	<div class="row">
		<div class="col-md-6 col-xs-12 call-us-box">
			<p class="call-us">Call Us Now! <a href="tel:571.733.7189">571.733.7189</a></p>
		
		</div>
		<div class="col-md-6 col-xs-12 social-media">
			<div class="mySocial"><a href="#"><img src="/wp-content/themes/cffc2/dist/images/instagram.png" alt="" /></a><a href="#"><img src="/wp-content/themes/cffc2/dist/images/facebook.png" alt="" /></a></div>
			Email: <a href="mailto:info@crossfitfallschurch.com">info@crossfitfallschurch.com</a>
		
		</div>
	</div><!-- .row -->
</div><!-- .container-fluid -->

</footer>