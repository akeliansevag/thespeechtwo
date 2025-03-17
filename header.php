<!doctype html>
<html dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?= get_template_directory_uri() ?>/src/img/favicon.png" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('components/SideMenu'); ?>
	<div class="relative">
		<header class="transition-all fixed top-0 z-20 w-full">
			<div id="top-bar" class="max-lg:hidden transition-all max-lg:h-[var(--mobile-header-height)] lg:h-[var(--top-bar-height)] bg-primary w-full ">
				<div class="lg:container max-lg:ltr:pl-[15px] max-lg:rtl:pr-[15px] h-full">
					<div class="max-lg:h-0 flex justify-between transition-all">
						<div class="">
							<!-- <?= do_shortcode('[wpml_language_selector_widget]'); ?> -->
						</div>
						<div class="flex justify-end max-lg:hidden">
							<?php
							wp_nav_menu(['menu' => 'main-menu', 'menu_id' => 'main-menu', 'menu_class' => 'menu text-sm']);
							?>
						</div>
					</div>
				</div>
			</div>
			<div id="top-header" class="transition-all max-lg:h-[var(--mobile-header-height)] lg:h-[var(--header-height)] bg-primary w-full h-full">
				<div class="lg:container max-lg:ltr:pl-[15px] max-lg:rtl:pr-[15px] h-full">
					<div class="flex justify-between h-full items-center">
						<a class="inline-block lg:translate-y-[2px]" href="<?= home_url() ?>">
							<svg id="header-logo" class="transition-all max-lg:w-[200px] lg:w-[360px] h-auto" width="360" height="65" viewBox="0 0 491 89" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_366_638)">
									<path d="M7.31543 75.5229V74.2197H83.2306V75.5229H7.31543Z" fill="white" />
									<path d="M10.2978 57.3314V27.8399C5.38258 27.8399 2.27821 29.599 0.777769 33.5312H0.519072L1.29516 25.7703H25.5092L26.2853 33.5312H26.0266C24.5262 29.599 21.4218 27.8399 16.5066 27.8399V57.3314C16.5066 59.0388 16.8687 59.9701 17.8 60.6944V60.9531H9.00434V60.6944C9.93565 59.9701 10.2978 59.0388 10.2978 57.3314ZM30.6755 29.3921C30.6755 27.6847 30.3133 26.7534 29.382 26.029V25.7703H38.1777V26.029C37.2464 26.7534 36.8842 27.6847 36.8842 29.3921V41.2921H48.2669V29.3921C48.2669 27.6847 47.9047 26.7534 46.9734 26.029V25.7703H55.7691V26.029C54.8378 26.7534 54.4756 27.6847 54.4756 29.3921V57.3314C54.4756 59.0388 54.8378 59.9701 55.7691 60.6944V60.9531H46.9734V60.6944C47.9047 59.9701 48.2669 59.0388 48.2669 57.3314V43.3617H36.8842V57.3314C36.8842 59.0388 37.2464 59.9701 38.1777 60.6944V60.9531H29.382V60.6944C30.3133 59.9701 30.6755 59.0388 30.6755 57.3314V29.3921ZM60.6884 29.3921C60.6884 27.6847 60.3262 26.7534 59.3949 26.029V25.7703H80.1424L80.9185 33.5312H80.6598C79.2111 29.6508 75.6928 27.8399 69.5358 27.8399H66.8971V41.2921H71.295C74.6063 41.2921 76.3654 40.6195 76.9863 39.2226H77.245V45.4313H76.9863C76.3654 44.0343 74.6063 43.3617 71.295 43.3617H66.8971V58.8835H70.0532C75.7963 58.8835 79.4698 56.814 81.1772 52.6748H81.4359L80.9185 60.9531H59.3949V60.6944C60.3262 59.9701 60.6884 59.0388 60.6884 57.3314V29.3921Z" fill="white" />
									<path d="M98.6141 24.0178C98.6141 9.68854 109.801 0.638481 127.398 0.638481C136.197 0.638481 144.619 2.90099 151.155 6.92324L145.875 24.5206H145.247C141.979 12.3281 135.317 5.79198 125.513 5.79198C116.966 5.79198 111.561 10.8198 111.561 18.1101C111.561 37.97 152.412 36.713 152.412 64.6173C152.412 79.4494 140.848 88.6251 122.37 88.6251C113.195 88.6251 105.15 86.3626 98.6141 82.3404L103.893 64.743H104.522C107.79 76.9355 114.703 83.4716 124.759 83.4716C133.683 83.4716 139.339 78.3181 139.339 70.6507C139.339 50.0367 98.6141 51.2936 98.6141 24.0178ZM163.038 10.6941C163.038 6.54616 162.158 4.28365 159.895 2.52391V1.89544H191.445C211.933 1.89544 222.869 9.56284 222.869 23.7664C222.869 41.238 206.528 52.2992 180.761 52.2992H178.121V78.5695C178.121 82.7174 179.001 84.98 181.264 86.7397V87.3682H159.895V86.7397C162.158 84.98 163.038 82.7174 163.038 78.5695V10.6941ZM178.121 47.2714H180.635C197.73 47.2714 207.031 40.3582 207.031 27.5373C207.031 15.0934 198.232 6.92324 184.783 6.92324H178.121V47.2714ZM233.496 10.6941C233.496 6.54616 232.616 4.28365 230.353 2.52391V1.89544H280.757L282.643 20.7497H282.014C278.495 11.3226 269.947 6.92324 254.99 6.92324H248.579V39.604H259.263C267.308 39.604 271.581 37.97 273.09 34.5762H273.718V49.6596H273.09C271.581 46.2658 267.308 44.6318 259.263 44.6318H248.579V82.3404H256.247C270.199 82.3404 279.123 77.3125 283.271 67.2569H283.9L282.643 87.3682H230.353V86.7397C232.616 84.98 233.496 82.7174 233.496 78.5695V10.6941ZM295.239 10.6941C295.239 6.54616 294.359 4.28365 292.096 2.52391V1.89544H342.5L344.385 20.7497H343.757C340.238 11.3226 331.69 6.92324 316.733 6.92324H310.322V39.604H321.006C329.051 39.604 333.324 37.97 334.833 34.5762H335.461V49.6596H334.833C333.324 46.2658 329.051 44.6318 321.006 44.6318H310.322V82.3404H317.989C331.942 82.3404 340.866 77.3125 345.014 67.2569H345.642L344.385 87.3682H292.096V86.7397C294.359 84.98 295.239 82.7174 295.239 78.5695V10.6941ZM415.112 5.66629L413.603 24.5206H412.975C410.587 12.7052 402.165 5.79198 390.475 5.79198C376.523 5.79198 365.713 15.5962 365.713 38.0956C365.713 62.3548 378.157 80.3292 396.257 80.3292C405.559 80.3292 413.729 75.8042 417.248 68.5139L419.008 69.6451C414.609 81.0834 402.542 88.6251 388.716 88.6251C366.845 88.6251 350.127 69.6451 350.127 45.0089C350.127 19.2414 368.353 0.638481 392.612 0.638481C400.154 0.638481 408.701 2.39821 415.112 5.66629ZM429.649 10.6941C429.649 6.54616 428.769 4.28365 426.507 2.52391V1.89544H447.875V2.52391C445.612 4.28365 444.732 6.54616 444.732 10.6941V39.604H472.385V10.6941C472.385 6.54616 471.506 4.28365 469.243 2.52391V1.89544H490.611V2.52391C488.349 4.28365 487.469 6.54616 487.469 10.6941V78.5695C487.469 82.7174 488.349 84.98 490.611 86.7397V87.3682H469.243V86.7397C471.506 84.98 472.385 82.7174 472.385 78.5695V44.6318H444.732V78.5695C444.732 82.7174 445.612 84.98 447.875 86.7397V87.3682H426.507V86.7397C428.769 84.98 429.649 82.7174 429.649 78.5695V10.6941Z" fill="white" />
								</g>
								<defs>
									<clipPath id="clip0_366_638">
										<rect width="491" height="89" fill="white" />
									</clipPath>
								</defs>
							</svg>

						</a>
						<div class="flex items-center gap-2 max-lg:h-full">
							<div class="" id="language-picker">
								<?= do_shortcode('[wpml_language_selector_widget]'); ?>
							</div>
							<div class="hamburger cursor-pointer" id="hamburger">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>