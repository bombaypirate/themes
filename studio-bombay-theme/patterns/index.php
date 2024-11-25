<?php
/**
 * Title: index
 * Slug: studio-bombay/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"border":{"radius":"25px"},"shadow":"var:preset|shadow|deep"}} -->
<div class="wp-block-columns" style="border-radius:25px;box-shadow:var(--wp--preset--shadow--deep)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"1rem","bottom":"1rem"}}}} -->
<div class="wp-block-column" style="padding-top:1rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('Hello!', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('This is Studio Bombay. The theme made after consuming a lot of Studio Ghibli movies and art work.', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('This theme is a great one for bloggers and profile website makers alike.', 'studio-bombay');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('It is a full site editor theme, and currently on version 1.0 (beta).', 'studio-bombay');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"1rem","bottom":"1rem"}}}} -->
<div class="wp-block-column" style="padding-top:1rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:1rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"fontSize":"medium"} -->
<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Latest Posts', 'studio-bombay');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":18,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"3rem"} -->
<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pullquote {"align":"full"} -->
<figure class="wp-block-pullquote alignfull"><blockquote><p><?php esc_html_e('Do everything by hand, even when using the computer.&lt;br&gt;', 'studio-bombay');?></p><cite><?php esc_html_e('Hayao Miyazaki', 'studio-bombay');?></cite></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:spacer {"height":"3rem"} -->
<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","align":"center","style":{"spacing":{"margin":{"right":"0","left":"0"}},"border":{"radius":"20px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer-background"} /-->