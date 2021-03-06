Ladybug: PHP 5.3+ Extensible Dumper
=========================================

[![Build Status](https://secure.travis-ci.org/raulfraile/ladybug.png)](http://travis-ci.org/raulfraile/ladybug)
[![Latest Stable Version](https://poser.pugx.org/raulfraile/ladybug/v/stable.png)](https://packagist.org/packages/raulfraile/ladybug)
[![Total Downloads](https://poser.pugx.org/raulfraile/ladybug/downloads.png)](https://packagist.org/packages/raulfraile/ladybug)
[![Latest Unstable Version](https://poser.pugx.org/raulfraile/ladybug/v/unstable.png)](https://packagist.org/packages/raulfraile/ladybug)

Ladybug provides an easy and extensible `var_dump` / `print_r` replacement for PHP 5.3+
projects. You can easily dump any PHP variable, object or resource:

``` php
<?php
$var = array(
    array(
        'name' => 'Raul',
        'age' => 29
    ),
    array(
        'name' => 'John',
        'age' => 27
    )
);

ladybug_dump($var)
```

<img style="border:1px solid #ccc; padding:1px" src="https://github.com/raulfraile/ladybug/raw/master/doc/images/array_modern.png" />

## Documentation

1. [Usage](https://github.com/raulfraile/ladybug/blob/master/doc/usage.md).
2. [Instalation](https://github.com/raulfraile/ladybug/blob/master/doc/installation.md).
3. [Examples](https://github.com/raulfraile/ladybug/blob/master/doc/examples.md).
4. [Extending](https://github.com/raulfraile/ladybug/blob/master/doc/extending.md).
5. [Reference](https://github.com/raulfraile/ladybug/blob/master/doc/reference.md).
6. [Tests](https://github.com/raulfraile/ladybug/blob/master/doc/tests.md).

## Support for other libraries/frameworks

* Symfony2: [LadybugBundle](https://github.com/raulfraile/LadybugBundle).

## Credits

* Raul Fraile ([@raulfraile](https://twitter.com/raulfraile))
* [All contributors](https://github.com/raulfraile/ladybug/contributors)

## License

Ladybug is released under the MIT License. See the bundled LICENSE file for details.