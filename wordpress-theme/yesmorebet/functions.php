<?php
/**
 * YesMoreBet Theme Functions
 *
 * @package YesMoreBet
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function yesmorebet_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'yesmorebet'),
        'footer' => __('Footer Menu', 'yesmorebet'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 114,
        'width'       => 174,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'yesmorebet_setup');

/**
 * Enqueue scripts and styles
 */
function yesmorebet_scripts() {
    // Main stylesheet
    wp_enqueue_style('yesmorebet-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Main theme script
    wp_enqueue_script('yesmorebet-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);

    // Localize script for AJAX
    wp_localize_script('yesmorebet-main', 'yesmorebet_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('yesmorebet_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'yesmorebet_scripts');

/**
 * Register Widget Areas
 */
function yesmorebet_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'yesmorebet'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'yesmorebet'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'yesmorebet'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in your footer.', 'yesmorebet'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'yesmorebet_widgets_init');

/**
 * Custom Logo SVG
 */
function yesmorebet_custom_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo yesmorebet_get_svg_logo();
    }
}

/**
 * Get SVG Logo
 */
function yesmorebet_get_svg_logo() {
    return '<div class="logo">
        <svg fill="none" preserveAspectRatio="none" viewBox="0 0 174 114">
            <g>
                <path d="M22.7656 38.3125H34.3594V41.2031H26.0781V45.0781H33.7812V47.9531H26.0781V54H22.7656V38.3125Z" fill="#FDC700" />
                <path d="M36.0625 38.3125H42.9062C44.6979 38.3125 46.1458 38.8021 47.25 39.7812C48.3542 40.7604 48.9062 42.0625 48.9062 43.6875C48.9062 45.3125 48.3542 46.6146 47.25 47.5938C46.1458 48.5729 44.6979 49.0625 42.9062 49.0625H39.375V54H36.0625V38.3125ZM39.375 41.0469V46.3281H42.9062C43.9062 46.3281 44.6771 46.0833 45.2188 45.5938C45.7604 45.1042 46.0312 44.4688 46.0312 43.6875C46.0312 42.9062 45.7604 42.2708 45.2188 41.7812C44.6771 41.2917 43.9062 41.0469 42.9062 41.0469H39.375Z" fill="#FDC700" />
                <path d="M58.0312 38.3125V41.2031H52.5V45.0781H57.5V47.9531H52.5V51.1094H58.2188V54H49.1875V38.3125H58.0312Z" fill="#FDC700" />
                <path d="M67.0312 38.3125C68.8229 38.3125 70.2708 38.8021 71.375 39.7812C72.4792 40.7604 73.0312 42.0625 73.0312 43.6875V54H69.7188V44.2031C69.7188 43.3177 69.4792 42.625 69 42.125C68.5208 41.625 67.8438 41.375 66.9688 41.375C66.0938 41.375 65.4167 41.625 64.9375 42.125C64.4583 42.625 64.2188 43.3177 64.2188 44.2031V54H60.9062V38.7188H64.2188V40.4219C64.6979 39.8802 65.2917 39.4583 66 39.1562C66.7083 38.8542 67.5 38.7031 68.375 38.7031H67.0312Z" fill="#FDC700" />
                <path d="M82.0781 38.3125C83.8698 38.3125 85.3177 38.8021 86.4219 39.7812C87.526 40.7604 88.0781 42.0625 88.0781 43.6875C88.0781 45.3125 87.526 46.6146 86.4219 47.5938C85.3177 48.5729 83.8698 49.0625 82.0781 49.0625H78.5469V54H75.2344V38.3125H82.0781ZM78.5469 41.0469V46.3281H82.0781C83.0781 46.3281 83.849 46.0833 84.3906 45.5938C84.9323 45.1042 85.2031 44.4688 85.2031 43.6875C85.2031 42.9062 84.9323 42.2708 84.3906 41.7812C83.849 41.2917 83.0781 41.0469 82.0781 41.0469H78.5469Z" fill="#FDC700" />
                <path d="M97.2188 38.3125V41.2031H91.6875V45.0781H96.6875V47.9531H91.6875V51.1094H97.4062V54H88.375V38.3125H97.2188Z" fill="#FDC700" />
                <path d="M106.219 38.3125C108.01 38.3125 109.458 38.8021 110.562 39.7812C111.667 40.7604 112.219 42.0625 112.219 43.6875V54H108.906V44.2031C108.906 43.3177 108.667 42.625 108.188 42.125C107.708 41.625 107.031 41.375 106.156 41.375C105.281 41.375 104.604 41.625 104.125 42.125C103.646 42.625 103.406 43.3177 103.406 44.2031V54H100.094V38.7188H103.406V40.4219C103.885 39.8802 104.479 39.4583 105.188 39.1562C105.896 38.8542 106.688 38.7031 107.562 38.7031H106.219Z" fill="#FDC700" />
                <path d="M22.7656 60.3125H34.3594V63.2031H26.0781V67.0781H33.7812V69.9531H26.0781V76H22.7656V60.3125Z" fill="#FDC700" />
                <path d="M36.0625 60.3125H42.9062C44.6979 60.3125 46.1458 60.8021 47.25 61.7812C48.3542 62.7604 48.9062 64.0625 48.9062 65.6875C48.9062 67.3125 48.3542 68.6146 47.25 69.5938C46.1458 70.5729 44.6979 71.0625 42.9062 71.0625H39.375V76H36.0625V60.3125ZM39.375 63.0469V68.3281H42.9062C43.9062 68.3281 44.6771 68.0833 45.2188 67.5938C45.7604 67.1042 46.0312 66.4688 46.0312 65.6875C46.0312 64.9062 45.7604 64.2708 45.2188 63.7812C44.6771 63.2917 43.9062 63.0469 42.9062 63.0469H39.375Z" fill="#FDC700" />
                <path d="M58.0312 60.3125V63.2031H52.5V67.0781H57.5V69.9531H52.5V73.1094H58.2188V76H49.1875V60.3125H58.0312Z" fill="#FDC700" />
                <path d="M67.0312 60.3125C68.8229 60.3125 70.2708 60.8021 71.375 61.7812C72.4792 62.7604 73.0312 64.0625 73.0312 65.6875V76H69.7188V66.2031C69.7188 65.3177 69.4792 64.625 69 64.125C68.5208 63.625 67.8438 63.375 66.9688 63.375C66.0938 63.375 65.4167 63.625 64.9375 64.125C64.4583 64.625 64.2188 65.3177 64.2188 66.2031V76H60.9062V60.7188H64.2188V62.4219C64.6979 61.8802 65.2917 61.4583 66 61.1562C66.7083 60.8542 67.5 60.7031 68.375 60.7031H67.0312Z" fill="#FDC700" />
            </g>
        </svg>
    </div>';
}

/**
 * Contact Form Handler
 */
function yesmorebet_handle_contact_form() {
    check_ajax_referer('yesmorebet_nonce', 'nonce');

    $name = sanitize_text_field($_POST['name']);
    $firstname = sanitize_text_field($_POST['firstname']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    // Send email
    $to = get_option('admin_email');
    $subject = 'Nouveau message de contact - YesMoreBet';
    $body = "Nom: $name\nPrénom: $firstname\nEmail: $email\n\nMessage:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', "From: $email");

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Message envoyé avec succès'));
    } else {
        wp_send_json_error(array('message' => 'Erreur lors de l\'envoi du message'));
    }
}
add_action('wp_ajax_yesmorebet_contact', 'yesmorebet_handle_contact_form');
add_action('wp_ajax_nopriv_yesmorebet_contact', 'yesmorebet_handle_contact_form');

/**
 * Custom Menu Walker for Header
 */
class YesMoreBet_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_names . '>';

        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Add custom body classes
 */
function yesmorebet_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'yesmorebet_body_classes');
