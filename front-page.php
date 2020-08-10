<?php 

    get_header( );

?>



<div class="container">



<section class="hero">
        
<div class="owl-carousel">

    <?php 
            $args = array(
                'posts_per_page' => '5',
                'category_name' => 'main'
            );

            $mainPosts = get_posts($args);
            foreach($mainPosts as $post) : setup_postdata($post);
            // print($mainPost);

    ?>
    
    <div class="item-container"><div class="bg">
            
          <img src="<?php the_post_thumbnail_url(); ?>" alt="" srcset="">  
        <a href="<?php the_permalink() ?>" class="item-content"><h2><?php the_title(); ?></h2></a>
    </div></div>


    <?php 

        endforeach;

        wp_reset_postdata();
    ?>
    
    

</div>
       

</section>

<section class="navcenter">
        <div class="navcenter__center">
            <?php 
                    wp_nav_menu(array(

                        'theme_loction' => 'primary'
                    ));
             ?>
        </div>
</section>

<main class="content">

      <div class="content__container">

            <article class="content__article">
                    <div class="content__line"> <h2 class="content__title">أخبار</h2><span></span></div>
                    <div class="content__article-cards">
                    <?php 
 
                // );

                        $args = array(
                            'posts_per_page' => '4',
                            'category_name' => 'اخبار',
                               
                        );

                        $mainPosts = get_posts($args);
                        foreach($mainPosts as $post) : setup_postdata($post);
                        // print($mainPost);

                    ?>


                    <div class="content__article-card">
                            <a href="<?php the_permalink() ?>"><div class="content__article-cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                <p><?php
                                    if(has_excerpt()){

                                        the_excerpt(  );
                                        
                                    } else {

                                       echo wp_trim_words( get_the_content(), 25, '...' );
                                    }
                             ?></p>
                        </div></a>
                            <a href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
                            <div class="content__article-info">
                                <span><?php the_time( 'd F Y' ); ?></span>
                                <span>
                            <?php 
                                $category = get_the_category();

                                // echo $category;
                                foreach ($category as $cat) {

                                    // echo $cat;

                                    if ($cat->name != 'اخبار' AND $cat->name != 'main') {
                                        
                                           $catlink = $cat->term_id;
                                           $catname = $cat->name;
                                            ?>

                                      <a href="<?php echo get_category_link($catlink); ?>"><?php echo $catname?></a>
                                       
                            <?php        }
                                } 
                            ?>
                                </span>
                            </div>
                    </div>
                     <?php 

                            endforeach;
                            wp_reset_postdata();
                        ?>       

                        <button class="content__link"><a href="<?php echo site_url('/category/اخبار') ?>">المزيد</a></button>
                    </div>

                    <section class="content__fashion">
                        <h2 class="content__fashion-title">موضة</h2>
                        <div class="content__fashion-container">
                        <?php 
                            
                            $args = array(
                                'posts_per_page' => '4',
                                'category_name' => 'موضة',           
                            );

                            $mainPosts = get_posts($args);
                            foreach($mainPosts as $post) : setup_postdata($post);
                                // print($mainPost);
                            ?>
                            
                            <div class="content__fashion-card">
                               
                               <a href="<?php the_permalink(); ?>">
                                    <div class="content__fashion-cover"><img src="<?php the_post_thumbnail_url(); ?>" alt="صور موضة"></div>
                               </a>

                               <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                               </a>

                               <div class="content__article-info">
                                <span><?php the_time( 'd F Y' ); ?></span>
                                <span>
                            <?php 
                                $category = get_the_category();

                                // echo $category;
                                foreach ($category as $cat) {

                                    // echo $cat;

                                    if ($cat->name != 'اخبار' AND $cat->name != 'main') {
                                        
                                           $catlink = $cat->term_id;
                                           $catname = $cat->name;
                                            ?>

                                      <a href="<?php echo get_category_link($catlink); ?>"><?php echo $catname?></a>
                                       
                            <?php        }
                                } 
                            ?>
                                </span>
                            </div>
                                    
                                
                            </div>
                            


                        <?php 

                            endforeach;
                            wp_reset_postdata();
                        ?> 

                        <button class="content__link"><a href="<?php echo site_url('/category/موضة') ?>">المزيد</a></button>

                        </div>
                    </section>

                    <section class="content__mixed">
                    <div class="content__line"> <h2 class="content__title mixed-header">مقالات متنوعة</h2><span></span></div>
                        
                        <div class="content__mixed-container">
                        <?php 
                            
                            $args = array(
                                'posts_per_page' => '1',
                                'category_name' => 'مقالات-متنوعة',           
                            );

                            $mainPosts = get_posts($args);
                            foreach($mainPosts as $post) : setup_postdata($post);
                                // print($mainPost);
                            ?>

                            <div class="content__mixed-card">
                            
                                <a href="<?php the_permalink(); ?>">
                                <div class="content__mixed-cover"><img src="<?php the_post_thumbnail_url() ?>" alt="صور مقالات متنوعة"></div>
                                </a>
                                <div class="content__mixed-content">
                                    <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                    </a>
                                    <a href="<?php the_permalink(); ?>"><p><?php
                                    if(has_excerpt()){

                                        the_excerpt(  );
                                        
                                    } else {

                                       echo wp_trim_words( get_the_content(), 35, '...' );
                                    }
                             ?></p></a>
                             <div class="content__article-info">
                                <span><?php the_time( 'd F Y' ); ?></span>
                                <span>
                            <?php 
                                $category = get_the_category();

                                // echo $category;
                                foreach ($category as $cat) {

                                    // echo $cat;

                                    if ($cat->name != 'اخبار' AND $cat->name != 'main') {
                                        
                                           $catlink = $cat->term_id;
                                           $catname = $cat->name;
                                            ?>

                                      <a href="<?php echo get_category_link($catlink); ?>"><?php echo $catname?></a>
                                       
                            <?php        }
                                } 
                            ?>
                                </span>
                            </div>
                                </div>
                                
                                


                            </div>



                            <?php 

                            endforeach;
                            wp_reset_postdata();
                            ?> 

                            <button class="content__link"><a href="<?php echo site_url('/category/مقالات-متنوعة') ?>">المزيد</a></button>
                        </div>
                        
                    </section>

             </article>


        <aside class="content__aside">
            <h2 class="content__aside-title">  التدوينات</h2>

            <div class="content__aside-container">
            <?php 
                            
                $args = array(
                                'posts_per_page' => '4',
                                'category_name' => 'تدوينات',           
                            );

                            $mainPosts = get_posts($args);
                            foreach($mainPosts as $post) : setup_postdata($post);
                                // print($mainPost);
                ?>

                <div class="content__aside-card">

                    <a href="<?php the_permalink(); ?>"><div class="content__aside-img"><img src="<?php the_post_thumbnail_url(); ?>" alt="صور التدوينات"></div></a>

                    <div class="content__aside-content"><a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                            <div class="content__article-info">
                                <span><?php the_time( 'd F Y' ); ?></span>
                                <span>
                            <?php 
                                $category = get_the_category();

                                // echo $category;
                                foreach ($category as $cat) {

                                    // echo $cat;

                                    if ($cat->name != 'اخبار' AND $cat->name != 'main') {
                                        
                                           $catlink = $cat->term_id;
                                           $catname = $cat->name;
                                            ?>

                                      <a href="<?php echo get_category_link($catlink); ?>"><?php echo $catname?></a>
                                       
                            <?php        }
                                } 
                            ?>
                                </span>
                            </div>
                    </a>
                    </div>
                    
                    

                </div>





                <?php 

                endforeach;
                wp_reset_postdata();
                ?>
            </div>
            <div class="content__aside-ad">
            </div>
            
        </aside>
      </div>

</main>

</div>









<?php 

    get_footer();

?>

