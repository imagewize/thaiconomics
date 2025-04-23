(function(wp) {
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    const { Fragment } = wp.element;
    const { InspectorControls } = wp.blockEditor;
    const { PanelBody, ToggleControl } = wp.components;
    const { createElement } = wp.element;

    // Add custom attribute to post-excerpt block
    addFilter(
        'blocks.registerBlockType',
        'thaiconomics/post-excerpt-link',
        function(settings, name) {
            if (name !== 'core/post-excerpt') {
                return settings;
            }

            return {
                ...settings,
                attributes: {
                    ...settings.attributes,
                    linkToPost: {
                        type: 'boolean',
                        default: false
                    }
                }
            };
        }
    );

    // Add control for the custom attribute
    const withInspectorControls = createHigherOrderComponent((BlockEdit) => {
        return (props) => {
            if (props.name !== 'core/post-excerpt') {
                return createElement(BlockEdit, props);
            }

            const { attributes, setAttributes } = props;
            const { linkToPost } = attributes;

            return createElement(
                Fragment,
                {},
                createElement(BlockEdit, props),
                createElement(
                    InspectorControls,
                    {},
                    createElement(
                        PanelBody,
                        { title: "Excerpt Settings" },
                        createElement(ToggleControl, {
                            label: "Link to Post",
                            checked: !!linkToPost,
                            onChange: (value) => setAttributes({ linkToPost: value })
                        })
                    )
                )
            );
        };
    }, 'withInspectorControls');

    addFilter(
        'editor.BlockEdit',
        'thaiconomics/post-excerpt-link',
        withInspectorControls
    );

    // Add custom rendering for the frontend
    addFilter(
        'blocks.getSaveElement',
        'thaiconomics/post-excerpt-link',
        function(element, blockType, attributes) {
            if (blockType.name !== 'core/post-excerpt' || !attributes.linkToPost) {
                return element;
            }
            
            // We need to wrap the excerpt with a link
            // This will be handled in PHP - we just need to pass the attribute
            return element;
        }
    );

    // Make sure the linkToPost attribute is available to PHP
    addFilter(
        'blocks.getSaveContent.extraProps',
        'thaiconomics/post-excerpt-link',
        function(extraProps, blockType, attributes) {
            if (blockType.name === 'core/post-excerpt' && attributes.linkToPost) {
                extraProps['data-link-to-post'] = 'true';
            }
            return extraProps;
        }
    );
})(window.wp);
