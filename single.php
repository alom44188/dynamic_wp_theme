<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/img/favicon.ico" type="image/x-icon">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>
</head>


    <body>
        <div class="blog">


            <div class="fastsection">

                <div class="logo">
    
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/img/Untitled-2.png" alt="creative blog">
                    </a>
                    <!-- end of logo -->
                </div>
    
                <div class="banner">

                <?php get_search_form();?>
                    <!-- end of banner -->
                </div>


                <!-- end of fastsec -->
            </div>

            <div class="secroom">

               <?php get_template_part('menu');?>

                <!-- end of secroom -->
            </div>

            <div class="slider">

                    <?php get_template_part('slider');?>

            
                    <!-- <script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
                    <script type="text/javascript" src="jquery.nivo.slider.js"></script> -->
                    <script type="text/javascript">
                    $(window).load(function() {
                        $('#slider').nivoSlider();
                    });
                    </script>

                <!-- end of slider part -->
            </div>

            <div class="troom">

            <div class="news">
                
<?php

if(have_posts()){

    while(have_posts()) : the_post();?>

    
 <div class="news1">

        <?php the_post_thumbnail();?>

                   
          <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2><br>

           <h4>Is the classic design gone for good?</h4><br>
           <span> <?php comments_popup_link('NO Comment','1 Comment','% Comment','comment_class','Comments Off'); ?></span>
             <p>
               <?php the_content();?>
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


             </div>

            
             
                    <!-- side bar -->

                <!-- end of troom -->
            </div>
            <!-- end o blog  -->
        </div>


        <?php wp_footer();?>
    </body>


</html>