<?php get_header(); ?>
<?php get_template_part('components/HomeBanner'); ?>

<section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'news', 'big' => true, 'posts_per_page' => 4]); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="who-we-are p-5 flex max-lg:flex-col border-dashed border border-x-0 ">
            <h2 class="text-[#83858F] max-lg:border-0 text-lg border border-dashed border-y-0 ltr:border-l-0 rtl:border-r-0 ltr:pr-4 rtl:pl-4 text-nowrap ltr:mt-[0.8px] rtl:mt-1">
                <?= get_field('about_title') ?>
            </h2>
            <div class="ltr:lg:pl-4 rtl:lg:pr-4">
                <div class="flex items-center justify-between cursor-pointer group" id="who-we-are-handle">
                    <h3 class="group-hover:text-secondary ltr:font-englishTitles font-bold">
                        <?= get_field('about_subtitle'); ?>
                    </h3>
                    <div class="group cursor-pointer transition-all" id="who-we-are-arrow">
                        <svg width="32" height="34" viewBox="0 0 32 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1C17 0.447715 16.5523 -2.41411e-08 16 0C15.4477 2.41411e-08 15 0.447715 15 1L17 1ZM15.2929 33.7071C15.6834 34.0976 16.3166 34.0976 16.7071 33.7071L23.0711 27.3431C23.4616 26.9526 23.4616 26.3195 23.0711 25.9289C22.6805 25.5384 22.0474 25.5384 21.6569 25.9289L16 31.5858L10.3431 25.9289C9.95262 25.5384 9.31946 25.5384 8.92893 25.9289C8.53841 26.3195 8.53841 26.9526 8.92893 27.3431L15.2929 33.7071ZM15 1L15 33L17 33L17 1L15 1Z" fill="black" class="group-hover:fill-secondary" />
                        </svg>
                    </div>
                </div>
                <div id="who-we-are-content" class="ltr:pr-10 rtl:pl-10 h-0 overflow-hidden transition-all">
                    <?= get_field('about_description'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- <section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'warning', 'big' => false, 'posts_per_page' => 5]); ?>
    </div>
</section> -->

<div class="container">
    <section class="section with-separator">
        <?= get_template_part('components/TheTeam'); ?>
    </section>
</div>


<div class="container">
    <section class="section with-separator">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'protalk', 'big' => false, 'posts_per_page' => 5]); ?>
    </section>
</div>


<div class="container">
    <section class="section with-separator">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'stories', 'big' => false, 'posts_per_page' => 5]); ?>
    </section>
</div>

<div class="container">
    <section class="section with-separator">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'fyi', 'big' => false, 'posts_per_page' => 5]); ?>
    </section>
</div>

<section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'open-mic', 'big' => false, 'posts_per_page' => 5]); ?>
    </div>
</section>

<!-- <section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'follow-your-rights', 'big' => false, 'posts_per_page' => 5]); ?>
    </div>
</section> -->
<div class="mb-7"></div>
<?php get_footer(); ?>