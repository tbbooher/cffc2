<div class="container">
<div class="row panel1">
<div class="col-sm-5 col-xs-12">
<h2 class="bigtitle">What is CFFC?</h2>
<img class="about-img" src="/wp-content/themes/cffc2/dist/images/thumb.jpg" alt="" />

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

</div>
<div class="col-sm-6 col-sm-offset-1 col-xs-12 path-to">
<h2 class="bigtitle">the path to success</h2>
<div class="row path">
<div class="col-md-2 col-xs-12 dotted-path"><img class="path-icon" src="/wp-content/themes/cffc2/dist/images/piggy.png" alt="free class" /></div>
<div class="col-md-10 col-xs-12 content-path">
<h3>free class</h3>
CrossFit Falls Church provides a free workout for non-members that are interested in joining our community. There is no need to sign up in advance!

</div>
</div>
<div class="row path">
<div class="col-md-2 col-xs-12 dotted-path"><img class="path-icon" src="/wp-content/themes/cffc2/dist/images/dumbbell.png" alt="free class" /></div>
<div class="col-md-10 col-xs-12 content-path">
<h3>Elements classes</h3>
Elements classes are meant to ensure that anyone wanting to work out at our facility can demonstrate a basic level of proficiency in the most common functional CrossFit movements before moving onto our membership status.

</div>
</div>
<div class="row path">
<div class="col-md-2 col-xs-12 dotted-path"><img class="path-icon" src="/wp-content/themes/cffc2/dist/images/prize.png" alt="free class" /></div>
<div class="col-md-10 col-xs-12 content-path">
<h3>Join our community</h3>
In order to sign up for a membership, you must have first completed one of our Elements programs or a skills test-in.

</div>
</div>
<button class="cta-but">signup today!</button>

</div>
</div>
</div>
<section id="testimonials">
<div class="container-fluid title-bar">
<div class="container ">
<div class="row">
<h2 class="bigtitle">Testimonials</h2>
</div><!-- .row -->

</div><!-- .container-fluid -->

</div>
<div class="container-fluid">
<div class="container ">
<div class="row">
<div class="item col-md-4">
<div class="card ">
<div class="avatar"><img src="/wp-content/themes/cffc2/dist/images/testi1.jpg" alt="" /></div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div><!-- .card -->
</div><!-- .item -->
<div class="item col-md-4">
<div class="card ">
<div class="avatar"><img src="/wp-content/themes/cffc2/dist/images/testi2.jpg" alt="" /></div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div><!-- .card -->
</div><!-- .item -->
<div class="item col-md-4">
<div class="card ">
<div class="avatar"><img src="/wp-content/themes/cffc2/dist/images/testi3.jpg" alt="" /></div>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div><!-- .card -->
</div><!-- .item -->
</div><!-- .row -->
</div><!-- .container-fluid -->
</div>
</section><section id="wod">
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
		echo '<li><h4>' . get_the_title() . '</h4></li>';
		echo '<p>' . get_the_content() . '</p>';
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

$args = array( 'posts_per_page' => 3 );

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li><h4>' . get_the_title() . '</h4></li>';
		echo '<p>' . get_the_content() . '</p>';
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
<div class="embed-container"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.1111690556327!2d-77.1684088846504!3d38.8868752670148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b4e92e158b29%3A0xe4e12fd474db91a4!2s130+W+Jefferson+St%2C+Falls+Church%2C+VA+22046!5e0!3m2!1sen!2sus!4v1447541434330" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
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