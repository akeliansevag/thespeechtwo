<?php
$query = new WP_Query([
    'post_type' => 'team'
]);
$team = $query->posts;
?>
<h2 class="section-title"><?= _e("THE TEAM", 'thespeech') ?></h2>
<div id="team-slider" class="team swiper mt-8">
    <div class="swiper-wrapper">
        <?php foreach ($team as $member): ?>
            <div class="swiper-slide">
                <a href="<?= get_permalink($member->ID) ?>">
                    <?php $thumb_classes = 'absolute w-full h-full object-cover -z-10'; ?>
                    <?php if (has_post_thumbnail($member->ID)): ?>
                        <?= get_the_post_thumbnail($member->ID, 'large-thumbnail', ['class' => $thumb_classes]); ?>
                    <?php else: ?>
                        <img src="<?= get_template_directory_uri() ?>/src/img/placeholder-person.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
                    <?php endif; ?>
                    <div class="flex flex-col justify-center relative w-full aspect-square overlay p-10">
                        <div class="flex flex-col justify-center items-center gap-4 text-center relative z-10">
                            <?php get_template_part("components/assets/play-button"); ?>
                            <h3 class="uppercase mt-4 text-xl font-[700]"><?= $member->post_title ?></h3>
                            <h4 class="text-xl"><?= get_field('title', $member->ID) ?></h4>
                            <h5><?= get_field('degree', $member->ID) ?></h5>
                        </div>
                        <div class="max-w-[350px] mt-10 w-full mx-auto max-lg:flex-col flex justify-between items-center gap-6 relative z-10">
                            <a href="<?= get_permalink($member->ID) ?>" class="s-button bg-primary border-primary">
                                <?php _e('Play Video', 'thespeech') ?>
                            </a>
                            <!-- <a href="<?= get_permalink($member->ID) ?>" class="s-button text-white border-white">
                            Watch Video
                        </a> -->
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev after:text-white"></div>
    <div class="swiper-button-next after:text-white"></div>
</div>
<?php wp_reset_postdata(); ?>