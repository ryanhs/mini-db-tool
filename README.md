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
        "paquettg/php-html-parser": "^1.7"
    }
}
```

#### See `example-crawl.php` and `example-db.php`.
