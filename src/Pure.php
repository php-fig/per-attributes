<?php

declare(strict_types=1);

namespace Fig\Attributes;

/**
 * Indicates that a function or method is a "pure" function.
 *
 * A pure function is a function or method that has the following properties:
 *
 * 1. The function return values are identical for identical arguments (no variation with local static variables,
 *    non-local variables, mutable reference arguments or input streams, i.e., referential transparency).
 * 2. The function has no side effects (no mutation of non-local variables, mutable reference
 *    arguments or input/output streams).
 *
 * In PHP, that means a pure function MUST NOT:
 *
 * 1. Use or modify any global variable.
 * 2. Perform any IO operations, even read-only ones.
 * 3. Modify any property of an object provided to it as an argument, even transitively.
 * 4. Read from an object property on the same object unless that property is `readonly`.
 * 5. Call any function that is not also marked "pure." (It may invoke a callable passed to it as an explicit argument.)
 *
 * Many functions in the PHP standard library are already pure.  Implementers MUST treat those as acceptable to call
 * from a pure function.
 *
 * Implementers MAY choose to implement optimizations based on the information that a function is pure, such as caching.
 *
 * If this attribute is placed on a method in an interface, it means that all implementations of that method MUST
 * themselves be marked pure.  Implementers MUST enforce this rule.
 */
#[\Attribute(\Attribute::TARGET_FUNCTION | \Attribute::TARGET_METHOD)]
class Pure {}
