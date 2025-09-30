<?php

declare(strict_types=1);

namespace Fig\Attributes;

/**
 * One-Line summary of what the attribute does (PLAIN TEXT!)
 *
 * ## Target audience
 *
 * Implementors
 * : Who should handle this attribute? Example: "static analysis tools"
 * Users
 * : Who adds this attribute to their code? Example: "packages that want to
 *   safeguard their functions via static analysis"
 *
 * ## Purpose
 *
 * Long explanation of what the attribute does and why it is relevant.
 *
 * Use citations[^citation] or [Links](https://example.com) in your text to make
 * sure people understand the relevance and where you got your ideas from.
 *
 * ## When should the attribute be applied ?
 *
 * If your Attribute has preconditions for usage you MUST use the keywords
 * described in [RFC 2119](https://datatracker.ietf.org/doc/html/rfc2119).
 * You SHOULD list them prominently.
 *
 * **Note:** DocBlock content MUST be Markdown formatted. Check out the
 *   [Markdown-Guide](https://www.markdownguide.org/) for possible formatting
 *   and keep in mind that the short description should not contain markdown.
 *
 * Keep your lines at a maximum of 80 Characters. It increases readability on
 * smaller windows.
 *
 * Please also use code-snippets where appropriate
 *
 * ```php
 * <?php
 * echo 'Hello World';
 * ```
 *
 * [^citation] https://en.wikipedia.org/wiki/Citation
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Template
{
    /**
     * You MUST describe parameters to your Attribute extensively! You SHOULD use
     * the well-known Annotations for that.
     *
     * Also, you SHOULD describe what the different functions do.
     *
     * @param string $name
     *     The name of this template
     * @param boolean $expose
     *     Whether to expose this as an example or not.
     * @param int[] $luckyNumbers
     *     The lucky numbers of this week
     */
    public function __construct(
        public readonly string $name,
        public readonly bool $expose,
        public readonly array $luckyNumbers
    ) {}
}
