<?php
/**
 * Title: index
 * Slug: studio-bombay/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"shadow":"12px 12px 50px rgba(0, 0, 0, 0.4)","border":{"radius":"15px","width":"0px","style":"none"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px;border-radius:15px;min-height:0px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:12px 12px 50px rgba(0, 0, 0, 0.4)"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"},"blockGap":{"left":"0"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"fontSize":"medium"} -->
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

<!-- wp:column {"style":{"typography":{"fontSize":"1em"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);font-size:1em"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-ball-point-blue"}}}},"textColor":"custom-ball-point-blue"} -->
<h2 class="wp-block-heading has-custom-ball-point-blue-color has-text-color has-link-color"><?php esc_html_e('Latest Posts', 'studio-bombay');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":56,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-typewriter-ink"}}},"typography":{"fontSize":"1em"}},"textColor":"custom-typewriter-ink","fontFamily":"tirto-writter"} /-->

<!-- wp:post-date /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('', 'studio-bombay');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Quote"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"custom-typewriter-ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-custom-typewriter-ink-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:pullquote {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-blanched-almond"}}}},"textColor":"custom-blanched-almond"} -->
<figure class="wp-block-pullquote has-custom-blanched-almond-color has-text-color has-link-color"><blockquote><p><?php esc_html_e('Do everything by hand, even when using the computer.', 'studio-bombay');?></p><cite><?php esc_html_e('Hayao Miyazaki', 'studio-bombay');?></cite></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php esc_html_e('', 'studio-bombay');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5rem"} -->
<div style="height:5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-bottom:0"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Navigate', 'studio-bombay');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"width":"0.3rem"}},"borderColor":"custom-ball-point-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-custom-ball-point-blue-border-color" style="border-width:0.3rem;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Category', 'studio-bombay');?></h3>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Year published', 'studio-bombay');?></h3>
<!-- /wp:heading -->

<!-- wp:archives {"type":"yearly"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5rem"} -->
<div style="height:5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"layout":{"columnSpan":3,"rowSpan":1}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"3rem"} -->
<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Search and Discover', 'studio-bombay');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"3rem"} -->
<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","align":"center","style":{"border":{"radius":"20px","width":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-typewriter-ink"}}},"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"}}},"backgroundColor":"custom-blanched-almond","textColor":"custom-typewriter-ink","fontSize":"medium","borderColor":"custom-ball-point-blue"} /-->

<!-- wp:spacer {"height":"5rem"} -->
<div style="height:5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->