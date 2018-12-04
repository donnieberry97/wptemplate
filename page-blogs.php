<?php 


get_header();?>

<section class="grey">
          <?php 
$args = array('post_type' => 'post',
             'posts_per_page'=> -1);
    
    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) {
        while($post_query->have_posts() ){
            $post_query->the_post(); ?>
            
    <div class="container two-side lessPadding flex">

            
        <div class="image">
            <?php the_post_thumbnail('news-post');?>
        </div>

        <div class="post">
            <h2 class="title"><?php the_title();?></h2>
            <small>Posted on: <?php the_time();?></small>
            <p><?php the_content();?></p>
            <div class="about-button">
                <button class="btn__default">Read More</button>
            </div>
    </div>
    </div>
        <?php
        }
    }
?>        

</section>


        <?php get_footer();?>
