<?php
/**
 * Template for the home page
 *
 * @package YesMoreBet
 */

get_header();
?>

<!-- Hero Section -->
<section id="accueil" class="hero-section">
    <div class="hero-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-casino.jpg" alt="Casino table ambiance">
        <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
        <h1 class="hero-title">YesMoreBet</h1>

        <h2 class="hero-subtitle">
            L'expérience casino fictif pour vos soirées privées, mariages et événements d'entreprise sur la Côte d'Azur.
        </h2>

        <div class="hero-location">
            <svg width="20" height="20" fill="none" viewBox="0 0 20 20">
                <path d="M17.5 8.33334C17.5 14.1667 10 19.1667 10 19.1667C10 19.1667 2.5 14.1667 2.5 8.33334C2.5 6.34422 3.29018 4.4365 4.6967 3.03024C6.10322 1.62398 8.01088 0.833344 10 0.833344C11.9891 0.833344 13.8968 1.62398 15.3033 3.03024C16.7098 4.4365 17.5 6.34422 17.5 8.33334Z" stroke="#FACC15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10 10.8333C11.3807 10.8333 12.5 9.71406 12.5 8.33334C12.5 6.95262 11.3807 5.83334 10 5.83334C8.61929 5.83334 7.5 6.95262 7.5 8.33334C7.5 9.71406 8.61929 10.8333 10 10.8333Z" stroke="#FACC15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Grasse • Cannes • Antibes • Nice • Région PACA</span>
        </div>

        <div class="hero-cta">
            <a href="<?php echo esc_url(home_url('/prestations')); ?>" class="btn btn-primary">
                Découvrir les formules
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary">
                Me contacter
            </a>
        </div>
    </div>

    <div class="scroll-indicator">
        <svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="#FACC15">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="badge">Nos Services</span>
            <h2 class="mb-4">
                Une animation <span class="gradient-text">complète</span>
            </h2>
            <p style="color: var(--color-text-light); max-width: 800px; margin: 0 auto; font-size: 1.125rem;">
                Tout ce dont vous avez besoin pour créer une soirée casino inoubliable
            </p>
        </div>

        <!-- Features Grid -->
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blackjack.jpg" alt="Table de Blackjack">
                    <div class="feature-image-overlay"></div>
                </div>
                <div class="feature-content">
                    <h3 class="mb-3">Table de Blackjack professionnelle</h3>
                    <p style="color: var(--color-text-light); margin-bottom: 1rem;">
                        Une vraie table de casino animée par un croupier professionnel pour une expérience authentique.
                    </p>
                    <a href="<?php echo esc_url(home_url('/prestations')); ?>" style="color: var(--color-gold-primary); display: inline-flex; align-items: center; gap: 0.5rem;">
                        En savoir plus
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/roue-chance.jpg" alt="Roue de la Chance">
                    <div class="feature-image-overlay"></div>
                </div>
                <div class="feature-content">
                    <h3 class="mb-3">Roue de la Chance et tombola à lots</h3>
                    <p style="color: var(--color-text-light); margin-bottom: 1rem;">
                        Gagnez des tickets de tombola à la Roue de la Chance et remportez des lots en fin de soirée.
                    </p>
                    <a href="<?php echo esc_url(home_url('/prestations')); ?>" style="color: var(--color-gold-primary); display: inline-flex; align-items: center; gap: 0.5rem;">
                        En savoir plus
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lunettes.jpg" alt="Lunettes connectées">
                    <div class="feature-image-overlay"></div>
                </div>
                <div class="feature-content">
                    <h3 class="mb-3">Lunettes connectées</h3>
                    <p style="color: var(--color-text-light); margin-bottom: 1rem;">
                        Immortalisez les meilleurs moments avec des lunettes connectées pour des souvenirs uniques à partager.
                    </p>
                    <a href="<?php echo esc_url(home_url('/prestations')); ?>" style="color: var(--color-gold-primary); display: inline-flex; align-items: center; gap: 0.5rem;">
                        En savoir plus
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Concept Section -->
<section id="concept" class="py-20" style="position: relative; overflow: hidden;">
    <!-- Background Pattern -->
    <div style="position: absolute; inset: 0; opacity: 0.05; background-image: radial-gradient(circle at 2px 2px, #FACC15 1px, transparent 0); background-size: 40px 40px;"></div>

    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 1280px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr; gap: 3rem; align-items: center; margin-bottom: 5rem;">
                <!-- Text Content -->
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <span class="badge">Le Concept</span>
                    <h2 style="font-size: 2.5rem;">
                        Une expérience <span class="gradient-text">unique</span>, conviviale et 100% divertissante
                    </h2>
                    <p style="color: var(--color-text-light); font-size: 1.125rem; line-height: 1.6;">
                        Une animation clé en main : vos invités reçoivent des jetons fictifs, jouent au Blackjack,
                        gagnent des tickets de tombola grâce à la Roue de la Chance et repartent avec des lots choisis par vos soins.
                    </p>
                    <p style="color: var(--color-text-light); font-size: 1.125rem; line-height: 1.6;">
                        Une expérience unique, conviviale et 100 % divertissante.
                    </p>

                    <div style="padding-top: 1rem;">
                        <a href="<?php echo esc_url(home_url('/prestations')); ?>" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                            Découvrir les formules
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20">
    <div class="container">
        <div style="max-width: 1024px; margin: 0 auto;">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="height: 1px; width: 3rem; background: linear-gradient(to right, transparent, var(--color-gold-primary));"></div>
                    <h2>Questions fréquentes</h2>
                    <div style="height: 1px; width: 3rem; background: linear-gradient(to left, transparent, var(--color-gold-primary));"></div>
                </div>
                <p style="color: var(--color-text-light); font-size: 1.125rem;">
                    Tout ce que vous devez savoir sur nos animations casino
                </p>
            </div>

            <!-- FAQ Accordion -->
            <div class="accordion">
                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Pouvons-nous personnaliser les jetons et la décoration ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Absolument ! Nous pouvons personnaliser les jetons avec votre logo, vos initiales ou un design spécifique lié à votre événement (mariage, entreprise, anniversaire). La décoration autour de la table peut également s'adapter au thème de votre soirée pour créer une ambiance unique et mémorable.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Le croupier peut-il s'adapter au niveau des joueurs ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Bien sûr ! Notre croupier professionnel s'adapte à tous les niveaux. Il explique les règles du blackjack de manière simple et ludique pour les débutants, tout en maintenant un rythme dynamique pour les joueurs expérimentés. L'objectif est que tout le monde s'amuse, quel que soit son niveau.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Quelle tenue vestimentaire porte le croupier ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Notre croupier arbore une tenue élégante et professionnelle : chemise noire, pantalon noir et nœud papillon doré, dans l'esprit des croupiers de casino. Cette tenue renforce l'authenticité de l'expérience et s'adapte parfaitement à tout type d'événement chic ou décontracté.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Peut-on combiner votre animation avec d'autres prestations ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Oui, tout à fait ! Notre animation casino se marie parfaitement avec d'autres prestations : DJ, photobooth, traiteur, bar à cocktails, magicien, etc. Nous pouvons coordonner nos horaires pour que l'animation s'intègre harmonieusement dans le déroulé de votre soirée.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Y a-t-il une limite d'âge pour participer ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        L'animation YesMoreBet est accessible dès 16 ans, bien qu'il s'agisse d'un jeu fictif sans argent réel. Pour les événements familiaux avec des enfants plus jeunes, nous pouvons adapter l'animation pour la rendre accessible et ludique pour tous.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Comment fonctionne exactement la tombola finale ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Tout au long de la soirée, les participants accumulent des jetons en jouant au blackjack. À la fin de l'animation, ces jetons sont convertis en tickets de tombola : plus vous avez de jetons, plus vous avez de chances de gagner ! Le tirage au sort final permet de remporter les lots que vous avez choisis.
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Proposez-vous des animations en extérieur ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Oui, nous pouvons intervenir en extérieur à condition de disposer d'un espace couvert et protégé (tonnelle, tente, patio). Le matériel de jeu (cartes, jetons) doit être à l'abri du vent et des intempéries. Pour les jardins, terrasses ou poolhouse, c'est parfaitement adapté !
                    </div>
                </div>

                <div class="accordion-item">
                    <button class="accordion-trigger">
                        Faut-il prévoir une connexion électrique ou un accès Wi-Fi ?
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content" style="display: none;">
                        Aucune connexion électrique ou Wi-Fi n'est nécessaire pour l'animation casino. Les lunettes connectées fonctionnent en autonomie totale. Vous n'avez qu'à prévoir l'espace, l'éclairage ambiant et les chaises — nous gérons tout le reste en toute autonomie.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.badge {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: rgba(208, 135, 0, 0.1);
    border: 1px solid rgba(208, 135, 0, 0.3);
    border-radius: var(--radius-md);
    color: var(--color-gold-primary);
    font-size: 0.875rem;
}

@media (min-width: 1024px) {
    #concept > div > div > div {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<?php
get_footer();
