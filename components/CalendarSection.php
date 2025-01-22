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
    <section class="bg-[#021112] py-12 text-white">
        <div class="container">
            <h2 class="section-title uppercase"><?= $category->name ?></h2>
            <div class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-7">
                <div class="flex flex-col gap-5">
                    <?php foreach ($posts as $post): ?>
                        <div>
                            <h4 class="text-[#707778] text-sm"><?= get_the_date('F j, Y', $post->ID) ?></h4>

                            <a href="<?= get_permalink($post->ID) ?>">
                                <h3><?= $post->post_title; ?></h3>
                            </a>
                            <div class="w-full h-[1px] bg-[#2C3636] mt-3"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="lg:col-span-1">
                    <div class="calendar-container flex flex-col justify-between" id="calendar">
                        <div>


                            <div class="calendar-header">
                                <button id="prev" class="arrow">&#8249;</button>
                                <div id="month-year" class="month-year uppercase">December 2024</div>
                                <button id="next" class="arrow">&#8250;</button>
                            </div>
                            <div class="w-full h-[1.15px] bg-[#414A4B] my-5"></div>
                            <div class="days-header text-sm">
                                <div>SUN</div>
                                <div>MON</div>
                                <div>TUE</div>
                                <div>WED</div>
                                <div>THU</div>
                                <div>FRI</div>
                                <div>SAT</div>
                            </div>
                            <div id="calendar-body" class="calendar-body"></div>
                        </div>
                        <button class="mt-auto calendar" id="go-to-today">Go to Today</button>
                    </div>
                </div>

                <div>
                    <div>
                        <?php get_template_part("components/post/thumb-small", null, ['post' => $posts[0]]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>