<?php
$taxonomy = null;
if (isset(get_queried_object()->taxonomy)) {
    $taxonomy = get_queried_object();
}

$paged = max(1, get_query_var('paged', 1));


$args = [];
// $args['posts_per_page'] = 9;
$args['paged'] = $paged;
if ($taxonomy && $taxonomy->taxonomy == 'category') {
    $args['category__in'] = array($taxonomy->term_id);
}

if ($taxonomy && $taxonomy->taxonomy == 'post_tag') {
    $args['tag__in'] = array($taxonomy->term_id);
}

if (get_query_var('author')) {
    $author = get_user_by('id', get_query_var("author"));
    $args['author'] = $author->ID;
}

$title = "";
if ($taxonomy) {
    $title = $taxonomy->name;
}
if (isset($author) && !empty($author)) {
    $title = $author->user_nicename;
}
$query = new WP_Query($args);
$posts = $query->posts;
?>
<main>
    <section>
        <div class="container">
            <h1 class="section-title uppercase">
                <?= $title; ?>
            </h1>
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
        </div>
    </section>
</main>