<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'array_indentation' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'combine_consecutive_unsets' => true,
        'class_attributes_separation' => [
            'elements' => [
                'method' => 'one',
            ],
        ],
        'multiline_whitespace_before_semicolons' => false,
        'single_quote' => true,
        'binary_operator_spaces' => [
            'operators' => [
                '=>' => 'single_space',
                '=' => 'single_space',
            ],
        ],
        'blank_line_after_opening_tag' => true,
        'blank_line_before_statement' => true,
        'braces' => [
            'allow_single_line_anonymous_class_with_empty_body' => false,
            'allow_single_line_closure' => true,
            'position_after_anonymous_constructs' => 'same',
            'position_after_control_structures' => 'same',
            'position_after_functions_and_oop_constructs' => 'next',
        ],
        'cast_spaces' => [
            'space' => 'single',
        ],
        'class_definition' => [
            'multi_line_extends_each_single_line' => false,
            'single_item_single_line' => false,
            'single_line' => false,
            'space_before_parenthesis' => false,
        ],
        'compact_nullable_typehint' => true,
        'concat_space' => [
            'spacing' => 'none',
        ],
        'declare_equal_normalize' => [
            'space' => 'single',
        ],
        'function_typehint_space' => true,
        'single_line_comment_style' => [
            'comment_types' => [
                'hash',
            ],
        ],
        'include' => true,
        'increment_style' => [
            'style' => 'pre',
        ],
        'lowercase_cast' => true,
        'lowercase_static_reference' => true,
        'native_function_casing' => true,
        'new_with_braces' => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'blank_lines_before_namespace' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'square_brace_block',
                'throw',
                'use',
            ],
        ],
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => [
            'use' => 'echo',
        ],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => true,
        'no_trailing_comma_in_list_call' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unneeded_control_parentheses' => [
            'statements' => [
                'break',
                'clone',
                'continue',
                'echo_print',
                'return',
                'switch_case',
                'yield',
            ],
        ],
        'no_unused_imports' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'normalize_index_brace' => true,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements' => [
            'order' => [
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
            'sort_algorithm' => 'none',
        ],
        'ordered_imports' => [
            'sort_algorithm' => 'length',
        ],
        'php_unit_fqcn_annotation' => true,
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => true,
        ],
        'phpdoc_align' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => [
            'tags' => [
                'example',
                'id',
                'inheritdoc',
                'inheritdocs',
                'internal',
                'link',
                'source',
                'toc',
                'tutorial',
            ],
        ],
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => [
            'replacements' => [
                'link' => 'see',
                'property-read' => 'property',
                'property-write' => 'property',
                'type' => 'var',
            ],
        ],
        'phpdoc_no_empty_return' => false,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_return_self_reference' => [
            'replacements' => [
                '$self' => 'self',
                '$static' => 'static',
                '@self' => 'self',
                '@static' => 'static',
                '@this' => '$this',
                'this' => '$this',
            ],
        ],
        'phpdoc_scalar' => [
            'types' => [
                'boolean',
                'callback',
                'double',
                'integer',
                'real',
                'str',
            ],
        ],
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_to_comment' => [
            'ignored_tags' => [],
        ],
        'phpdoc_trim' => true,
        'phpdoc_types' => [
            'groups' => [
                'alias',
                'meta',
                'simple',
            ],
        ],
        'phpdoc_var_without_name' => true,
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        // 'self_accessor' => true,
        'short_scalar_cast' => true,
        'single_blank_line_at_eof' => true,
        'single_class_element_per_statement' => [
            'elements' => [
                'const',
                'property',
            ],
        ],
        'single_trait_insert_per_statement' => true,
        'space_after_semicolon' => [
            'remove_in_empty_for_expressions' => false,
        ],
        'standardize_not_equals' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline' => [
            'after_heredoc' => false,
            'elements' => ['arrays'],
        ],
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'visibility_required' => [
            'elements' => [
                'property',
                'method',
                'const',
            ],
        ],
        'whitespace_after_comma_in_array' => true,
    ])
    ->setLineEnding("\n");
