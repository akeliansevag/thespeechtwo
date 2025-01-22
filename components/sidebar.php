<?php
$title = $args['title'];
$posts = $args['posts'];
?>
<div class="section-wrapper">
    <h3 class="text-xl"><?= _e($args['title'], 'thespeech') ?></h3>
    <div class="mt-4 flex flex-col gap-4">
        <?php foreach ($posts as $post): ?>
            <div class="flex gap-2">
                <div class="w-1/4">
                    <a class="mt-1 block" href="<?= get_permalink($post->ID) ?>">
                        <?php if (has_post_thumbnail($post->ID)): ?>
                            <?= get_the_post_thumbnail($post->ID, 'small-thumb', ['class' => 'rounded-sm']); ?>
                        <?php else: ?>
                            <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="w-3/4">
                    <h4 class="uppercase font-bold text-sm line-clamp-2 leading-4 mt-1"><a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title ?></a></h4>
                    <h5 class="uppercase text-xs text-[#83858F] font-bold">
                        <!-- <?= _e('By', 'thespeech') ?> <a class="text-primary" href="<?= get_author_posts_url($post->post_author) ?>"><?= get_the_author_meta('display_name', $post->post_author); ?></a> -  -->

                        <?= get_the_date('F j, Y', $post->ID) ?>
                    </h5>
                </div>
            </div>
            <hr />
        <?php endforeach; ?>
    </div>
</div>