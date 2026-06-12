<?php
/**
 * Title: 404
 * Slug: im-h25/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="min-height:50vh;margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"10px"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"33.33%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"name":"Sidebar Author"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Caput"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.02rem"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.02rem;text-transform:uppercase"><?php esc_html_e('That\'s a 404.', 'im-h25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"6.33%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:6.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1"}},"fontSize":"display"} -->
<h2 class="wp-block-heading has-text-align-left has-display-font-size" id="oops" style="line-height:1"><?php esc_html_e('Page Not Found.', 'im-h25');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30","metadata":{"name":"XS"}} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Search Block"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Please try a new search or explore my content using tags.', 'im-h25');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":" ","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"2px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:tag-cloud {"numberOfTags":40,"showTagCounts":true,"largestFontSize":"16.1pt"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->