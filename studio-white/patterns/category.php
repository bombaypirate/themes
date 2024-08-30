<?php
/**
 * Title: category
 * Slug: studio-bombay/category
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"margin":{"top":"-4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:-4rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/studio-bombay-featured-image-insert.png" alt="<?php esc_html_e('', 'studio-bombay');?>" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"25px","bottom":"25px"}},"shadow":"12px 12px 50px rgba(0, 0, 0, 0.4)","border":{"radius":"15px","width":"0px","style":"none"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained","contentSize":"","wideSize":""}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px;border-radius:15px;min-height:0px;margin-top:25px;margin-bottom:25px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);box-shadow:12px 12px 50px rgba(0, 0, 0, 0.4)"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"},"blockGap":{"left":"0"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"style":{"typography":{"fontSize":"1em"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50);font-size:1em"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-ball-point-blue"}}}},"textColor":"custom-ball-point-blue"} -->
<h2 class="wp-block-heading has-custom-ball-point-blue-color has-text-color has-link-color"><?php esc_html_e('Latest Posts', 'studio-bombay');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":56,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-typewriter-ink"}}}},"textColor":"custom-typewriter-ink","fontFamily":"tirto-writter"} /-->

<!-- wp:post-excerpt /-->

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

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->