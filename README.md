# PHP Evolving Recommendation - Attributes

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

This package contains PHP attribute definitions published by the PHP Framework Interoperability Group (PHP-FIG).  They are intended to have widespread applicability across the PHP ecosystem.

Any attribute proposed must be approved by a majority of the working group, and in some cases by the PHP-FIG Core Committee.  Any submitted attribute must follow these guidelines:

* It MUST have applicability and relevance for more than one project or application.
* It SHOULD have two or more projects to which the attribute would be relevant that state their intent to use it if approved.
* It MUST be parsable and usable with raw PHP.  No third party attribute library requirements are allowed.
* It MUST follow PER-CS coding guidelines.
* It MUST adhere to PHPStan Level 10 levels of code tidiness.
* It MUST be extensively documented through docblocks on the attribute itself.
* It MAY have functionality beyond just the constructor, if relevant.
* If the required PHP version for a specific attribute is higher than that of the package, that MUST be specified in the class docblock.

Ideally, proposals should be discussed in the [PHP-FIG Discord](https://discord.gg/php-fig), `#per-attributes` channel, prior to proposal.

Existing attributes can be transfered to the FIG. Such attributes will be listed for a reasonable amount of time
in an IN_TRANSITION.md document. The process for a take-over is in essence the same as for not-yet existing attributes.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please use the [GitHub security reporting form](https://github.com/php-fig/per-attributes/security) rather than the issue queue.

## Working Group

<!-- Add your own name here -->
- [Larry Garfield][link-crell]
- [All Contributors][link-contributors]
- [Jaap van Otterdijk][link-jaapio]
## License

The MIT License. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/fig/attributes.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/License-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/fig/attributes.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/fig/attributes
[link-downloads]: https://packagist.org/packages/fig/attributes
[link-crell]: https://github.com/Crell
[link-jaapio]: https://github.com/Jaapio
[link-contributors]: ../../contributors
