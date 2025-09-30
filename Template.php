<?php

declare(strict_types=1);

namespace Fig\Attributes;

/**
 * One-Line summary of what the attribute does
 *
 * ## Target audience
 *
 * Implementors
 * : Who should handle this attribute? Example: "static analysis tools"
 * Users
 * : Who adds this attribute to their code? Example: "packages that want to
 *   safeguard their functions via static analysis
 *
 * Long explanation of what the attribute does and why it is relevant.
 *
 * Use citations[^citation] or [Links](https://example.com) in your text to make
 * sure people understand the relevance and where you got your ideas from.
 *
 * If your Attribute has preconditions for usage you MUST use the keywords
 * described in [RFC 2119](https://datatracker.ietf.org/doc/html/rfc2119).
 * You SHOULD list them prominently.
 *
 * **Note:** DocBlock content MUST be Markdown formatted. Check out the
 *   [Markdown-Guide](https://www.markdownguide.org/) for possible formatting
 *
 * Please also use code-snippets where appropriate
 *
 * ```php
 *     <?php
 *     echo 'Hello World';
 * ```
 *
 * You MUST describe parameters to your Attribute extensively! You SHOULD use
 * the well-known Annotations for that
 *
 * @param string $example_1 Does x and y
 * @param boolean $example_2
 *
 * [^citation] https://en.wikipedia.org/wiki/Citation
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class Template {}
