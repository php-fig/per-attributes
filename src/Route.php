<?php

declare(strict_types=1);

namespace Fig\Attributes;

use Attribute;

/**
 * Indicates the HTTP endpoint(s) associated with the class, method, or action.
 *
 * ## Target audience.
 *
 * Implementors: Static analysis tools, API documentation generators
 * Users: Developers defining controller actions or classes handling HTTP requests
 */
#[Attribute(Attribute::TARGET_CLASS)]
final class Route
{
    /** @var string[] HTTP methods like GET, POST, PUT, DELETE */
    public array $methods;

    /** @var string Path relative to the application root */
    public string $path;

    /**
     * @param string|string[] $methods HTTP method(s)
     * @param string $path Endpoint path
     */
    public function __construct(string|array $methods, string $path)
    {
        $this->methods = is_array($methods) ? $methods : [$methods];
        $this->path = $path;
    }
}
