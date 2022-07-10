<?php get_header(); ?>

<main>
        <div class="home-top">
            <div class="top-title">
                <p>WHO WE ARE</p>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/starLine.png" alt="">
                <p>關於我們</p>
            </div>
            <div class="home-top-img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/homePic.png" alt="">
                <div class="green-block">
                    <p>莘承除了致力協助企業人才提升外，<br>
                        也期盼成為企業與公益之間的橋樑。<br>
                        透過企業內訓課程的推行，將公益融入企業，<br>
                        達到協助企業善用資源扶助弱勢之理念。<br>
                        同時推展、接洽公益課程，<br>
                        透過積極參與公益活動，實踐以愛傳承。<br>
                        公益之路與各界夥伴攜手同行，展望喜樂幸福，成就共榮共好。</p>
                </div>
            </div>
        </div>
        <div class="main-container">

            <div class="top-title">
                <p>WELFARE ACTIVITIES</p>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/starLine.png" alt="">
                <p>活動資訊</p>
            </div>

            <div class="course-info">

                <div class="course-button" id="tab_bar">
                    <button id="tabb1" onclick="mytab(1)">莘意緣起</button>
                    <button id="tabb2" onclick="mytab(2)">莘想事成</button>
                </div>

        <div class="tabb_css " id="tabb1_content" style="display: block">
            <div class="cards-container">
                
                <?php

                // The Query
                $the_query = new WP_Query( array( 'category_name' => 'course' ));
                
                // The Loop
                if ( $the_query->have_posts() ) {
                    
                    while ( $the_query->have_posts() ) { 
                        echo ' <div class="card-container"> ';

                        $the_query->the_post(); ?>
                        <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title_attribute()?>">
                        <?php endif;?>       
                        <h3><?php the_title();?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a class="card-read-more" href="<?php the_permalink();?>"> 
                        Read More ></a>
                        <?php    echo '</div>'          ?>
                 
                    <?php    
                    }    
                } 
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>   

            </div>

        <div>
        <a href="#" class="loadMore1">更多課程</a>   
        </div>  
            
        </div> 


        <div class="tabb_css " id="tabb2_content">
        


            <div class="cards-container">
                	

                
                <?php

                // The Query
                $the_query = new WP_Query( array( 'category_name' => 'activities' ));
                
                // The Loop
                if ( $the_query->have_posts() ) {
                    
                    while ( $the_query->have_posts() ) { 
                        echo ' <div class="card-container2"> ';

                        $the_query->the_post(); ?>
                        <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title_attribute()?>">
                        <?php endif;?>       
                        <h3><?php the_title();?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a class="card-read-more" href="<?php the_permalink();?>"> 
                        Read More ></a>
                        <?php    echo '</div>'          ?>
                        
                    <?php    
                    }    
                
                } 
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>   
                
            
            </div>  

        <div>
        <a href="#" class="loadMore2">更多課程</a>   
        </div>  

        </div>
            

        </div>


        </div>
        </div>  

            

        
</div>
    
<?php get_footer(); ?>