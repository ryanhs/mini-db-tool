# Tooling?

Yeah sometimes we need a fresh small project for tooling.

For example, sometimes we need to fetch some images in the website. and save the image links into DB.
For that, we need: http client, HTML parser, and DB object to store.


this package contain: *look at composer.json*
```json
{
    "require": {
        "illuminate/database": "^5.6",
        "vlucas/phpdotenv": "^2.4",
        "guzzlehttp/guzzle": "^6.3",
        "paquettg/php-html-parser": "^1.7",
        "fostam/getopts": "^1.1"
    }
}
```

### var_dumper

by symfony:
```php
// create a variable, which could be anything!
$someVar = ...;

dd($someVar);

// dump() returns the passed value, so you can dump an object and keep using it
dump($someObject)->someMethod();
```

#### See `example-crawl.php` and `example-db.php`.

\*even this small package still needs a readme :-)

### cli app

For cli app, added [fostam/getopts](https://packagist.org/packages/fostam/getopts) to parse the cli arguments.

example taken from the page:
```php
<?php

include "vendor/autoload.php";

$getopts = new Fostam\GetOpts\Handler();

$getopts->addOption('verboseLevel')
    ->short('v')
    ->long('verbose')
    ->description('increase verbosity')
    ->incrementable();

$getopts->addArgument('outputFile')
    ->name('output-file')
    ->required();

$getopts->parse();

// show parsed options and arguments for demonstration purposes
var_dump($getopts->get());
```
