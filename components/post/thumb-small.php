<?php
$post = $args['post'];
$hideMeta = isset($args['hideMeta']) ? $args['hideMeta'] : false;
$hideTitle = isset($args['hideTitle']) ? $args['hideTitle'] : false;
$showDescription = isset($args['showDescription']) ? $args['showDescription'] : false;
?>

<?php if ($post): ?>
    <?php $thumb_classes = 'absolute w-full h-full object-cover'; ?>
    <div class="block w-full aspect-video h-full thumb overflow-hidden relative overlay">
        <?php if (has_post_thumbnail($post->ID)): ?>
            <?= get_the_post_thumbnail($post->ID, 'large-thumbnail', ['class' => $thumb_classes]); ?>
        <?php else: ?>
            <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
        <?php endif; ?>

        <div class="absolute flex gap-2 flex-col bottom-5 ltr:left-5 rtl:right-5 z-10 text-white">
            <a href="<?= get_permalink($post->ID) ?>" class="flex items-center gap-2 font-bold">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4062 9.5752C18.4062 14.494 14.4188 18.4814 9.5 18.4814C4.58121 18.4814 0.59375 14.494 0.59375 9.5752C0.59375 4.65641 4.58121 0.668945 9.5 0.668945C14.4188 0.668945 18.4062 4.65641 18.4062 9.5752ZM12.5755 8.97585L8.37123 6.2731C8.01366 6.04324 7.83487 5.92831 7.68703 5.93887C7.55818 5.94807 7.43968 6.01276 7.36227 6.11617C7.27344 6.23482 7.27344 6.44736 7.27344 6.87244V12.2779C7.27344 12.703 7.27344 12.9156 7.36227 13.0342C7.43968 13.1376 7.55818 13.2023 7.68703 13.2115C7.83487 13.2221 8.01366 13.1072 8.37123 12.8773L12.5755 10.1745C12.8858 9.97507 13.0409 9.87534 13.0945 9.74852C13.1413 9.63771 13.1413 9.51268 13.0945 9.40187C13.0409 9.27505 12.8858 9.17532 12.5755 8.97585Z" fill="white" />
                </svg>
                <h5 class="font-[14px]"><?php _e('PLAY VIDEO', 'thespeech') ?></h5>
            </a>
            <h4 class="max-lg:line-clamp-1 uppercase font-bold">
                <a href="<?= get_permalink($post->ID) ?>">
                    <?php if (!$hideTitle): ?>
                        <?= $post->post_title ?>
                    <?php endif; ?>

                    <?php if ($showDescription): ?>
                        <?= $post->post_content; ?>
                    <?php endif; ?>

                </a>
            </h4>
            <h5 class="text-sm">
                <!-- <?= _e('By', 'thespeech') ?>
                <a href="<?= get_author_posts_url($post->post_author) ?>">
                    <?= get_the_author_meta('display_name', $post->post_author); ?></a>
                <?php if (!$hideMeta): ?>
                    - -->
                <?= get_the_date('F j, Y', $post->ID) ?>
            <?php endif; ?>
            </h5>
        </div>
    </div>
<?php endif; ?>