<?php
/**
 * Title: Single Featured Post
 * Slug: moiraine/post-single-featured
 * Description: Displays a single selected post in a featured format with image and excerpt side by side
 * Categories: moiraine/posts
 * Keywords: post, single, feature
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types:
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"tagIds":[],"post_tag":[6]},"tax":{"post_tag":[{"id":6,"name":"featured"}]}},"align":"wide","className":"featured-post-query"} -->
<div class="wp-block-query alignwide featured-post-query">
    <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default"}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%">
                    <!-- wp:post-featured-image {"isLink":true,"size":"featured-vertical","style":{"border":{"radius":"5px"}}} /-->
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small)">
                        <!-- wp:post-title {"isLink":true,"className":"is-style-post-title-no-underline","fontSize":"x-large","fontFamily":"bodoni"} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
                <div class="wp-block-column" style="flex-basis:60%">
                    <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":true,"fontSize":"large","fontFamily":"open-sans"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    <!-- /wp:post-template -->
</div>
<!-- /wp:query -->
