<?php
$post = "";
if ($args['post']) {
    $post = $args['post'];
}
?>
<?php if ($post) : ?>
    <?php $format = get_post_format($post->ID); ?>
    <article class="flex flex-col">
        <a href="<?= get_permalink($post->ID) ?>" class="block relative aspect-video <?= $format === 'video' ? 'overlay' : '' ?>">
            <?php if ($format === 'video'): ?>
                <div class="absolute w-full h-full z-10 flex items-center justify-center">
                    <?php get_template_part('components/assets/play-button'); ?>
                </div>
            <?php endif; ?>
            <?php $thumb_classes = 'absolute w-full h-full object-cover'; ?>
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?= get_the_post_thumbnail($post->ID, 'medium-thumb', ['class' => $thumb_classes]); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
            <?php endif; ?>
        </a>
        <div class="flex-1 bg-white shadow-md p-3 border border-[#d9d9d9] border-t-0">
            <h2 class="line-clamp-1 text-lg font-bold uppercase"><a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title; ?></a></h2>
            <hr class="my-3" />
            <h5 class="text-sm opacity-50"><?= get_field('title', $post->ID) ?></h5>
        </div>
    </article>
<?php endif; ?>