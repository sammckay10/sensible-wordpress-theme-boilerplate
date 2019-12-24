<header>
    <div class="container">
        <pre>partials/content-header.php</pre>

        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => '',
            'menu_class' => ''
        ]); ?>

        <?php get_search_form(); ?>
    </div>
</header>
