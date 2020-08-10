<?php 

    get_header( );

   

?>
<div class="container">

    <div class="archive__hero">
        <div class="archive__hero-cover"><img src="<?php echo get_theme_file_uri('/img/wave.svg')?>" alt="wave background"></div>
        <h2><?php the_archive_title(); ?></h2>
    </div>

    <main class="content archive-mr">
    <div class="content__container">

    <div class="archive__article">
        <?php 

            if(have_posts()){

                while(have_posts()){
                    the_post(); ?>

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


              <?php  }
            }

        ?>

        <div class="archive__paginate"><?php echo paginate_links(); ?></div>

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


    get_footer( );

?>
