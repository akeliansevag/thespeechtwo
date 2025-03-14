<?php
$category_name = isset($args['category_name']) ? $args['category_name'] : 'protalk';
$category = get_category_by_slug($category_name); // Replace 'protalk' with your category slug.
$posts_per_page = isset($args['posts_per_page']) ? $args['posts_per_page'] : 5;

$arguments = array(
    'category_name' => $category_name, // Category slug
    'post_status'   => 'publish', // Only published posts
    'posts_per_page' => $posts_per_page,       // Retrieve all posts (or set a specific number)
);

$big = (isset($args['big']) && $args['big']) ? true : false;
$posts = get_posts($arguments);
?>

<?php if ($posts): ?>
    <div>
        <div class="flex justify-between items-center">
            <h2 class="section-title ltr:font-englishTitles"><?= $category->name; ?></h2>
            <a class="text-secondary font-bold" href="<?= get_category_link($category) ?>"><?= _e('More', 'thespeech'); ?></a>
        </div>

        <div class="flex w-full max-lg:overflow-x-auto max-lg:gap-4 lg:gap-5 max-lg:pb-5">
            <?php foreach ($posts as $key => $post): ?>
                <?php
                $b = ($big && $key === 0) ? true : false;
                ?>
                <?= get_template_part("components/PostCard", null, ['post' => $post, 'big' => $b]) ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>