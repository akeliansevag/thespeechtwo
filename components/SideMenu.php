<div id="side-menu-overlay" class="w-full h-full fixed top-0 -z-10 left-0 bg-black bg-opacity-40 opacity-0 transition-opacity"></div>
<div id="side-menu" class="overflow-y-auto w-full max-w-[400px] h-full fixed top-0 ltr:left-0 rtl:left-auto rtl:right-0 z-50 ltr:-translate-x-full rtl:translate-x-full bg-white transition-transform">
    <div id="close-side-menu" class="cursor-pointer justify-self-end p-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
            <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z" />
        </svg>
    </div>
    <div>
        <?php
        wp_nav_menu(['menu' => 'main-menu', 'menu_class' => 'uppercase mobile-menu font-[600]']);
        ?>
        <div class="p-5">
            <?php get_template_part('components/SocialMedia', null, ['color' => '#54555e']); ?>
        </div>
    </div>


</div>