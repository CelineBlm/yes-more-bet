# YesMoreBet - Thème WordPress

Thème WordPress complet et fonctionnel pour YesMoreBet - Animation casino fictif pour événements privés.

## Caractéristiques

### Design
- Design fidèle au site original React
- Police Quicksand (300, 400, 500, 600, 700)
- Couleurs: Or (#fdc700, #d08700), Noir, Blanc
- Gradients dorés
- Animations et transitions fluides
- Responsive design mobile-first

### Pages incluses
1. **Accueil** (front-page.php) - Hero, Features, Concept, FAQ
2. **Prestations** (page-prestations.php) - 3 formules avec tarifs
3. **Galerie** (page-galerie.php) - Photos d'événements
4. **Contact** (page-contact.php) - Formulaire + À propos
5. **FAQ** (page-faq.php) - Questions fréquentes
6. **Mentions Légales** (page-mentions-legales.php)
7. **Politique de Confidentialité** (page-politique-confidentialite.php)
8. **CGV** (page-cgv.php)

### Fonctionnalités
- Menu de navigation responsive
- Formulaire de contact avec AJAX
- Accordion pour FAQ
- Lightbox pour galerie
- Smooth scroll
- Optimisé SEO
- Support des images à la une
- Widgets footer

## Installation

1. Téléchargez le dossier `yesmorebet`
2. Placez-le dans `/wp-content/themes/`
3. Activez le thème dans l'admin WordPress
4. Créez les pages suivantes avec les slugs correspondants:
   - accueil (définie comme page d'accueil)
   - prestations
   - galerie
   - contact
   - faq
   - mentions-legales
   - politique-confidentialite
   - cgv

## Configuration

### Menus
1. Allez dans Apparence > Menus
2. Créez un menu principal avec les liens:
   - Le concept (lien vers #concept)
   - FAQ
   - Galerie
   - Contact

### Logo personnalisé
1. Allez dans Apparence > Personnaliser > Identité du site
2. Téléchargez votre logo (dimensions recommandées: 174x114px)

### Widgets Footer
Le thème inclut 2 zones de widgets pour le footer.

## Structure des fichiers

```
yesmorebet/
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── inc/
├── template-parts/
├── functions.php
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── page-*.php (templates de pages)
└── style.css
```

## Personnalisation

### Couleurs
Toutes les couleurs sont définies dans `assets/css/main.css` via des variables CSS:
```css
--color-gold-primary: #fdc700;
--color-gold-secondary: #d08700;
--color-black: #000000;
--color-white: #ffffff;
```

### Typographie
Police Quicksand chargée depuis Google Fonts.
Tailles définies dans le CSS avec des variables.

## Support

Pour toute question ou assistance, contactez: contact@yesmorebet.fr

## Licence

© 2025 YesMoreBet. Tous droits réservés.
