<?php
/**
 *
 * Kiesvoorjezorg preset.
 *
 * @author Fons Eppink <fons@branchonline.nl>
 */
return [
    'height' => 400,
    'extraPlugins' => 'oembed,widget',
    'allowedContent' => true,
    'toolbar' => [
        ['Source', 'Styles', 'Format', 'FontSize'],
        [ 'Link', 'Unlink', 'Anchor', 'oembed'],
        ['Bold', 'Italic', 'Underline', 'Strike'],
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'],
        [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
     ]
];
