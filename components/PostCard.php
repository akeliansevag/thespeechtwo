<?php
$post = $args['post'] ? $args['post'] : null;
$big = (isset($args['big']) && $args['big']) ? true : false;
?>

<?php if ($post): ?>
    <?php $format = get_post_format($post->ID); ?>
    <div class="<?= $big ? 'lg:w-2/5' : 'lg:w-1/5' ?> relative">
        <a href="<?= get_permalink($post->ID) ?>" class="group relative flex justify-center overflow-hidden items-center aspect-video w-full bg-gray-200">
            <?php if ($format === 'video'): ?>
                <div class="absolute z-10">
                    <?= get_template_part("components/assets/play-button"); ?>
                </div>
            <?php endif; ?>
            <?php $thumb_classes = 'absolute w-full h-full object-cover group-hover:scale-[1.2] transition-transform duration-[500ms] ease-in-out'; ?>
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?= get_the_post_thumbnail($post->ID, 'medium-thumb', ['class' => $thumb_classes]); ?>
            <?php else: ?>
                <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
            <?php endif; ?>
        </a>
        <?php
        $metaClasses = "w-full mt-2";
        if ($big) {
            $metaClasses = "max-lg:w-full max-lg:mt-2 lg:bg-white lg:p-3 lg:w-[80%] lg:absolute lg:right-0 lg:-translate-y-1/2";
        }
        ?>
        <div class="<?= $metaClasses ?>">
            <h3 class="text-xs uppercase text-[#83858F]">
                <?= get_the_date('F j, Y', $post->ID) ?>
            </h3>
            <h2 class="<?= $big ? 'max-lg:text-base lg:text-2xl' : 'text-base' ?> line-clamp-3 leading-tight">
                <a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title; ?></a>
            </h2>
        </div>
    </div>
<?php endif; ?>