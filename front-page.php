<?php get_header(); ?>
<?php get_template_part('components/homeBanner'); ?>
<!-- <section class="relative flex items-center min-h-[calc(100vh-92px)] bg-black w-full">
    <img class="absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/thespeech-banner.webp" alt="The Speech banner">
    <div class="container">
        <div class="text-white relative lg:w-1/3">
            <h1 class="max-lg:text-5xl text-[80px] leading-none">
                <?= get_field('banner_title'); ?>
            </h1>
            <h2 class="max-lg:text-base text-[20px] uppercase">
                <?= get_field('banner_subtitle'); ?>

            </h2>
        </div>
    </div>
</section> -->
<?php get_template_part('components/FullPostsSlider', null, ['category_name' => 'stories']); ?>
<?php get_template_part("components/homepage/twocolumns", null, ['category_name' => 'news']); ?>

<section class="bg-black py-12 text-white">
    <div class="container">
        <div class="max-w-[900px]">
            <h2 class="section-title mt-4"><?= get_field('about_title') ?></h2>
            <div class="py-8">
                <h2 class="text-xl uppercase mb-4"><?= get_field('about_subtitle') ?></h2>
                <?= get_field("about_description"); ?>
            </div>

        </div>
        <?php get_template_part('components/TeamSlider'); ?>
    </div>
</section>

<?php get_template_part('components/CalendarSection', null, ['category_name' => 'open-mic']); ?>

<?php get_footer(); ?>