<?php
/**
 * Title: single
 * Slug: h25/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="min-height:50vh;margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"10px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"34.66%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:34.66%"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"Section title"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"0.22rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-time-to-read {"fontFamily":"manrope"} /-->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.02rem"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="letter-spacing:0.02rem;text-transform:uppercase"><?php esc_html_e('to read', 'h25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"},"style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Content wrapper"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"><!-- wp:post-content {"lock":{"move":false,"remove":false},"metadata":{"ignoredHookedBlocks":["activitypub/reactions"]},"layout":{"type":"constrained"}} /-->

<!-- wp:activitypub/reactions {"className":"is-style-facepile"} -->
<div class="wp-block-activitypub-reactions is-style-facepile"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e('Fediverse reactions', 'h25');?></h6>
<!-- /wp:heading --></div>
<!-- /wp:activitypub/reactions -->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Share and Likes"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Author Wrapper"},"style":{"spacing":{"blockGap":"1em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":64,"isLink":true,"linkTarget":"_blank","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"color":{"duotone":"var:preset|duotone|duotone-default"}}} /-->

<!-- wp:group {"metadata":{"name":"Author, Categories and Bio"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Author and Categories"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('By', 'h25');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontSize":"1em"}}} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e('in', 'h25');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"typography":{"letterSpacing":"0rem","textDecoration":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-author-biography {"style":{"typography":{"fontSize":"0.7em"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Share and Like"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:jetpack/sharing-buttons {"styleType":"text","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"0","bottom":"12px"}}},"layout":{"type":"flex"}} -->
<ul class="wp-block-jetpack-sharing-buttons has-small-icon-size jetpack-sharing-buttons__services-list" style="margin-top:0;margin-bottom:12px" id="jetpack-sharing-serivces-list"><!-- wp:jetpack/sharing-button {"service":"bluesky","label":"Bluesky"} /-->

<!-- wp:jetpack/sharing-button {"service":"x","label":"X"} /-->

<!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /--></ul>
<!-- /wp:jetpack/sharing-buttons -->

<!-- wp:jetpack/like /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","prefix":"# ","style":{"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2.5vh","metadata":{"name":"5VH"}} -->
<div style="height:2.5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"comments","area":"uncategorized"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->