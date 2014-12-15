<div class="content">

    <?php if (have_posts()) : ?>

    <div class="posts" id="posts">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $total_post_count = wp_count_posts();
        $published_post_count = $total_post_count->publish;
        $total_pages = ceil( $published_post_count / $posts_per_page );

        if ( "1" < $paged ) : ?>

            <div class="page-title">

                <h4><?php printf( __('Page %s of %s', 'rams'), $paged, $wp_query->max_num_pages ); ?></h4>

            </div> <!-- /page-title -->

            <div class="clear"></div>

        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php if ( has_post_thumbnail() ) : ?>

                    <div class="featured-media">

                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

                            <?php the_post_thumbnail('post-image'); ?>

                        </a>

                    </div> <!-- /featured-media -->

                <?php endif; ?>

                <div class="post-inner">

                    <div class="post-header">

                        <p class="post-date">

                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time(get_option('date_format')); ?></a>

                            <?php if ( is_sticky() ) : ?>

                                <span class="sep">/</span> <span class="is-sticky"><?php _e('Sticky','rams'); ?></span>

                            <?php endif; ?>

                        </p>

                        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                    </div> <!-- /post-header -->

                    <div class="post-content">

                        <?php the_excerpt(); ?>

                    </div>

                </div> <!-- /post-inner -->

            </div> <!-- /post -->

        <?php endwhile; ?>

        <?php endif; ?>

    </div>

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>

        <div class="archive-nav">

            <?php echo get_next_posts_link( __('Older posts') . ' &rarr;'); ?>

            <?php echo get_previous_posts_link( '&larr; ' . __('Newer posts')); ?>

            <div class="clear"></div>

        </div>

    <?php endif; ?>

</div>