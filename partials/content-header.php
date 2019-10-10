<header>
    <div class="container">
        <p>partials/content-header.php</p>

        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'nav-class',
            'menu_class' => 'nav-ul-class'
        ]); ?>

        <?php get_search_form(); ?>
    </div>
</header>
