<section class="overflow-hidden relative flex max-lg:flex-col max-lg:justify-center items-center max-lg:min-h-[calc(100vh-var(--mobile-header-height))] lg:min-h-[calc(100vh-var(--header-height))] bg-black w-full">

    <img class="image-wrap absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/microphone.webp" alt="The Speech banner">
    <div class="container">

        <div class="text-white relative max-w-[500px] flex flex-col gap-8 ltr:text-left rtl:text-right">
            <?php if (get_field('banner_title')): ?>
                <h1 class=" max-lg:text-5xl text-[80px] leading-[86px] font-[700]">
                    <?= get_field('banner_title'); ?>
                </h1>
            <?php endif; ?>
            <?php if (get_field('banner_subtitle')): ?>
                <h2 class="max-lg:text-base text-[20px] uppercase">
                    <?= get_field('banner_subtitle'); ?>
                </h2>
            <?php endif; ?>

            <div>
                <a data-fancybox class="mt-10 s-button border-primary bg-primary" href="https://youtu.be/4D8S-mNlc8Y"><?php _e('Watch Video', 'thespeech'); ?></a>
            </div>

        </div>
    </div>
</section>