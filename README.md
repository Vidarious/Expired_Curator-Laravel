# Curator v0.0
---
#### INSTALLATION

1.  Add package to Laravel PSR-4 autoload.

**OLD**: /composer.json

```php
"autoload": {
    "classmap": [
        "database"
    ],
    "psr-4": {
        "App\\": "app/"
    }
},
```

**NEW**: /composer.json

```php
"autoload": {
    "classmap": [
        "database"
    ],
    "psr-4": {
        "App\\": "app/",
        "ila\\Curator\\": "packages/ila/curator/src"
    }
},
```

2. Refresh the composer autoload.

```
$ composer dump-autoload
Generating autoload files
```
