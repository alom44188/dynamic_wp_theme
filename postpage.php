
<?php

    if(have_posts()){

        while(have_posts()) : the_post();?>

        
     <div class="news1">

            <?php the_post_thumbnail();?>
    
                       
              <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2><br>
    
               <h4>Is the classic design gone for good?</h4><br>
               <span> <?php comments_popup_link('NO Comment','1 Comment','% Comment','comment_class','Comments Off'); ?></span>
                 <p>
                   <?php echo wp_trim_words(get_the_content(),30); ?>
               </p>
               <?php comments_template();?>
    
      </div>

    <?php

    endwhile;
    }

    else{
        echo" No Post Found";
    }
?>

