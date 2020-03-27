<?php get_header() ?>
<!--- appel du header--->

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