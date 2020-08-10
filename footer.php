


<footer class="footer">

    <div class="footer__container">
        <div class="footer__icons">
            <div class="footer__icon">
                <img src="<?php echo get_theme_file_uri('/img/home.svg') ?>" alt="Home icon">
                <a href="<?php echo site_url('/'); ?>"><h4> الرئيسية </h4></a>
            </div>
            <div class="footer__icon">
                <img src="<?php echo get_theme_file_uri('/img/contact.svg') ?>" alt="Contact us icon">
                <a href="<?php echo site_url('/توصل-معنا'); ?>"><h4> تواصل معنا</h4></a>
            </div>
            <div class="footer__icon">
                <img src="<?php echo get_theme_file_uri('/img/about.svg') ?>" alt="About us icon">
                <a href="<?php echo site_url('/من-نحن'); ?>"><h4>من نحن</h4></a>
            </div>
        </div>
        <div class="footer__info">
            
            <div class="footer__social">
                <?php 
                       $social = new WP_Query(array(
                        'post_type' => 'description'
                  ));

                  while($social->have_posts()){
                      $social->the_post(); ?>

                     <div class="footer__social-icon">
                     <a href="<?php echo get_field('facebook_link') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/facebook.svg') ?>" alt="Facebook Icon" ></a>
                     </div>
                     <div class="footer__social-icon">
                     <a href="<?php echo get_field('twitter_link') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/twitter.svg') ?>" alt="twitter Icon" ></a>
                     </div>
                     <div class="footer__social-icon">
                     <a href="<?php echo get_field('instagram_link') ?>" target="_blank"><img src="<?php echo get_theme_file_uri('/img/instagram.svg') ?>" alt="instagram Icon" ></a>
                     </div>

                 
               <?php }

                 ?>


            </div>
            <div class="footer__copy">
            © جميع الحقوق محفوظة - عالم الأنوثة
            </div>
        </div>
    </div>
</footer>

<div class="frontoverlay">

<div class="cancelicon"><img src="<?php echo get_theme_file_uri('/img/cancel.svg') ?>" alt="Cancel Icon"></div>

    <form class="frontoverlay__form" autocomplete="off">
            <input type="search"  placeholder="الرجاء البحث هنا" name="search" id="search" class="frontoverlay__form-search">
            <div class="loadicon"><img src="<?php echo get_theme_file_uri('/img/loadicon.svg') ?>" alt="Load Icon"></div>

            <div class="frontoverlay__container-start">

       
    
            </div> 
    </form>

  


</div>



<?php wp_footer(); ?>

</body>
</html>