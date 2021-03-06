<?php get_header(); ?>

<main id="content" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <?php if(aff_is_product()): ?>
                        <?php get_template_part('partials/product'); ?>
                    <?php else: ?>
                        <?php get_template_part('partials/entry'); ?>
                    <?php endif; ?>

                    <?php if (comments_open() || '0' != get_comments_number()): ?>
                        <?php comments_template(); ?>
                    <?php endif ?>
                <?php endwhile; endif; ?>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 <?php if(afft_is_sidebar_position_left()): ?>flex-xl-first flex-lg-first<?php endif; ?>">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
