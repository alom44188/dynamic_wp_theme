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

            <h2>Search Result for<?php get_search_query(); ?></h2>

            <div class="troom">

                    <div class="news">
                        <?php get_template_part('postpage');?>
                    </div>
            </div>
            
            <div class="foot">

                <?php get_footer()?>
                <!-- end of foot -->
            </div>


            <div class="copy">
                &copy;copyright 2021 | All Right Reserved By K Alom
            </div>
            <!-- end o blog  -->
        </div>


        <?php wp_footer();?>
    </body>


</html>