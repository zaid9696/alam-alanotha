<!DOCTYPE html>
<html  dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>



<nav class="nav">
    
    <div class="nav__container">

    <div class="nav__menu">

    <img src="<?php echo get_theme_file_uri('/img/menu.svg') ?>" alt="أيقونة القائمة">

    </div>
        
        <div class="nav__logo"> <a href="<?php echo site_url('/') ?>">عالم الأنوثة</a> </div>

        <div class="nav__search">
            <img src="<?php echo get_theme_file_uri('/img/search.svg') ?>" alt="أيقونة البحث">
        </div>

        </div>

    </div>
    

</nav>

<div class="sidenav">

    <div class="sidenav__menu">
        <?php 
            wp_nav_menu( 
                array(
                    'theme_location' => 'primary'
                )
            );
         ?>
    </div>
</div>
    
