<?php function DichCanKinh(){  ?>
   <div class="kinh-dich">
    <?php 
        $list_item = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'order' => 'ASC',
            'orderby' => 'DATE',
            'category_name'=> 'kinh-dich',
        ));
        if ($list_item->have_posts()):?>

        <div class="kd-list ">
            <?php if ($list_item->have_posts()):
                while ($list_item->have_posts()): $list_item->the_post(); ?>
                    <div class="kd-list-item">
                        <!-- <a href="<?php //the_permalink(); ?>" class="item-pic" title="<?php //the_title(); ?>">
                            <?php  //if (has_post_thumbnail()):the_post_thumbnail();else: ?>
                                <img src="<?php //echo get_stylesheet_directory_uri().'/assets/img/not-found-img.png';?>" alt="<?php //the_title(); ?>">
                            <?php //endif; ?>
                        </a> -->
                        <div class="kd-list-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                       
                    </div>
                   
                <?php
                endwhile;
            endif;
            wp_reset_query(); ?>
        </div>
        <?php endif; ?>

   </div>
   
       
<?php } add_shortcode("DichCanKinh", "DichCanKinh");?>
