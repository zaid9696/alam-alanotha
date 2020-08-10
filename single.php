<?php 

    get_header( );


    while(have_posts(  )){
        the_post();


?>







<div class="container">

    
    <section class="single__hero">
        <h2 class="single__hero-title"><?php the_title(); ?></h2>
        <div class="single__hero-cover">
                <img src="<?php the_post_thumbnail_url();?>" alt="Post Image">
        </div>
    </section>

    <main class="content">
    <div class="content__container">

        <div class="main">
            <div class="single__info">
            <div class="single__info-icon">
                        <img src="<?php echo get_theme_file_uri('/img/user.svg') ?>" alt="Category Icon">
                        <div class="single__info-detail">
                            <h5> الناشر</h5>
                            <span> <?php the_author_posts_link(); ?> </span>
                        </div>
                    </div>
                    <div class="single__info-icon">
                        <img src="<?php echo get_theme_file_uri('/img/date.svg') ?>" alt="Category Icon">
                        <div class="single__info-detail">
                            <h5>تاريخ النشر</h5>
                            <span> <?php the_time( 'd F Y' ); ?> </span>
                        </div>
                    </div>
                    <div class="single__info-icon">
                        <img src="<?php echo get_theme_file_uri('/img/category.svg') ?>" alt="Category Icon">
                        <div class="single__info-detail">
                            <h5>التصنيف</h5>
                            <span>  <?php 
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
                            ?></span>
                        </div>
                    </div>
                    
            </div>
            <article class="main__article-content">
                    <?php the_content(); ?>
            </article>
            <div class="single__more">
                <h3> إقرأ أيضاً</h3>

                <div class="single__more-cards">

                <?php 


                
                    
                                // echo $category;
                foreach ($category as $cat) {

                 if ($cat->name != 'اخبار' AND $cat->name != 'main') {
                                        
                         $catlink = $cat->term_id;
                        $catname = $cat->name;
                 }

                }

                // echo $catlink;
                
                $the_i = get_the_ID();
                
                $args = array(
                    'posts_per_page' => '4',
                    'post__not_in' => array($the_i),
                    'cat' => $catlink,           
                );

                $mainPosts = get_posts($args);
                foreach($mainPosts as $post) : setup_postdata($post);
                    // print($mainPost);
                ?>      


                <div class="single__more-card">
                    <div class="single__more-cover"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(  ); ?>" alt="read more image"></a></div>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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

                </div>
                
            </div>
        </div>

        
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

    };

    get_footer( );

?>
