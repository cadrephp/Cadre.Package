# Cadre.Package

This is a package skeleton for me to use when starting new Cadre packages.

For a project skeleton see [Cadre.Project](https://github.com/cadrephp/Cadre.Project).

## Preconfigured Libraries

- [Composer](https://getcomposer.org/) PHP dependency manager
- [Phing](https://www.phing.info/) PHP build system
- [PHPUnit](https://phpunit.de/) for testing and code coverage
- [PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)

## Setup

```bash
# Setup new package repo
git clone git@github.com:cadrephp/Cadre.Package.git new-package
cd new-package
rm -fr .git
git init .

# Update dependencies
vim composer.json
composer update

# Run lint, phpcs, and phpunit
vendor/bin/phing build

# Run tests and generate HTML coverage report (in build/coverage)
vendor/bin/phing coverage
```
