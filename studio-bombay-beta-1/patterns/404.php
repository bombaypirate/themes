<?php
/**
 * Title: 404
 * Slug: studio-bombay/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"fontSize":"custom-2"} -->
<p class="has-custom-2-font-size"><?php esc_html_e('It looks like something is off and what we were looking for was not found.', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"custom-2"} -->
<p class="has-custom-2-font-size"><?php esc_html_e('But do not lose heart, there are', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/photo-scooter-404-1024x683.jpg" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'CC0 licensed photo by %1$sNilo Velez from the WordPress Photo Directory%2$s', 'studio-bombay' ), '<a href="' . esc_url( 'https://wordpress.org/photos/photo/196639fbe2/' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"4rem"}},"fontFamily":"libre-baskerville"} -->
<p class="has-libre-baskerville-font-family" style="font-size:4rem"><?php esc_html_e('404 reasons', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"custom-2"} -->
<p class="has-custom-2-font-size"><?php esc_html_e('that all is ultimately okay! ❤️', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"36px"} -->
<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","buttonText":"Search"} /-->

<!-- wp:spacer {"height":"36px"} -->
<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"x-large"} -->
<p class="has-x-large-font-size"><?php esc_html_e('Navigate', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"><!-- wp:categories /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->