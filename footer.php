    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-4">
                    <p id="copyright"><?php if (ember_get_option('copyright') != '') { echo esc_html(ember_get_option('copyright')); } else { echo "&copy ". get_bloginfo( 'name' ) . " " . date('Y'); } ?></p>
                </div>
                <div class="col-md-5 col-md-offset-2 col-sm-8 text-right">
                    <ul class="list-inline footer-links">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Subscribe</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> 
    <?php wp_footer(); ?>
</body>
</html>