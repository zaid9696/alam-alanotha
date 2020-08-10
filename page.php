<?php 

    get_header( );


    while(have_posts(  )){
        the_post();


?>


        <div class="container">

            <h2 class="page__title"><?php the_title(); ?></h2>

            <div class="page__content">

                <div class="page__container">
                <?php the_content(); ?>
                </div>
               
            </div>


        </div>



<?php 

    };

    get_footer( );

?>
