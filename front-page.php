<?php
$first_section =get_field('first_section');
$hello = $first_section['hello'];
$hero_name =$first_section['hero_name'];
$hero_descripton =$first_section['hero_descripton'];
$social_links =$first_section['social_links'];

// echo '<pre>';
// print_r($hero_descripton);
// echo '<pre>';
get_header();
?>
   
<main  class="home-page">
    <!-- first section -->
    <section class="home-section-1">
        <div class="hero-content">
            <h2 class="hello"> <?php echo $hello  ?> </h2>
            <h1 class="hero-name"> <?php echo $hero_name?></h1>
            <p class="hero-description"> <?php echo $hero_descripton?></p>
            <div class="hero-socials">
                <?php if ($social_links['twitter']):?>
               <a href=" <?php echo $social_links['twitter']?>"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/twitter.png ' ?> " alt="Twitter">
               </a> 
               <?php endif; ?>

               <?php if ($social_links['linkedin']):?>
               <a href=" <?php echo $social_links['linkedin']?>"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/linkedin.png ' ?> " alt="Linkedin">
               </a> 
               <?php endif; ?>

               <?php if ($social_links['instagram']):?>
               <a href=" <?php echo $social_links['instagram']?>"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/instagram.png ' ?> " alt="Instagram">
               </a> 
               <?php endif; ?>

               <?php if ($social_links['behance']):?>
               <a href=" <?php echo $social_links['behance']?>"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/behance.png ' ?> " alt="Behance">
               </a> 
               <?php endif; ?> 
            </div>
        </div>
    </section>
</main>
 <?php

get_footer();
?>