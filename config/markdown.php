<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use League\CommonMark\MarkdownConverter;

return [
    /*
    |--------------------------------------------------------------------------
    | Converter
    |--------------------------------------------------------------------------
    |
    | This option specifies the converter to be used as the base for extension.
    |
    */

    'converter' => MarkdownConverter::class,

    /*
    |--------------------------------------------------------------------------
    | CommonMark Extensions
    |--------------------------------------------------------------------------
    |
    | This option specifies what extensions will be automatically enabled.
    | Simply provide your extension class names here.
    |
    */

    'extensions' => [
        League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension::class,
        League\CommonMark\Extension\Table\TableExtension::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment Configuration
    |--------------------------------------------------------------------------
    |
    | This option specifies an array of options for the CommonMark environment.
    |
    */

    'environment' => [
        /*
        |--------------------------------------------------------------------------
        | Renderer Configuration
        |--------------------------------------------------------------------------
        |
        | This option specifies an array of options for rendering HTML.
        |
        */

        'renderer' => [
            'block_separator' => "\n",
            'inner_separator' => "\n",
            'soft_break' => "\n",
        ],

        /*
        |--------------------------------------------------------------------------
        | CommonMark Configuration
        |--------------------------------------------------------------------------
        |
        | This option specifies an array of options for commonmark.
        |
        */

        'commonmark' => [
            'enable_em' => true,
            'enable_strong' => true,
            'use_asterisk' => true,
            'use_underscore' => true,
            'unordered_list_markers' => ['-', '+', '*'],
        ],

        /*
        |--------------------------------------------------------------------------
        | HTML Input
        |--------------------------------------------------------------------------
        |
        | This option specifies how to handle untrusted HTML input.
        |
        */

        'html_input' => 'strip',

        /*
        |--------------------------------------------------------------------------
        | Allow Unsafe Links
        |--------------------------------------------------------------------------
        |
        | This option specifies whether to allow risky image URLs and links.
        |
        */

        'allow_unsafe_links' => true,

        /*
        |--------------------------------------------------------------------------
        | Maximum Nesting Level
        |--------------------------------------------------------------------------
        |
        | This option specifies the maximum permitted block nesting level.
        |
        */

        'max_nesting_level' => \PHP_INT_MAX,

        /*
        |--------------------------------------------------------------------------
        | Slug Normalizer
        |--------------------------------------------------------------------------
        |
        | This option specifies an array of options for slug normalization.
        |
        */

        'slug_normalizer' => [
            'max_length' => 255,
            'unique' => 'document',
        ],
    ],
];
