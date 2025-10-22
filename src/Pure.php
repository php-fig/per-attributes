<?php

declare(strict_types=1);

namespace Fig\Attributes;

/**
 * Indicates that a function or method is a "pure" function.
 *
 * ## Target audience
 *
 * Implementors
 * - Static analysis tooling
 * - Code compilation and optimization tooling (such as for compiled containers
 *  or event dispatchers, etc.)
 * Users
 * - Users who want their static analysis tools to double-check their use of
 *   pure functions.
 *
 * ## Purpose
 *
 * A pure function is a function or method that has the following properties,
 * per [Wikipedia](https://en.wikipedia.org/wiki/Pure_function):
 *
 * 1. The function return values are identical for identical arguments
 *    (no variation with local static variables, non-local variables, mutable
 *    reference arguments or input streams, i.e., referential transparency).
 * 2. The function has no side effects (no mutation of non-local variables,
 *    mutable reference arguments or input/output streams).
 *
 * In PHP, that means a pure function MUST NOT:
 *
 * 1. Use or modify any global variable.
 * 2. Perform any IO operations, even read-only ones.
 * 3. Modify any property of an object provided to it as an argument,
 *    even transitively.
 * 4. Read from an object property on the same object unless that property
 *    is `readonly`.
 * 5. Accept a parameter by reference.
 * 6. Call any function that is not also marked "pure." (It may invoke a
 *    callable passed to it as an explicit argument.)
 *
 * ## When should the attribute be applied
 *
 * When a user marks a function or method as pure, it means they are asserting
 * that the function conforms to the rules above.
 *
 *  If this attribute is placed on a method in an interface, it means that all
 *  implementations of that method MUST themselves be marked pure.
 *
 * Static analysis tools SHOULD
 * - Verify that the function indeed meets the rules above, and treat it as
 *    an error if not.
 *
 * Static analysis tools MUST
 * - Treat PHP standard library functions that conform to these rules as pure.
 *    As an example, `strtolower()` is pure.  `sort()` is not.
 * - Flag as an error any function that is marked pure but is demonstrably not.
 * - Treat any method implementing an interface method marked pure as pure.
 *
 * Optimization tools and pre-compilation tools MAY:
 * - Implement optimizations based on the knowledge that a function is pure.
 *   For example, they may safely cache its results indefinitely, or inline its
 *   code into another routine.
 *
 */
#[\Attribute(\Attribute::TARGET_FUNCTION | \Attribute::TARGET_METHOD)]
class Pure {}
