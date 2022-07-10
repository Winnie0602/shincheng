<?php get_header(); ?>

    <!-- 文章內容連接 content-article.php -->
    <?php if( have_posts() ){
        while(have_posts()){
            the_post();

        if ( in_category('course') ) {
            get_template_part('template-parts/content' , 'course');
        } elseif ( in_category('activities')) {
            get_template_part('template-parts/content' , 'activities' );
        } 

        }
    }?> 
    
    
<?php get_footer(); ?>