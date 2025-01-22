<?php
$category_name = isset($args['category_name']) ? $args['category_name'] : 'protalk';
$category = get_category_by_slug($category_name); // Replace 'protalk' with your category slug.

$args = array(
    'category_name' => $category_name, // Category slug
    'post_status'   => 'publish', // Only published posts
    'posts_per_page' => 4,       // Retrieve all posts (or set a specific number)
);

$posts = get_posts($args);

?>
<?php if ($posts): ?>
    <section class="py-12 bg-white">
        <div class="container">
            <div>
                <div class="flex justify-between items-center">
                    <h2 class="section-title uppercase"><?= $category->name ?></h2>
                    <div>
                        <a href="<?= get_term_link($category->term_id) ?>" class="s-button border-primary text-primary"><?php _e('View All', 'thespeech') ?></a>
                    </div>

                </div>

                <div class="grid grid-cols-4 max-lg:grid-cols-1 gap-3 mt-4">
                    <div class="col-span-2 xl:col-span-3">
                        <?php get_template_part("components/post/thumb-large", null, ['post' => $posts[0]]); ?>
                    </div>

                    <div class="col-span-2 xl:col-span-1 flex flex-col gap-3">
                        <?php foreach ($posts as $key => $post): ?>
                            <?php if ($key == 0) continue; ?>
                            <div>
                                <?php get_template_part("components/post/thumb-small", null, ['post' => $post]); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>