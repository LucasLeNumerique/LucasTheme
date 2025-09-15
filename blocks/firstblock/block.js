const { registerBlockType } = wp.blocks;
const { RichText, useBlockProps } = wp.blockEditor;

registerBlockType("lucastheme/firstblock", {
    title: "First Block",
    icon: "smiley",
    category: "layout",
    attributes: {
        content: { type: "string", source: "html", selector: "h2" }
    },

    supports: {
        html: false,
        reusable: true
    },

    edit({ attributes, setAttributes }) {
        // Ici on définit notre propre classe CSS
        const blockProps = useBlockProps({ className: "firstblock" });

        return wp.element.createElement(
            "div",
            blockProps,
            wp.element.createElement(RichText, {
                tagName: "h2",
                placeholder: "Input your title",
                value: attributes.content,
                onChange: (value) => setAttributes({ content: value })
            })
        );
    },

    save({ attributes }) {
        const blockProps = wp.blockEditor.useBlockProps.save({ className: "firstblock" });
        return wp.element.createElement(
            "div",
            blockProps,
            wp.element.createElement(RichText.Content, {
                tagName: "h2",
                value: attributes.content
            })
        );
    }
});