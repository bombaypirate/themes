<?php
/**
 * Title: footer
 * Slug: studio-bombay/footer
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white-smoke"}}},"shadow":"6px 6px 9px rgba(0, 0, 0, 0.2)"},"backgroundColor":"custom-dark-slate","textColor":"custom-white-smoke","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-custom-white-smoke-color has-custom-dark-slate-background-color has-text-color has-background has-link-color" style="box-shadow:6px 6px 9px rgba(0, 0, 0, 0.2)"><!-- wp:spacer {"height":"3rem"} -->
<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","backgroundColor":"custom-dark-slate","fontSize":"small"} -->
<div class="wp-block-columns alignwide has-custom-dark-slate-background-color has-background has-small-font-size"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"custom-1","fontFamily":"libre-baskerville"} -->
<p class="has-text-align-center has-libre-baskerville-font-family has-custom-1-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sAbout Studio Bombay%2$s', 'studio-bombay' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size"><?php esc_html_e('This is Studio Bombay. The theme made after consuming a lot of Studio Ghibli movies and art work.', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"custom-1"} -->
<p class="has-custom-1-font-size"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'It is a full site editor theme, and currently on version 1.0 (beta).%1$s', 'studio-bombay' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"custom-1","fontFamily":"libre-baskerville"} -->
<p class="has-text-align-center has-libre-baskerville-font-family has-custom-1-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sCategories%2$s', 'studio-bombay' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:categories {"fontSize":"custom-1"} /-->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"custom-1","fontFamily":"libre-baskerville"} -->
<p class="has-text-align-center has-libre-baskerville-font-family has-custom-1-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( '%1$sSocials%2$s', 'studio-bombay' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"size":"has-large-icon-size"} -->
<ul class="wp-block-social-links has-large-icon-size"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"x"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"github"} /-->

<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://whatsapp.com","service":"whatsapp"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:spacer {"height":"24px"} -->
<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( ' Proudly powered by %1$sWordPress%2$s ', 'studio-bombay' ), '<a rel="nofollow" href="' . esc_url( 'https://wordpress.org' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->