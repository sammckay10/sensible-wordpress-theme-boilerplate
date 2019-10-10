<footer>
    <div class="container">
        partials/content-footer.php

        <?php wp_nav_menu([
            'theme_location' => 'secondary',
            'container' => 'nav',
            'container_class' => 'nav-class',
            'menu_class' => 'nav-ul-class'
        ]); ?>
    </div>
</footer>


