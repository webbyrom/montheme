</div>
<footer>
    <?php
    wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav mr-auto'
    ])
    ?>
</footer>


<?php wp_footer() ?>
<!---- pour un footer identique sur toutes les pages--->


</body>

</html>