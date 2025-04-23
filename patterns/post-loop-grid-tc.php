<?php
/**
 * Title: Post Loop Grid Thaiconomics
 * Slug: moiraine/post-loop-grid-tc
 * Description: This post loop grid is best used on index and archive pages where the loop can inherit the query from the page.
 * Categories: moiraine/posts
 * Keywords: blog, posts, query, loop
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types:
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide">
    <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"0","right":"0","bottom":"var:preset|spacing|large","left":"0"}},"border":{"radius":"5px"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
        <div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0">
            <!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"5px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"1.5rem"},"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
            <div class="wp-block-group has-secondary-color has-text-color has-link-color has-x-small-font-size" style="margin-top:1.5rem;padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
                <!-- wp:post-date {"fontFamily":"bodoni"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
                <!-- wp:post-title {"isLink":true,"className":"is-style-post-title-no-underline","fontSize":"medium","fontFamily":"bodoni"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->
        <!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
    <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->