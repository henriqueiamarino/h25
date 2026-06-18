<?php
/**
 * Title: home
 * Slug: h25/home
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"wide","backgroundColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-contrast-background-color has-background"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:spacer {"height":"2.5vh","metadata":{"name":"2.5VH"}} -->
<div style="height:2.5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blog Sticky"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"anchor":"latest-posts"} -->
<div class="wp-block-group alignwide" id="latest-posts" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[]},"metadata":{"name":"QL Sticky"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}},"backgroundColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert has-contrast-background-color has-background" style="border-top-left-radius:4px;border-top-right-radius:4px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"1px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-bottom:0;flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"4px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":1,"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-large"} /-->

<!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}}} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('More', 'h25');?>","showMoreOnNewLine":false,"excerptLength":35,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blog"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"anchor":"latest-posts"} -->
<div class="wp-block-group alignwide" id="latest-posts" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[],"taxQuery":{"exclude":{"category":[1124]}}},"metadata":{"name":"QL Columns"},"align":"wide","className":"ql-stretch","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ql-stretch"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert" style="border-radius:8px;min-height:100%"><!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"large"} /-->

<!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}}} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('More', 'h25');?>","showMoreOnNewLine":false,"excerptLength":25,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"metadata":{"name":"QL More"},"className":"hover-invert","style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group hover-invert has-base-background-color has-background" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;min-height:100%;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"metadata":{"name":"Plus"},"className":"no-underline","style":{"typography":{"lineHeight":"1","textAlign":"center"}},"fontSize":"display"} -->
<p class="has-text-align-center no-underline has-display-font-size" style="line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$s+%2$s', 'h25' ), '<a href="' . esc_url( '/category/blog/' ) . '" data-type="page" data-id="3811">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Special"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"anchor":"special"} -->
<div class="wp-block-group alignwide" id="special" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Section Title"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"style":{"typography":{"letterSpacing":"0rem","lineHeight":"1.5"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="letter-spacing:0rem;line-height:1.5"><?php esc_html_e('Special: Long Live Football', 'h25');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"parents":[],"taxQuery":{"include":{"category":[1124]}}},"metadata":{"name":"QL Columns"},"align":"wide","className":"ql-stretch","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ql-stretch"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert" style="border-radius:8px;min-height:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} /-->

<!-- wp:group {"metadata":{"name":"Date and stats"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Most Readed"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"anchor":"most-read"} -->
<div class="wp-block-group alignwide" id="most-read" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Section Title"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"style":{"typography":{"letterSpacing":"0rem","lineHeight":"1.5"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="letter-spacing:0rem;line-height:1.5"><?php esc_html_e('Most Read Stories', 'h25');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[]},"metadata":{"name":"QL Columns"},"align":"wide","className":"ql-stretch","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ql-stretch"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert" style="border-radius:8px;min-height:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} /-->

<!-- wp:group {"metadata":{"name":"Date and stats"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Work"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"},"anchor":"themes"} -->
<div class="wp-block-group alignwide" id="themes" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"category":[466]}}},"metadata":{"name":"Themes 1"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"},"border":{"radius":"1px"}}} /-->

<!-- wp:group {"metadata":{"name":"Info wrapper"},"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"letterSpacing":"0.02rem"}},"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"textTransform":"lowercase","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"category":[466]}}},"metadata":{"name":"Themes 2"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"},"border":{"radius":"1px"}}} /-->

<!-- wp:group {"metadata":{"name":"Info wrapper"},"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"letterSpacing":"0.02rem"}},"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"textTransform":"lowercase","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"8","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"category":[466]}}},"metadata":{"name":"Themes 3"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"},"border":{"radius":"1px"}}} /-->

<!-- wp:group {"metadata":{"name":"Info wrapper"},"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"letterSpacing":"0.02rem"}},"fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"textTransform":"lowercase","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Readings"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"},"anchor":"readings"} -->
<div class="wp-block-group alignwide" id="readings" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Section Title"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Title Row"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"style":{"typography":{"letterSpacing":"0rem","lineHeight":"1.5"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="letter-spacing:0rem;line-height:1.5"><?php esc_html_e('Readings', 'h25');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'After loving a book, I design its covers to make it forever mine. %1$sMore%2$s.', 'h25' ), '<a href="' . esc_url( 'https://iamarino.com/books/' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.67rem","width":"0px","metadata":{"name":"XS"},"style":{"layout":[]}} -->
<div style="height:0.67rem;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":10,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"category":[313]}}},"metadata":{"name":"Books Fiction"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"color":{"duotone":"unset"}}} /-->

<!-- wp:group {"metadata":{"name":"Info wrapper"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"className":"no-underline","style":{"typography":{"textTransform":"none","letterSpacing":"0.02rem"}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":10,"style":{"typography":{"letterSpacing":"0.02rem"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":10,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[],"taxQuery":{"include":{"category":[312]}}},"metadata":{"name":"Books Nonfiction"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"color":{"duotone":"unset"}}} /-->

<!-- wp:group {"metadata":{"name":"Info wrapper"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"className":"no-underline","style":{"typography":{"textTransform":"none","letterSpacing":"0.02rem"}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":10,"style":{"typography":{"letterSpacing":"0.02rem"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->