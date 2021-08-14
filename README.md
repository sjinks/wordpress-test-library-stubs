# wordpress-test-library-stubs

[![CI](https://github.com/sjinks/wordpress-test-library-stubs/actions/workflows/ci.yml/badge.svg)](https://github.com/sjinks/wordpress-test-library-stubs/actions/workflows/ci.yml)

This package provides stub declarations for the WordPress Test Library.

The stubs were generated directly from the source code with the help of [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

## Installation

```bash
composer require --dev wildwolf/wordpress-test-library-stubs
```

## Usage with Psalm

Update your Psalm configuration file to include the following code:

```xml
<stubs>
    <file name="vendor/wildwolf/wordpress-test-library-stubs/wordpress-test-library-stubs.php" />
</stubs>
```
