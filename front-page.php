<div class="container">
	<!-- slider starts here -->
	<div class="home-slider">
		<?php if ( function_exists( "easingslider" ) ) { easingslider(10933); } ?>
	</div>
	<!-- slider ends here -->
	<div class="row margin-top-bottom">
		<div class="col-sm-4 margin-bottom">
			<?php
                $args = array( 'post_type' => 'post', 'posts_per_page' => 1 );
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
                  $the_id = get_the_ID();  
                  $image = get_the_post_thumbnail($the_id, 'medium', array( 'class' => 'img-thumbnail img-responsive' ));
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
			  if (have_posts()): while (have_posts()): the_post();
			  	wp_title(''); echo '<br />';
				the_content(); echo '<br />';
			  endwhile; endif;
			?>
		</div>
	</div>
</div>

<section id="wod">
<div class="container">
<div class="row">
	<div class="wod col-sm-6">
		<div class="card ">
			<div class="cardtitle">
				<h3>today's WOD</h3>
			</div>
			<h4><a href="<?php echo $permalink ?>"><?php echo $title; ?></a></h4>
			<div class="entry-content">
				<?php echo apply_filters( 'the_content', $content ); ?>
				<p><?php echo $write_comments; ?></p>
			</div>	
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
	<div class="container">
		<img src="/wp-content/themes/cffc2/dist/images/sponsor2.png" alt="" class="sponsors-img" />
		<img src="/wp-content/themes/cffc2/dist/images/sponsor3.png" alt="" class="sponsors-img" />
		<img src="/wp-content/themes/cffc2/dist/images/sponsor5.png" alt="" class="sponsors-img" />
	</div><!-- .container-fluid -->
</div>