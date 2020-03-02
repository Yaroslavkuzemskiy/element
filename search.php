<?php get_header('services');
global $wp_query;

$search_result_count = $wp_query->found_posts;
?>
    <main class="main">

        <div class="page-heading transparent">
            <div class="breadcrumbs">
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="left-link">
                    <span data-text="Back to Resource Center Index">Back to Resource Center Index</span>
                </a>
            </div>
            <h1>Search Results</h1>
        </div>
        <!-- end page-heading -->

        <!--filter block, class center centered input-->
        <div class="filter center">
            <div class="container">
                <div class="wrapp">
                    <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                        <div class="form-group">
                            <input class="search-input" name="s" type="text" placeholder="Search" value="<?php echo get_search_query(); ?>">
                            <button class="search-submit" type="submit"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end filter center -->

        <!--result-list, class search change padding-top-->
        <section class="result-list search">
            <div class="wrapp">
            <?php if (have_posts()) : ?>
                <div class="result-total"><?php echo $search_result_count; ?> search results for:
                    <strong><?php echo get_search_query(); ?></strong>
                </div>
                <?php
            while (have_posts()) :
                the_post();?>
                <?php $post_terms = get_the_terms($post->ID, 'category');?>
                <div class="item">
                    <h3 class="h4">
                        <a class="title-link" href="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">
                            <span><?php the_title(); ?></span>
                        </a>
                    </h3>
                    <?php if (is_array($post_terms)):?>
                    <h4 class="category">
                        <a class="second-link" href="<?php echo get_term_link($post_terms[0], 'category'); ?>"><?php echo $post_terms[0]->name; ?></a>
                    </h4>
                    <?php endif;?>
                    <p><?php the_excerpt(); ?></p>
                </div>
               
            <?php endwhile;
        else:?>
            <p class="nothing">
                Nothing was found
            </p>
        <?php endif;?>
            </div>
        </section>
        <!-- end result-list search -->

        <div class="pagination">.
        
        <?php wp_pagenavi(); ?>
            </div>
        </div>
        <!-- end pagination -->
    </main>
   <?php get_footer();?>