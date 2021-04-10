                <div class="tnhd">
                    <h2 class="h23">top News</h2>
                </div>

                <?php

                        if(have_posts()){

                            while(have_posts()): the_post();?>

<div class="news">
    
    <?php the_post_thumbnail();?>

   
        <h2><?php the_title();?></h2><br>

        <h4>The company seems conflicted</h4><br>

        
        
       <p>
        <?php the_content(); ?>
        </p>

</div>



                <?php
                            endwhile;
                        }
                        else"No Post Found";
                ?>


                