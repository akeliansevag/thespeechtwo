<?php get_header(); ?>
<section class="section">
    <div class="container">
        <div class="flex items-center justify-center relative w-full overflow-hidden aspect-video">
            <a class="" data-fancybox href="https://youtu.be/4D8S-mNlc8Y">
                <?= get_template_part('components/assets/play-button'); ?>
            </a>
            <img class="-z-10 image-wrap absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/microphone.webp" alt="The Speech banner">
            <div class="max-lg:hidden absolute max-lg:max-w-auto max-lg:w-auto lg:max-w-[50%] flex flex-col gap-4 ltr:right-0 rtl:left-0 bottom-0 bg-white p-5">
                <h1 class="readex-pro max-lg:text-xl lg:text-3xl"><?= get_field("banner_title"); ?></h1>
                <?php if (get_field('banner_subtitle')): ?>
                    <h2 class="text-xl"><?= get_field("banner_subtitle"); ?></h2>
                <?php endif; ?>
            </div>
        </div>
        <div class="lg:hidden max-lg:max-w-auto max-lg:w-auto lg:max-w-[50%] flex flex-col gap-2 ltr:right-0 rtl:left-0 bottom-0 bg-white pt-5">
            <h1 class="readex-pro max-lg:text-xl lg:text-3xl"><?= get_field("banner_title"); ?></h1>
            <?php if (get_field('banner_subtitle')): ?>
                <h2 class="text-lg"><?= get_field("banner_subtitle"); ?></h2>
            <?php endif; ?>
        </div>
    </div>
</section>

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
                    <h3 class="uppercase font-bold group-hover:text-primary">
                        <?= get_field('about_subtitle'); ?>
                    </h3>
                    <div class="hover:opacity-40 cursor-pointer transition-all" id="who-we-are-arrow">
                        <svg width="32" height="34" viewBox="0 0 32 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1C17 0.447715 16.5523 -2.41411e-08 16 0C15.4477 2.41411e-08 15 0.447715 15 1L17 1ZM15.2929 33.7071C15.6834 34.0976 16.3166 34.0976 16.7071 33.7071L23.0711 27.3431C23.4616 26.9526 23.4616 26.3195 23.0711 25.9289C22.6805 25.5384 22.0474 25.5384 21.6569 25.9289L16 31.5858L10.3431 25.9289C9.95262 25.5384 9.31946 25.5384 8.92893 25.9289C8.53841 26.3195 8.53841 26.9526 8.92893 27.3431L15.2929 33.7071ZM15 1L15 33L17 33L17 1L15 1Z" fill="black" />
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

<section class="section">
    <div class="container">
        <?= get_template_part('components/TheTeam'); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'protalk', 'big' => true, 'posts_per_page' => 4]); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'stories', 'big' => true, 'posts_per_page' => 4]); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'fyi', 'big' => true, 'posts_per_page' => 4]); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'open-mic', 'big' => true, 'posts_per_page' => 4]); ?>
    </div>
</section>

<!-- <section class="section">
    <div class="container">
        <?= get_template_part("components/PostsLayout", null, ['category_name' => 'follow-your-rights', 'big' => true, 'posts_per_page' => 4]); ?>
    </div>
</section> -->

<?php get_footer(); ?>