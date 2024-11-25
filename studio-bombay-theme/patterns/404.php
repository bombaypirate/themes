<?php
/**
 * Title: 404
 * Slug: studio-bombay/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem","left":"1rem"},"margin":{"top":"1rem","bottom":"1rem"}}},"backgroundColor":"custom-wheat","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-wheat-background-color has-background" style="margin-top:1rem;margin-bottom:1rem;padding-right:1rem;padding-left:1rem"><!-- wp:image {"width":"800px","height":"auto","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/scooter-alleyway-1024x683.jpg" alt="" style="width:800px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php esc_html_e('<em><a href="https://creativecommons.org/share-your-work/public-domain/cc0/">CC0</a>&nbsp;licensed&nbsp;<a href="https://wordpress.org/photos/photo/196639fbe2/">photo</a>&nbsp;by&nbsp;<a href="https://wordpress.org/photos/author/nilovelez/">Nilo Velez</a>&nbsp;from the&nbsp;<a href="https://wordpress.org/photos/">WordPress Photo Directory</a>.</em>', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('It looks like something is off and what we were looking for was not found.', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('But do not lose heart, there are', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"6rem"}}} -->
<p style="font-size:6rem"><?php esc_html_e('404 reasons', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('that all is ultimately okay.', 'studio-bombay');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->