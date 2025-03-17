<?php
$post = "";
if ($args['post']) {
    $post = $args['post'];
}
$categories = get_the_category($post->ID);
?>

<?php if ($post) : ?>
    <?php $format = get_post_format($post->ID); ?>
    <article class="flex flex-col relative">
        <a href="<?= get_permalink($post->ID) ?>" class="overflow-hidden group block relative aspect-video <?= $format === 'video' ? 'overlay' : '' ?>">
            <?php if ($format === 'video'): ?>
                <div class="absolute w-full h-full z-10 flex items-center justify-center">
                    <?php get_template_part('components/assets/play-button'); ?>
                </div>
            <?php endif; ?>
            <?php $thumb_classes = 'absolute w-full h-full object-cover group-hover:scale-[1.2] transition-transform duration-[500ms] ease-in-out'; ?>
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?= get_the_post_thumbnail($post->ID, 'medium-thumb', ['class' => $thumb_classes]); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
            <?php endif; ?>

        </a>
        <div class="flex-1 bg-white shadow-md p-3 border border-[#d9d9d9] border-t-0">
            <h2 class="line-clamp-1 text-lg font-bold ltr:font-englishTitles ltr:pb-[3px]"><a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title; ?></a></h2>
            <!-- <p class=" line-clamp-1 text-[#707778]"><?= get_the_excerpt($post->ID); ?></p> -->
            <hr class="my-3" />
            <div class="flex items-center justify-between flex-wrap gap-2">
                <h5 class="text-sm uppercase font-bold text-[#83858F]">
                    <!--  <?= _e('By', 'thespeech') ?>
                    <a class="text-primary" href="<?= get_author_posts_url($post->post_author) ?>">
                        <?= get_the_author_meta('display_name', $post->post_author); ?>
                    </a>  - -->
                    <?= get_the_date('F j, Y', $post->ID) ?>
                </h5>
                <div class="flex gap-2">
                    <?php foreach ($categories as $cat): ?>
                        <a href="<?= get_category_link($cat->term_id); ?>" class="block hover:opacity-80 hover:!text-white uppercase font-bold text-xs bg-secondary rounded-md text-white py-1 px-2">
                            <?= $cat->name; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </article>
<?php endif; ?>