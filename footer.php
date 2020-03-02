<footer class="footer">
        <div class="navigation">
            <div class="grid">
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'footer_menu',
                                        'container'         => 'div',
                                        'container_class'   => 'col_xs-24_sm-8_md-4',
                                        'menu_class'        => '',
                                        
                                        'depth'             => 0
                                        ) );
                                ?>	
                      </h6>              
                </div>

            <?php if( have_rows('menu_footer', 'option') ): ?>
                <?php while( have_rows('menu_footer', 'option') ): the_row();
                    $menu = get_sub_field('menu');
                    $submenu = get_sub_field('submenu');
                    ?>

                        <div class="col_xs-24_sm-8_md-4">
                            <h6>

                                <?php if($menu): ?>
                                    <a href="<?php echo esc_url( $menu['url'] ); ?>"><?php echo esc_html( $menu['title'] ); ?></a>
                                <?php endif; ?>
                                
                            </h6>

                            <?php if($submenu): ?>
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url( $submenu['url'] ); ?>"><?php echo esc_html( $submenu['title'] ); ?></a>

                                </li>
                                
                            </ul>
                            <?php endif; ?>
                        </div>
                <?php endwhile; ?>
            <?php endif; ?>
                
                
               <!--
                <div class="col_xs-24_sm-8_md-4">
                    <h6>
                        <a href="#">About</a>
                    </h6>
                    <ul>
                        <li>
                            <a href="#">Our History</a>
                        </li>
                        <li>
                            <a href="#">The Team</a>
                        </li>
                        <li>
                            <a href="#">Partners</a>
                        </li>
                        <li>
                            <a href="#">Investors</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="bottom">
            <div class="socials">
                <p>Follow Us</p>
                <ul>
                    <?php if( have_rows('socials', 'option') ): ?>
                        <?php while( have_rows('socials', 'option') ): the_row();
                            $logo = get_sub_field('logo');
                            
                            $link = get_sub_field('link');
                    
                            ?>
                                <li>
                                <?php if( $link ): ?>
                                    <a href="<?php echo $link; ?>">
                                <?php endif; ?>

                                        <span style="background-image: url('<?php echo $logo['sizes']['large']; ?>')">
                                            <img src="<?php echo $logo['sizes']['large']; ?>" alt="img">
                                        </span>
                                    </a>
                                </li>
                                
                                
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <button class="to-top">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 56 50.41">
                    <path fill="none" stroke-linecap="round" stroke="#4c4c4c" stroke-width="2" d="M44.19 49.61a27 27 0 1 0-32.43 0"/>
                    <path fill="#fff" d="M28 23.5l-4.5 6h9l-4.5-6z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 56 50.41">
                    <path class="border" stroke-linecap="round" d="M44.19 49.61a27 27 0 1 0-32.43 0"/>
                    <path fill="#fff" d="M28 23.5l-4.5 6h9l-4.5-6z"/>
                </svg>
            </button>

            <div class="info">
                <ul>
                    <li>
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <div class="copy">
                    <p>&copy; <?php echo date('Y'); ?> <?php echo(get_field('copyright', 'option')); ?></p>
                </div>
            </div>

        </div>
    </footer>

</div>




<?php wp_footer(); ?>
</body>
</html>