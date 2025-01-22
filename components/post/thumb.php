<?php
$post = $args['post'];
?>

<?php if ($post): ?>
    <?php $thumb_classes = 'absolute w-full h-full object-cover'; ?>
    <div class="w-full max-w-[400px] aspect-video h-full overflow-hidden relative overlay">
        <?php if (has_post_thumbnail($post->ID)): ?>
            <?= get_the_post_thumbnail($post->ID, 'small-thumbnail', ['class' => $thumb_classes]); ?>
        <?php else: ?>
            <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
        <?php endif; ?>

        <div class="w-full h-full flex items-end">
            <div class="relative flex gap-1 flex-col z-10 text-white p-5 w-full text-center">
                <a href="<?= get_permalink($post->ID) ?>" class="mx-auto mb-3">
                    <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.2329 10.4818L0.983376 20.6726L0.983376 0.290889L18.2329 10.4818Z" fill="#ffffff" />
                    </svg>
                </a>
                <h4 class="uppercase font-bold text-sm one-line"><a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title ?></a></h4>
                <h5 class="text-sm">
                    <!-- <?= _e('By', 'thespeech') ?> <a href="<?= get_author_posts_url($post->post_author) ?>"><?= get_the_author_meta('display_name', $post->post_author); ?></a> -  -->

                    <?= get_the_date('F j, Y', $post->ID) ?>
                </h5>
            </div>
        </div>

    </div>
<?php endif; ?>