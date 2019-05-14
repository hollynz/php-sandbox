    <footer>
        Copyright <?= date('Y'); ?>
        <?php wp_nav_menu(array(
                'menu_class' => false,
                'theme_location' => 'footer-menu'
            )); ?>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>