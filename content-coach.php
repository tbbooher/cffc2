  <div  id="post-<?php the_ID(); ?>" class="col-md-12">
    <div class="staff-wrap">
       <?php the_post_thumbnail('medium', array('class' => 'staff-img')); ?>
      <div class="staff-content">
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>
        <a href="mailto:<?php echo get_post_meta(get_the_ID(), 'email', true) ?>"> <i class="fa fa-envelope"></i> Email <?php the_title(); ?></a>
        <p><?php echo get_post_meta(get_the_ID(), 'title', true) ?></p>
        <p><?php the_content(); ?></p>
      </div>
    </div>
  </div>
