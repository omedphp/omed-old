<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['var', 'build']);

$header = <<<'HEADER'
This file is part of the Omed project.

(c) Anthonius Munthi <https://itstoni.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
HEADER;

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@DoctrineAnnotation' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        '@PHPUnit60Migration:risky' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'align_multiline_comment' => [
            'comment_type' => 'phpdocs_like',
        ],
        'binary_operator_spaces' => [
            'operators' => [
                '=' => 'align',
            ],
        ],
        'not_operator_with_space' => true,
        'no_spaces_inside_parenthesis' => true,
        'array_indentation' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'comment_to_phpdoc' => true,
        'compact_nullable_typehint' => true,
        'doctrine_annotation_array_assignment' => [
            'operator' => '=',
        ],
        'doctrine_annotation_spaces' => [
            'after_array_assignments_equals' => false,
            'before_array_assignments_equals' => false,
        ],
        'explicit_indirect_variable' => true,
        'fully_qualified_strict_types' => true,
        'header_comment' => [
            'header' => $header,
            'location' => 'after_open',
        ],
        'logical_operators' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'no_alternative_syntax' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'break',
                'continue',
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'throw',
                'use',
            ],
        ],
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => false,
        'no_unset_cast' => true,
        'no_unset_on_property' => true,
        'no_useless_else' => true,
        'no_useless_return' => false,
        'ordered_imports' => [
            'imports_order' => [
                'class',
                'function',
                'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'php_unit_method_casing' => [
            'case' => 'snake_case',
        ],
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_test_annotation' => [
            'style' => 'prefix',
        ],
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => true,
        ],
        'phpdoc_order' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_var_annotation_correct_order' => true,
        'return_assignment' => true,
        'strict_param' => true,
        'visibility_required' => [
            'elements' => [
                'const',
                'method',
                'property',
            ],
        ],
        'void_return' => false, // BC breaks; to be done in API Platform 3.0
    ])
    ->setFinder($finder);
