</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo" >
    <div id="footerImage">
        <?php
            if ( is_front_page() || is_home() || is_front_page() && is_home() || is_page('mentions-legales') ) {
                echo ' <img id="footer" src=" '. get_template_directory_uri() . "-child" . '/images/footer.png" alt="footerBasic" ' ;
            } else if (is_page('Commander')) {
                echo ' <img id="footerPinkBackground" style="display:none" src=" '. get_template_directory_uri() . "-child" . '/images/footerPinkBackground.png" alt="transparentFooter" ' ;
            } else {
                echo ' <img id="footerPinkBackground" src=" '. get_template_directory_uri() . "-child" . '/images/footerPinkBackground.png" alt="fotterPink" ' ;
            }          
        ?>

    </div>
    <nav id="menuFooter" class="menuFooter" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu(array('theme_location' => 'menuFooter',
                                               'menu_class' => 'menuFooter',
                                            )); ?>
    </nav>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>


