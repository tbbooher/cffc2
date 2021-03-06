     <div class="col-md-12 content-area" id="main-column">
            <div class="row">
                <?php 
                while (have_posts()) {
                  the_post();
                  get_template_part('content', 'page');
                } //endwhile;
                ?> 
                <?php get_template_part('templates/page-header', 'page-header'); ?>
            </div>  
                    <!-- now display coaches -->
                    
            <?php
                $i = 1;
                $args = array( 'post_type' => 'coach', 'posts_per_page' => 30 );
                $loop = new WP_Query( $args );
                //added before to ensure it gets opened
                echo '<div class="row coach">';
                while ( $loop->have_posts() ) : $loop->the_post();
                    get_template_part('content', 'coach');
                     // if multiple of 3 close div and open a new div
                     if($i % 2 == 0) {echo '</div><div class="row coach">';}
                    $i++;
                endwhile;
                //make sure open div is closed
                echo '</div>';
            ?>                                  
        </div>


<?php get_footer(); ?> 