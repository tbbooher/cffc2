<header class="container-fluid header">
  <div class="container">
    <div class="row rowtop">
      <div class="col-md-6 col-xs-12 logobox">
         <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <img class="logo" src="<?= get_template_directory_uri(); ?>/dist/images/logo@2x.png" alt="" />
         </a>
      </div>
      <div class="col-md-6 col-xs-12 cfcf-info">
        <p>Telephone: 202-767-3218</p>
        <p>Email: <a href="mailto:info@crossfitfallschurch.com">info@crossfitfallschurch.com</a> </p>
      </div>
    </div>
    <!-- /row--> 
  </div>
  <!-- /.container-->
  <div class="container-fluid nav-box">
    <div class="navbar navbar-inverse container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        	<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
          <?php
				if (has_nav_menu('primary_navigation')) :
				   wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
				endif;
		   ?>
        </ul>
        <form class="navbar-form navbar-left">
          <input class="form-control col-lg-8" placeholder="Search" type="text">
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/get-started/" class="btn btn-primary">Get Started</a> </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /.container--> 
</header>