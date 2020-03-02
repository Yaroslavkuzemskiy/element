<main class="main">

<div class="top-screen">

    <section class="banner">

        <?php if( have_rows('banner') ): ?>
                <div class="slider">
                    <?php while (have_rows('banner')): the_row();
                        
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        ?>
                                <div class="slide" style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
                                    <div class="container">
                                        <div class="slide-wrapper">
                                            <h1 class="title"><?php echo $title; ?></h1>
                                            <p><?php echo $subtitle; ?></p>
                                        </div>
                                    </div>
                                </div>
                        
                    <?php endwhile; ?>
                </div>
        <?php endif; ?>
        <div class="container">
            
                <?php 
                $link = get_field('capability_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="link-explore"><?php echo esc_html( $link_title ); ?>
                   
                        <span>
                            <svg viewBox="0 0 67.01 74">
                                <path d="M2 58a35 35 0 1 0 0-42" fill="none"></path>

                                <path fill="none" stroke="rgba(255, 255, 255, .3)" stroke-linecap="round"
                                      stroke-miterlimit="10"
                                      stroke-width="2"
                                      d="M2 58a35 35 0 1 0 0-42"></path>

                                <path fill="rgba(255, 255, 255, .3)" d="M30.51 41l-4.5-6h9l-4.5 6z"></path>
                            </svg>

                            <svg viewBox="0 0 67.01 74">
                                <path class="border" stroke-linecap="round"
                                      d="M2 58a35 35 0 1 0 0-42"></path>

                                <path fill="#fff" d="M30.51 41l-4.5-6h9l-4.5 6z"></path>
                            </svg>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
            </section>
            <!-- end banner -->