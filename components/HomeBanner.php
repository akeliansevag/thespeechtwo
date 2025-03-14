<?php
$args = array(
    'post__in' => get_option('sticky_posts'), // Get sticky posts
    'posts_per_page' => -1, // Show all sticky posts
    'orderby' => 'date', // Order by date
    'order' => 'DESC' // Newest first
);

$query = new WP_Query($args);
$sticky = $query->posts;
?>

<?php if ($sticky): ?>
    <section class="section">
        <div class="container mt-7">
            <div class="flex items-center justify-center relative w-full overflow-hidden aspect-video">
                <a class="" data-fancybox href="<?= get_field('post_youtube_url', $sticky[0]->ID) ?>">
                    <?= get_template_part('components/assets/play-button'); ?>
                </a>
                <?php $thumb_classes = '-z-10 image-wrap absolute w-full h-full object-cover'; ?>
                <?php if (has_post_thumbnail($sticky[0]->ID)): ?>
                    <?= get_the_post_thumbnail($sticky[0]->ID, 'medium-thumb', ['class' => $thumb_classes]); ?>
                <?php else: ?>
                    <img src="<?= get_template_directory_uri() ?>/src/img/placeholder.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
                <?php endif; ?>
                <!-- <img class="-z-10 image-wrap absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/microphone.webp" alt="The Speech banner"> -->
                <div class="max-lg:hidden absolute max-lg:max-w-auto max-lg:w-auto  flex flex-col gap-1 ltr:right-0 rtl:left-0 bottom-0 bg-white px-5 py-8">
                    <h1 class="ltr:font-englishTitles font-bold  max-lg:text-xl lg:text-3xl"><?= get_field("banner_title"); ?></h1>
                    <?php if (get_field('banner_subtitle')): ?>
                        <h2 class="text-lg"><?= get_field("banner_subtitle"); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="lg:hidden max-lg:max-w-auto max-lg:w-auto lg:max-w-[50%] flex flex-col gap-2 ltr:right-0 rtl:left-0 bottom-0 bg-white pt-5">
                <h1 class="ltr:font-englishTitles max-lg:text-xl lg:text-3xl"><?= get_field("banner_title"); ?></h1>
                <?php if (get_field('banner_subtitle')): ?>
                    <h2 class="text-lg"><?= get_field("banner_subtitle"); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>