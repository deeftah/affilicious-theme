<div class="no-thumbnail-container">
    <i class="no-thumbnail-icon fa fa-question-circle-o"></i>

    <p class="no-thumbnail-text">
        <?php _e('No image available', 'affilicious-theme'); ?>
    </p>

    <?php if(afft_can_edit_post()): ?>
        <a class="no-thumbnail-add-image" href="<?php echo get_edit_post_link(); ?>">
            <?php _e('Add now', 'affilicious-theme'); ?>
        </a>
    <?php endif; ?>
</div>
