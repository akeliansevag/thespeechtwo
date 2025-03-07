<?php
$team = new WP_Query([
    'post_type' => 'team'
]);
$members = $team->posts;
?>
<div>
    <h2 class="section-title"><?= _e("The Team", 'thespeech') ?></h2>
    <div class="grid max-lg:grid-cols-1 lg:grid-cols-2 gap-5">
        <div class="bg-[#f8f8f8] p-5">
            <a class="group" href="<?= get_permalink($members[0]) ?>">
                <div class="w-full flex items-center justify-center aspect-video relative overflow-hidden">
                    <div class="absolute z-10">
                        <?php get_template_part('components/assets/play-button'); ?>
                    </div>
                    <?php $thumb_classes = 'absolute w-full h-full object-cover z-0 group-hover:scale-[1.2] transition-transform duration-[500ms] ease-in-out'; ?>
                    <?php if (has_post_thumbnail($members[0]->ID)): ?>
                        <?= get_the_post_thumbnail($members[0]->ID, 'large-thumbnail', ['class' => $thumb_classes]); ?>
                    <?php else: ?>
                        <img src="<?= get_template_directory_uri() ?>/src/img/placeholder-person.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
                    <?php endif; ?>
                </div>
            </a>
            <div class="text-center pt-5">
                <h3 class="text-[#2a7374]"><?= get_field('title', $members[0]->ID) ?></h3>
                <a href="<?= get_permalink($members[0]) ?>" class="text-2xl"><?= $members[0]->post_title ?></a>
                <h5><?= get_field('degree', $members[0]->ID) ?></h5>
            </div>
        </div>

        <?php unset($members[0]); ?>
        <div>
            <div class="max-lg:hidden">
                <div class="swiper" id="team-slider-desktop">
                    <div class="swiper-wrapper">
                        <?php
                        $chunked_members = array_chunk($members, 3); // Group members into sets of 3
                        foreach ($chunked_members as $group): ?>
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-5">
                                    <?php foreach ($group as $member): ?>
                                        <div class="flex items-center gap-5">
                                            <div class="w-3/5">
                                                <h3 class="text-[#2a7374]"><?= get_field('title', $member->ID) ?></h3>
                                                <h4 class="text-2xl"><?= $member->post_title ?></h4>
                                                <h5><?= get_field('degree', $member->ID) ?></h5>
                                            </div>
                                            <a class="group w-2/5" href="<?= get_permalink($member) ?>">
                                                <div class="w-full flex items-center justify-center aspect-video relative overflow-hidden">
                                                    <div class="absolute z-10">
                                                        <?php get_template_part('components/assets/play-button'); ?>
                                                    </div>
                                                    <?php
                                                    $thumb_classes = 'absolute w-full h-full object-cover z-0 group-hover:scale-[1.2] transition-transform duration-[500ms] ease-in-out';
                                                    if (has_post_thumbnail($member->ID)):
                                                        echo get_the_post_thumbnail($member->ID, 'large-thumbnail', ['class' => $thumb_classes]);
                                                    else: ?>
                                                        <img src="<?= get_template_directory_uri() ?>/src/img/placeholder-person.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>


            <div class="lg:hidden">
                <div class="swiper" id="team-slider-mobile">
                    <div class="swiper-wrapper">
                        <?php foreach ($members as $member): ?>
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-3">
                                    <a class="group w-full" href="<?= get_permalink($member) ?>">
                                        <div class="w-full flex items-center justify-center aspect-video relative overflow-hidden">
                                            <div class="absolute z-10">
                                                <?php get_template_part('components/assets/play-button'); ?>
                                            </div>
                                            <?php
                                            $thumb_classes = 'absolute w-full h-full object-cover z-0 group-hover:scale-[1.2] transition-transform duration-[500ms] ease-in-out';
                                            if (has_post_thumbnail($member->ID)):
                                                echo get_the_post_thumbnail($member->ID, 'large-thumbnail', ['class' => $thumb_classes]);
                                            else: ?>
                                                <img src="<?= get_template_directory_uri() ?>/src/img/placeholder-person.webp" alt="Image Placeholder" class="<?= $thumb_classes ?>">
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                    <div class="w-full">
                                        <h3 class="text-[#2a7374]"><?= get_field('title', $member->ID) ?></h3>
                                        <h4 class="text-2xl"><?= $member->post_title ?></h4>
                                        <h5><?= get_field('degree', $member->ID) ?></h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination max-lg:hidden !relative mt-7"></div>
</div>
<?php wp_reset_postdata(); ?>