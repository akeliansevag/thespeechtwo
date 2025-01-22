<?php get_header(); ?>
<?php
$q = null;
if (isset($_GET['s'])) {
    $q = $_GET['s'];
}

if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$query = new WP_Query([
    'posts_per_page' => 9,
    's' => $q,
    'paged' => $paged,
]);
$posts = $query->posts;
?>

<main>
    <section>
        <div class="container">
            <h1 class="section-title uppercase">
                <?= _e("Search results for:", 'thespeech') ?> <?= $q; ?>
            </h1>
            <div class="bg-[#A60023] h-[4px] w-[50px]"></div>
            <?php if ($posts): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 py-8">
                    <?php foreach ($posts as $post): ?>
                        <?php get_template_part("components/article-card", "", ['post' => $post]); ?>
                    <?php endforeach; ?>
                </div>
                <nav class="pagination text-center my-10">
                    <?php
                    $big = 999999999;

                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '/page/%#%',
                        'current' => $paged,
                        'total' => $query->max_num_pages,
                        'next_text' => '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 12.7407L7 6.74072L1 0.740723" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>',
                        'prev_text' => '<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 12.7407L1 6.74072L7 0.740723" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>'
                    ));
                    ?>
                </nav>
            <?php else: ?>
                <div class="mt-10">
                    <h2><?= _e("No posts to display.", "thespeech"); ?></h2>
                </div>

            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>