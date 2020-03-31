<?php

/** Template Name: Page avec bannière
 * Template post Type: page, post 
 * 
 */
?>
<?php get_header() ?>
<!--- appel du header--->
<div class="banniere-page">
    <img src="<?php the_post_thumbnail('large'); ?>" alt="" style="width: 100%; height:auto;">
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!---declaration-->


        <h1><?php the_title() ?></h1>
        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:20%; height: auto;">
        </p>

        <?php the_content() ?>
<?php endwhile;
endif ?>
<?php get_footer() ?>