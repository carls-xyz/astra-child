<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/** CSS child dépend du parent */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        [ 'astra-theme-css' ],
        wp_get_theme()->get( 'Version' )
    );
}, 20 );

/** Kill tout le header Astra puis injecter le tien */
add_action( 'wp', function () {
    // Supprime toutes les callbacks déjà ajoutées au hook astra_header
    remove_all_actions( 'astra_header' );

    // Ajoute TON header
    add_action( 'astra_header', 'astra_child_header_markup' );
} );

function astra_child_header_markup() { ?>
<header class="site-header ast-container">
     <div class="header-grid">
        <div class="header-col">
            <H1>MON PORTFOLIO</H1>
        </div>
        <div class="header-col">
            <nav class="header-nav">
                <ul class="header-links">
                    <li><a href="/Acceuil">Acceuil</a></li>
                    <li><a href="/A propos">A propos</a></li>
                    <li><a href="/Projets">Projets</a></li>
                    <li><a href="/Contact">Contact</a></li>
                </ul>
</header>
<?php }


/** Kill tout le footer Astra puis injecter le tien */
add_action( 'wp', function () {
    // Supprime toutes les callbacks déjà ajoutées au hook astra_footer
    remove_all_actions( 'astra_footer' );

    // Ajoute TON footer
    add_action( 'astra_footer', 'astra_child_footer_markup' );
} );


function astra_child_footer_markup() { ?>
    
    <footer class="site-footer ast-container">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Liens</h4>
                <ul class="footer-links">
                    <li><a href="/Acceuil">Acceuil</a></li>
                    <li><a href="/A propos">A propos</a></li>
                    <li><a href="/Projets">Projets</a></li>
                    <li><a href="/Contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <p>
                    <a href="https://github.com/carls-eth" target="_blank" rel="noopener">Github</a> 
                </p>
                <p class="copy">© <?php echo date('Y'); ?> — Mon Entreprise</p>
            </div>
        </div>
    </footer>
<?php }