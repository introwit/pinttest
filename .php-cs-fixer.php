<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude(['.github', 'app/Nova', 'bootstrap', 'config', 'database/migrations', 'nova', 'storage'])
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        'array_syntax' => ['syntax' => 'short'],
        'combine_consecutive_unsets' => true,
        'multiline_whitespace_before_semicolons' => false,
        'single_quote' => true,
        'blank_line_before_statement' => ['statements' => ['return']],
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'concat_space' => ['spacing' => 'one'],
        'declare_equal_normalize' => true,
        'function_typehint_space' => true,
        'single_line_comment_style' => ['comment_types' => ['hash']],
        'include' => true,
        'lowercase_cast' => true,
        'no_extra_blank_lines' => ['tokens' => [
            'curly_brace_block',
            'extra',
            'parenthesis_brace_block',
            'square_brace_block',
            'throw',
            'use',
        ]],
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_unused_imports' => true,
        'no_whitespace_before_comma_in_array' => true,
        'no_whitespace_in_blank_line' => true,
        'object_operator_without_whitespace' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha'
        ],
        'single_blank_line_before_namespace' => true,
        'ternary_operator_spaces' => true,
        'trim_array_spaces' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
        'group_import' => true,
    ])
    ->setLineEnding("\n")
    ->setFinder($finder)
;
