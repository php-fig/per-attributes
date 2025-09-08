<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->name(__FILE__)
    ->exclude([
        'build',
    ])
;

$config = new PhpCsFixer\Config();

$config
    ->setFinder($finder)
    ->setCacheFile('build/php-cs-fixer.cache')
    ->setLineEnding("\n")
    ->setRiskyAllowed(true)
    ->setRules([
        '@PER-CS' => true,
        'ordered_imports' => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'alpha'],
        'void_return' => true,
        'array_syntax' => ['syntax' => 'short'],

        // apply stricter whitespace rules
        'array_indentation' => true,
        'binary_operator_spaces' => true,
        'cast_spaces' => true,
        'concat_space' => ['spacing' => 'one'],
        'function_declaration' => ['closure_fn_spacing' => 'none'],
        'method_argument_space' => true,
        'no_extra_blank_lines' => true,
        'no_spaces_around_offset' => true,
        'no_trailing_whitespace_in_string' => true,
        'no_whitespace_before_comma_in_array' => true,
        'object_operator_without_whitespace' => true,
        'trim_array_spaces' => true,
        'type_declaration_spaces' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
    ]);

return $config;
