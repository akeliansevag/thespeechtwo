<?php get_header(); ?>
<?php
$post = get_post();
$categories = get_the_category($post->ID);
$author = get_the_author_meta('display_name', $post->post_author);

$related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID)));
$youtube_link = get_field("post_youtube_url");
$query = new WP_Query([
    'posts_per_page' => 6
]);
$posts = $query->posts;
?>
<main>
    <div class="container">
        <div class="flex max-lg:flex-col gap-10">
            <div class="w-full lg:w-3/4">
                <div class="section-wrapper-full">
                    <?php if ($youtube_link): ?>
                        <?= generate_youtube_iframe($youtube_link); ?>
                    <?php endif; ?>
                </div>

                <div class="section-wrapper !pt-5">
                    <div class="mb-2">
                        <div class="lg:flex lg:items-center lg:justify-between">
                            <h1 class="text-3xl"><?= $post->post_title; ?></h1>
                            <div class="max-lg:my-2">
                                <?= get_template_part('components/socialShare'); ?>
                            </div>
                        </div>

                        <h5 class="text-sm uppercase font-bold text-[#83858F] mt-3">
                            <!-- <?= _e('By', 'thespeech') ?>
                            <a class="text-primary" href="<?= get_author_posts_url($post->post_author) ?>">
                                <?= get_the_author_meta('display_name', $post->post_author); ?>
                            </a>
                            -  -->
                            <?= get_the_date('F j, Y', $post->ID) ?>
                        </h5>
                    </div>

                    <div class="my-4 flex gap-2">
                        <?php foreach ($categories as $cat): ?>
                            <a class="hover:opacity-80 uppercase font-bold text-xs bg-black rounded-md text-white py-1 px-2" href="<?= get_category_link($cat->term_id); ?>">
                                <?= $cat->name; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <div>
                        <?php if ($post->post_content) : ?>
                            <?= the_content(); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <div class="w-full lg:w-1/4">
                <?php if ($related): ?>
                    <?= get_template_part('components/sidebar', null, ['title' => 'Related Posts', 'posts' => $related]); ?>
                <?php else: ?>
                    <?= get_template_part('components/sidebar', null, ['title' => 'Latest Posts', 'posts' => $posts]); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>