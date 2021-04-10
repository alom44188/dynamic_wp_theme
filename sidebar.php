
 <?php dynamic_sidebar(); ?>

<div class="treading">

        
                    <div class="ttle">
                        <h2>treading</h2>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                    
                    <?php

                     $max= new wp_query(

                          array(
                            'post_type'=>'Our_sidebar',
                          )
                        );

         
                            if($max->have_posts()){

                                while($max->have_posts()): $max->the_post() ?>

                                <a href=""><?php the_content(); ?></a>
                            
                            <?php
                            endwhile;
                            }
                            

                            else{
                                echo"No News Found";
                            }
                   ?> 
                    </a><br>
                  
</div>
               