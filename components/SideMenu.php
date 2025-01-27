<div id="side-menu-overlay" class="w-full h-full fixed top-0 -z-10 left-0 bg-black bg-opacity-40 opacity-0 transition-opacity"></div>
<div id="side-menu" class="py-4 px-10 overflow-y-auto w-full max-w-[400px] h-full fixed top-0 rtl:left-0 ltr:right-0 z-50 rtl:-translate-x-full ltr:translate-x-full bg-primary transition-transform flex flex-col gap-8">
    <div class="flex justify-end">
        <div id="close-side-menu" class="hover:opacity-80 flex items-center gap-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
                <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z" fill="white" />
            </svg>
        </div>
    </div>

    <div class="w-full">
        <form action="<?= home_url() ?>" method="get">
            <div class="relative">
                <input name="s" type="text" class="bg-[#ffffff] w-full ltr:pl-6 rtl:pl-10 ltr:pr-10 rtl:pr-6 py-3" placeholder="<?= _e('Search', 'thespeech') ?>">
                <div class="absolute top-1/2 -translate-y-1/2 ltr:right-5 rtl:left-5">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.49577 13.9998C8.97492 13.9995 10.4114 13.5044 11.5766 12.5932L15.2399 16.2565L16.4183 15.0782L12.7549 11.4148C13.6666 10.2496 14.1621 8.8127 14.1624 7.33317C14.1624 3.65734 11.1716 0.666504 7.49577 0.666504C3.81994 0.666504 0.829102 3.65734 0.829102 7.33317C0.829102 11.009 3.81994 13.9998 7.49577 13.9998ZM7.49577 2.33317C10.2533 2.33317 12.4958 4.57567 12.4958 7.33317C12.4958 10.0907 10.2533 12.3332 7.49577 12.3332C4.73827 12.3332 2.49577 10.0907 2.49577 7.33317C2.49577 4.57567 4.73827 2.33317 7.49577 2.33317Z" fill="#BBBFBF" />
                    </svg>
                </div>


            </div>

        </form>
    </div>
    <div>
        <?php
        wp_nav_menu(['menu' => 'main-menu', 'menu_class' => 'mobile-menu font-[600]']);
        ?>
    </div>


</div>