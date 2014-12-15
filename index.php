<?php get_header(); ?>
<div class="container">
    <div class="col-md-8"><?php get_template_part('content','loop')?></div>
    <div class="col-md-4">
        <div id="sidebar">
            <ul>
                <?php
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepage-sidebar') ) :
                endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>