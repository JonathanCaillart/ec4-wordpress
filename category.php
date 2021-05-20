<?php
get_header();
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <ul>

                <?php



            $terms = get_the_terms( $post->ID , 'category');
            if($terms) {
                foreach( $terms as $term ) {
                    $cat_obj = get_term($term->term_id, 'category');
                    $cat_slug = $cat_obj->slug;
                }
            }
                echo 'The slug is '. $cat_slug;

                $the_query = new WP_Query( array (
                    'posts_per_page' => -1,
                    'category_name' => $cat_slug
                    
               )); ?>

                

                <?php
                // Start our WP Query
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

                    <div class="container mt-5">
                        <div class="row">                    
                            <!-- Display the article thumbail next to the article content -->
                            <div class="col-md-5">
                                <span> <?php the_post_thumbnail('medium') ?></span>

                            </div>
                            <div class="col-md-7">
                                <li class="no_style">
                                    <!-- // Display the Post Title with Hyperlink -->

                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    <span class="date_format"><?php the_time('d F Y'); ?></span>

                                    <!-- The post content -->
                                    <!-- // Display the Post Excerpt -->
                                    <div class="comment-text"> <?php echo substr(get_the_excerpt(), 0, 300) . "…"; ?>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>

                <?php
                // Repeat the process and reset once it hits the limit
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <div class="col-md-3 mt-5 ">
            <?php
            $categories = get_categories();
            foreach($categories as $category) {
            echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . "(" . $category->count . ")" . '</a></div>';
            }
            ?>
            
        </div>
    </div>

<?php
get_footer();
?>