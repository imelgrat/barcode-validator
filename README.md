BarcodeValidator
==================

[![GitHub license](https://img.shields.io/github/license/imelgrat/barcode-validator.svg?style=flat-square)](https://github.com/imelgrat/barcode-validator/blob/master/LICENSE)
[![GitHub release](https://img.shields.io/github/release/imelgrat/barcode-validator.svg?style=flat-square)](https://github.com/imelgrat/barcode-validator/releases)
[![Total Downloads](https://poser.pugx.org/imelgrat/barcode-validator/downloads)](https://packagist.org/packages/imelgrat/barcode-validator)
[![GitHub issues](https://img.shields.io/github/issues/imelgrat/barcode-validator.svg?style=flat-square)](https://github.com/imelgrat/barcode-validator/issues)
[![GitHub stars](https://img.shields.io/github/stars/imelgrat/barcode-validator.svg?style=flat-square)](https://github.com/imelgrat/barcode-validator/stargazers)

A PHP class for validating EAN, IMEI, ISBN, GTIN, SSCC, GSIN, UPC and other similar codes.

Developed by [Ivan Melgrati](https://imelgrat.me) 

Requirements
------------

*   PHP >= 5.3.0

Installation
------------

### Composer

The recommended installation method is through
[Composer](http://getcomposer.org/), a dependency manager for PHP. Just add
`imelgrat/barcode-validator` to your project's `composer.json` file:

```json
{
    "require": {
        "imelgrat/barcode-validator": "*"
    }
}
```

[More details](http://packagist.org/packages/imelgrat/barcode-validator) can
be found over at [Packagist](http://packagist.org).

### Manually

1.  Copy `src/barcode-validator.php` to your codebase, perhaps to the `vendor`
    directory.
2.  Add the `BarcodeValidator` class to your autoloader or `require` the file
    directly.

Feedback
--------

Please open an issue to request a feature or submit a bug report. Or even if
you just want to provide some feedback, I'd love to hear. I'm also available on
Twitter as [@imelgrat](https://twitter.com/imelgrat).

Contributing
------------

1.  Fork it.
2.  Create your feature branch (`git checkout -b my-new-feature`).
3.  Commit your changes (`git commit -am 'Added some feature'`).
4.  Push to the branch (`git push origin my-new-feature`).
5.  Create a new Pull Request.
