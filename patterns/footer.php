<?php
/**
 * Title: footer
 * Slug: im-h25/footer
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"8vh","metadata":{"name":"8VH"}} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Footer Menu Wrapper"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20","padding":{"top":"1px","bottom":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:1px;padding-bottom:1px"><!-- wp:group {"metadata":{"name":"Header Columns"},"align":"wide","style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":80,"isDark":false,"metadata":{"name":"Site Logo"},"className":"tint-cover","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"4px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light tint-cover" style="border-radius:4px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:80px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:site-logo {"width":96,"shouldSyncIcon":true,"style":{"color":{"duotone":"var:preset|duotone|duotone-default"}}} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Stacked Rows"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"1px"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"metadata":{"name":"Stacked block"},"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"layout":{"selfStretch":"fill","flexSize":null},"border":{"radius":"4px"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"horizontal","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Stacked block"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"metadata":{"name":"Tagline mobile"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.02rem","lineHeight":"1","textAlign":"center"}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.02rem;line-height:1;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s.', 'im-h25' ), '<a href="' . esc_url( 'https://wordpress.org/' ) . '" target="_blank" rel="noreferrer noopener">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Arrow"},"className":"no-underline","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1","textAlign":"center"}},"fontSize":"x-small"} -->
<p class="has-text-align-center no-underline has-x-small-font-size" style="font-style:normal;font-weight:600;line-height:1;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$s↑%2$s', 'im-h25' ), '<a href="' . esc_url( '#Header' ) . '" data-type="internal" data-id="#Header">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Footer cover"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cover-cormayer.png","dimRatio":20,"overlayColor":"contrast","isUserOverlayColor":true,"focalPoint":{"x":0.75,"y":0.75},"minHeight":40,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"sizeSlug":"full","align":"full","className":"tint-cover hover-invert","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"duotone":"unset"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light tint-cover hover-invert" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:40vh"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cover-cormayer.png" style="object-position:75% 75%" data-object-fit="cover" data-object-position="75% 75%"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…"} -->
<p></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->