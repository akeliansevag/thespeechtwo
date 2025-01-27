<?php get_header(); ?>
<!-- <?php get_template_part('components/homeBanner'); ?> -->

<?php //get_template_part('components/FullPostsSlider', null, ['category_name' => 'stories']); 
?>
<?php get_template_part("components/homepage/twocolumns", null, ['category_name' => 'news']); ?>

<section class="bg-black py-12 text-white">
    <div class="container">
        <div class="max-w-[900px]">
            <h2 class="section-title mt-4"><?= get_field('about_title') ?></h2>
            <div class="py-8">
                <h2 class="text-xl mb-4"><?= get_field('about_subtitle') ?></h2>
                <?= get_field("about_description"); ?>
            </div>

        </div>
        <?php get_template_part('components/TeamSlider'); ?>
    </div>
</section>

<?php get_template_part('components/CalendarSection', null, ['category_name' => 'open-mic']); ?>

<?php get_footer(); ?>