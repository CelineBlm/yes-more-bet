<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <nav class="container header-nav">
        <!-- Desktop Layout -->
        <div class="nav-desktop">
            <!-- Left - Navigation Links -->
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url(home_url('/#concept')); ?>" class="<?php echo (is_front_page()) ? 'active' : ''; ?>">Le concept</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>" class="<?php echo (is_page('faq')) ? 'active' : ''; ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/galerie')); ?>" class="<?php echo (is_page('galerie')) ? 'active' : ''; ?>">Galerie</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="<?php echo (is_page('contact')) ? 'active' : ''; ?>">Contact</a></li>
            </ul>

            <!-- Center - Logo -->
            <div class="logo-container">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php yesmorebet_custom_logo(); ?>
                </a>
            </div>

            <!-- Right - Phone & CTA -->
            <div class="header-cta">
                <a href="tel:+33626512217" class="phone-link">
                    <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                        <path d="M14.6667 11.28V13.28C14.6674 13.4657 14.6294 13.6494 14.555 13.8195C14.4807 13.9897 14.3716 14.1424 14.2348 14.2679C14.0979 14.3934 13.9364 14.489 13.7605 14.5485C13.5847 14.6079 13.3983 14.6299 13.2133 14.6133C11.1619 14.3904 9.19137 13.6894 7.46 12.5667C5.84919 11.5431 4.48353 10.1774 3.46 8.56665C2.33334 6.82745 1.6322 4.84731 1.41333 2.78665C1.39679 2.60219 1.41864 2.41634 1.4777 2.24093C1.53676 2.06552 1.63175 1.90428 1.75655 1.76748C1.88134 1.63068 2.03324 1.52144 2.20256 1.44663C2.37189 1.37183 2.55493 1.33314 2.74 1.33332H4.74C5.06353 1.33013 5.37717 1.4447 5.62248 1.65568C5.86779 1.86665 6.02804 2.15963 6.07333 2.47998C6.15779 3.12003 6.31434 3.74847 6.54 4.35332C6.62974 4.59193 6.64915 4.85127 6.59597 5.10058C6.5428 5.34989 6.41928 5.57872 6.24 5.75998L5.39333 6.60665C6.34242 8.27568 7.72431 9.65757 9.39333 10.6067L10.24 9.75998C10.4212 9.5807 10.6501 9.45719 10.8994 9.40401C11.1487 9.35084 11.4081 9.37024 11.6467 9.45998C12.2515 9.68564 12.88 9.8422 13.52 9.92665C13.8439 9.97234 14.1396 10.1355 14.3511 10.385C14.5625 10.6345 14.6748 10.953 14.6667 11.28Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>+33 6 26 51 22 17</span>
                </a>
                <a href="<?php echo esc_url(home_url('/prestations')); ?>" class="btn btn-primary">
                    Voir les formules
                </a>
            </div>
        </div>

        <!-- Mobile/Tablet Layout -->
        <div class="nav-mobile">
            <!-- Logo Mobile -->
            <div class="logo-mobile">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php yesmorebet_custom_logo(); ?>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle menu">
                <svg class="menu-icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg class="close-icon hidden" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-menu" id="mobile-menu">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="<?php echo (is_front_page()) ? 'active' : ''; ?>">Accueil</a>
            <a href="<?php echo esc_url(home_url('/#concept')); ?>">Le Concept</a>
            <a href="<?php echo esc_url(home_url('/faq')); ?>" class="<?php echo (is_page('faq')) ? 'active' : ''; ?>">FAQ</a>
            <a href="<?php echo esc_url(home_url('/galerie')); ?>" class="<?php echo (is_page('galerie')) ? 'active' : ''; ?>">Galerie</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="<?php echo (is_page('contact')) ? 'active' : ''; ?>">Contact</a>
            <a href="tel:+33626512217" class="phone-link">
                <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                    <path d="M14.6667 11.28V13.28C14.6674 13.4657 14.6294 13.6494 14.555 13.8195C14.4807 13.9897 14.3716 14.1424 14.2348 14.2679C14.0979 14.3934 13.9364 14.489 13.7605 14.5485C13.5847 14.6079 13.3983 14.6299 13.2133 14.6133C11.1619 14.3904 9.19137 13.6894 7.46 12.5667C5.84919 11.5431 4.48353 10.1774 3.46 8.56665C2.33334 6.82745 1.6322 4.84731 1.41333 2.78665C1.39679 2.60219 1.41864 2.41634 1.4777 2.24093C1.53676 2.06552 1.63175 1.90428 1.75655 1.76748C1.88134 1.63068 2.03324 1.52144 2.20256 1.44663C2.37189 1.37183 2.55493 1.33314 2.74 1.33332H4.74C5.06353 1.33013 5.37717 1.4447 5.62248 1.65568C5.86779 1.86665 6.02804 2.15963 6.07333 2.47998C6.15779 3.12003 6.31434 3.74847 6.54 4.35332C6.62974 4.59193 6.64915 4.85127 6.59597 5.10058C6.5428 5.34989 6.41928 5.57872 6.24 5.75998L5.39333 6.60665C6.34242 8.27568 7.72431 9.65757 9.39333 10.6067L10.24 9.75998C10.4212 9.5807 10.6501 9.45719 10.8994 9.40401C11.1487 9.35084 11.4081 9.37024 11.6467 9.45998C12.2515 9.68564 12.88 9.8422 13.52 9.92665C13.8439 9.97234 14.1396 10.1355 14.3511 10.385C14.5625 10.6345 14.6748 10.953 14.6667 11.28Z" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>+33 6 26 51 22 17</span>
            </a>
            <a href="<?php echo esc_url(home_url('/prestations')); ?>" class="btn btn-primary">
                Voir les formules
            </a>
        </div>
    </nav>
</header>

<main id="main-content" class="site-main">
