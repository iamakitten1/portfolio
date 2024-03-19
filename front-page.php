<?php

get_header();
?>
   
<main  class="home-page">
    <!-- first section -->
    <section class="home-section-1">
        <div class="hero-content">
            <h2 class="hello">Hello, </h2>
            <h1 class="hero-name">I’m Akhil T J</h1>
            <p class="hero-text">Freelance Designer, specialized in UI/UX.</p>
            <div class="hero-socials">
               <a href="#"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/twitter.png ' ?> " alt="Twitter">
               </a> 
               <a href="#"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/linkedin.png ' ?> " alt="Linkedin">
               </a> 
               <a href="#"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/instagram.png ' ?> " alt="Instagram">
               </a> 
               <a href="#"> 
                <img src=" <?php echo get_template_directory_uri() . '/assets/images/behance.png ' ?> " alt="Behance">
               </a> 
            </div>

        </div>
        

    </section>


</main>







 <?php

get_footer();
?>