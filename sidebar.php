<?php if(affilicious_is_product() && affilicious_theme_is_active_product_sidebar()): ?>
    <div class="sidebar sidebar-product">
        <ul>
            <?php affilicious_theme_get_product_sidebar(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(is_active_sidebar('main-sidebar')): ?>
    <aside class="sidebar sidebar-main" role="complementary"
           itemscope itemtype="http://schema.org/WPSideBar">
        <ul>
            <?php dynamic_sidebar('main-sidebar'); ?>
        </ul>
    </aside>
<?php endif; ?>
