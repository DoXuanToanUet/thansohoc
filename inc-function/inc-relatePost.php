<?php function devPostRelate(){ $categories = get_the_category($post->ID); ?>
    <section id="post-related">
    <div class="container-master">
        <div class="ff-section-title">
            <h2><?php _e('Bài viết liên quan') ?></h2>
        </div>
        <div class="row-master">
            <?php
            if ($categories) {
                $category_ids = array();
                foreach ($categories as $cat_item) {
                    $category_ids[] = $cat_item->term_id;
                }
                $args = array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'showposts'    => 4 // Số bài viết bạn muốn hiển thị.
                );
                $post_related = new wp_query($args);
                if ($post_related->have_posts()) {
                    while ($post_related->have_posts()) {
                        $post_related->the_post();
                        ?>
                        <div class="post-relate-item">
                            <div class="item flex">
                                <div class="item-pic">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php the_title(); ?>" target="_blank">
                                        <?php
                                        if (has_post_thumbnail()):
                                            the_post_thumbnail();
                                        else:?>
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/no-img.jpg';?>"
                                                 alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="item-title">
                                    <a href="<?php the_permalink(); ?>" target="_blank"
                                       title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
       
<?php } add_shortcode("devPostRelate", "devPostRelate");?>