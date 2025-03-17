<?php get_header(); ?>
<?php
$member = get_post();
$youtube_link = get_field('youtube_link');
$title = get_field('title');
$degree = get_field('degree');
$query = new WP_Query([
    'posts_per_page' => 6
]);
$posts = $query->posts;
?>
<main>
    <div class="container">
        <div class="flex max-lg:flex-col gap-10">
            <div class="w-full lg:w-3/4 ">
                <div class="section-wrapper-full">
                    <?php if ($youtube_link): ?>
                        <?= generate_youtube_iframe($youtube_link); ?>
                    <?php endif; ?>
                </div>

                <div class="section-wrapper !pt-5">
                    <div class="py-6">
                        <div class="mb-2">
                            <div class="lg:flex lg:items-center lg:justify-between">
                                <h1 class="text-2xl ltr:font-englishTitles font-bold"><?= $member->post_title; ?></h1>
                                <div class="max-lg:my-2">
                                    <?= get_template_part('components/socialShare'); ?>
                                </div>
                            </div>
                            <?php if ($title): ?>
                                <h5 class="text-md uppercase font-bold text-primary mt-3"><?= $title; ?></h5>
                            <?php endif; ?>
                            <?php if ($degree): ?>
                                <h5 class="text-sm uppercase font-bold mt-3"><?= $degree; ?></h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-full lg:w-1/4">
                <?= get_template_part('components/sidebar', null, ['title' => 'Latest Posts', 'posts' => $posts]); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>