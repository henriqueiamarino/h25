<?php
/**
 * Title: Book Review
 * Slug: im-h25/book-review
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="min-height:50vh;margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"10px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:post-featured-image {"aspectRatio":"3/4","style":{"color":{"duotone":"unset"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"6.33%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:6.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"Section title"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"key":"date"}}}},"style":{"typography":{"textTransform":"uppercase"}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"},"style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Content wrapper"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /-->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Share and Likes"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Like"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<h3 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('Liked it?', 'im-h25');?></h3>
<!-- /wp:heading -->

<!-- wp:jetpack/like /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Share"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<h3 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('Share', 'im-h25');?></h3>
<!-- /wp:heading -->

<!-- wp:jetpack/sharing-buttons {"styleType":"text","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"0"}}},"layout":{"type":"flex"}} -->
<ul class="wp-block-jetpack-sharing-buttons has-small-icon-size jetpack-sharing-buttons__services-list" id="jetpack-sharing-serivces-list">
<!-- wp:jetpack/sharing-button {"service":"bluesky","label":"Bluesky"} /-->
<!-- wp:jetpack/sharing-button {"service":"x","label":"X"} /-->
<!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /-->
</ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
<h3 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('Written by.', 'im-h25');?></h3>
<!-- /wp:heading -->

<!-- wp:post-author {"showBio":true,"byline":""} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Tags"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"600","lineHeight":"1.5"}},"fontSize":"x-small"} -->
<h3 class="wp-block-heading has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.025rem;line-height:1.5;text-transform:uppercase"><?php esc_html_e('Posted in.', 'im-h25');?></h3>
<!-- /wp:heading -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"post_tag","prefix":"# ","style":{"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2vh","metadata":{"name":"2VH"}} -->
<div style="height:2vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"comments","area":"uncategorized"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->