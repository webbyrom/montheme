<?php get_header() ?>
<!--- appel du header--->
<?php wp_list_categories(['taxonmy' => 'sport', 'title_li' => '']); ?>
<?php $sports = get_terms(['taxonomy' => 'sport']); ?>
<ul class="nav nav-pills">
    <?php foreach($sports as $sport): ?>
    <li class="nav-item">
        <a href="<?=get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id) ? 'active' : '' ?>"><?= $sport->name ?></a>
    </li>
    <?php endforeach; ?>
</ul>

<?php if (have_posts()) : ?>
    <!---declaration-->
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                    <!--function wp pour image--->
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <ul>
                            <?php //utilistations de la taxonomie//
                            the_terms(get_the_ID(), 'sport', '<li>', '</li><li>', '</li>');
                            ?>
                        </ul>
                        <!--- insertion function wp dans html---->
                        <p class="card-text">
                            <?php the_content('En voir plus') ?>
                            <!--- function wp-->
                        </p>
                        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>
            </div>
        <?php endwhile ?>


    </div>
    <?php montheme_pagination() ?>
    <?= paginate_links(); ?>
    

<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>
<?php get_footer() ?>