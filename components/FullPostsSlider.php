<?php
$category_name = isset($args['category_name']) ? $args['category_name'] : 'protalk';
$category = get_category_by_slug($category_name); // Replace 'protalk' with your category slug.
$args = array(
    'category_name' => $category_name, // Category slug
    'post_status'   => 'publish', // Only published posts
    'posts_per_page' => 10,       // Retrieve all posts (or set a specific number)
);

$posts = get_posts($args);

?>
<?php if ($posts): ?>
    <section class="bg-black py-10 text-white">
        <div class="container">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-20">
                    <h2 class="section-title"><?= $category->name ?></h2>
                    <div class="flex rtl:flex-row-reverse items-center gap-5">
                        <div class="thumb-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 12.7407L1 6.74072L7 0.740723" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="thumb-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12.7407L7 6.74072L1 0.740723" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="s-button" href="<?= get_category_link($category->term_id) ?>"><?php _e('View All', 'thespeech') ?></a>
                </div>
            </div>


        </div>
        <div class="container">
            <div id="full-posts-slider" class="swiper mt-8">
                <div class="swiper-wrapper flex">
                    <?php foreach ($posts as $post): ?>
                        <div class="swiper-slide">
                            <?php get_template_part('components/post/thumb', null, ['post' => $post]); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>