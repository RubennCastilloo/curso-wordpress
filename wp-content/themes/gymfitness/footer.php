<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
        <?php 
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'
            );
            
            wp_nav_menu($args);
        ?> 
        <p class="copyright"></p>Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>