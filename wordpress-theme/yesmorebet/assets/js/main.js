/**
 * YesMoreBet - Main JavaScript
 */

(function() {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.getElementById('mobile-menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = toggle.querySelector('.menu-icon');
        const closeIcon = toggle.querySelector('.close-icon');

        if (!toggle || !menu) return;

        toggle.addEventListener('click', function() {
            menu.classList.toggle('active');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Close menu when clicking on a link
        const menuLinks = menu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                menu.classList.remove('active');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    }

    /**
     * Accordion Toggle
     */
    function initAccordion() {
        const triggers = document.querySelectorAll('.accordion-trigger');

        triggers.forEach(function(trigger) {
            trigger.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.accordion-icon');
                const isOpen = content.style.display === 'block';

                // Close all accordions
                document.querySelectorAll('.accordion-content').forEach(function(item) {
                    item.style.display = 'none';
                });
                document.querySelectorAll('.accordion-icon').forEach(function(item) {
                    item.textContent = '+';
                });

                // Toggle current accordion
                if (!isOpen) {
                    content.style.display = 'block';
                    icon.textContent = '-';
                }
            });
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Skip if href is just "#"
                if (href === '#') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Contact Form Handler
     */
    function initContactForm() {
        const form = document.getElementById('contact-form');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            formData.append('action', 'yesmorebet_contact');
            formData.append('nonce', yesmorebet_ajax.nonce);

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Envoi en cours...';
            submitBtn.disabled = true;

            fetch(yesmorebet_ajax.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Message envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
                    form.reset();
                } else {
                    alert('Erreur lors de l\'envoi du message. Veuillez réessayer.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Erreur lors de l\'envoi du message. Veuillez réessayer.');
            })
            .finally(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    /**
     * Add active class to current navigation item
     */
    function initActiveNav() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-menu a, .mobile-menu a');

        navLinks.forEach(function(link) {
            const linkPath = new URL(link.href).pathname;
            if (linkPath === currentPath) {
                link.classList.add('active');
            }
        });
    }

    /**
     * Initialize Gallery Lightbox (if on gallery page)
     */
    function initGalleryLightbox() {
        const galleryItems = document.querySelectorAll('.gallery-item img');
        if (galleryItems.length === 0) return;

        galleryItems.forEach(function(img) {
            img.style.cursor = 'pointer';
            img.addEventListener('click', function() {
                const lightbox = document.createElement('div');
                lightbox.className = 'lightbox';
                lightbox.innerHTML = `
                    <div class="lightbox-overlay"></div>
                    <div class="lightbox-content">
                        <img src="${this.src}" alt="${this.alt}">
                        <button class="lightbox-close">&times;</button>
                    </div>
                `;

                document.body.appendChild(lightbox);
                document.body.style.overflow = 'hidden';

                // Close lightbox
                const close = () => {
                    lightbox.remove();
                    document.body.style.overflow = '';
                };

                lightbox.querySelector('.lightbox-close').addEventListener('click', close);
                lightbox.querySelector('.lightbox-overlay').addEventListener('click', close);
            });
        });
    }

    /**
     * Initialize all functions when DOM is ready
     */
    function init() {
        initMobileMenu();
        initAccordion();
        initSmoothScroll();
        initContactForm();
        initActiveNav();
        initGalleryLightbox();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
