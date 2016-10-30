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
        "Curator\\": "packages/ila/curator/src/Curator/"
    }
},
```

2. Refresh the composer autoload in your base Laravel app director (not from your the Curator package dir).

```
$ composer dump-autoload
Generating autoload files
```

3. Add Curator's service provider to your Laravel app configuration (/config/app.php).

```php
/*
 * Package Service Providers...
 */
Curator\Providers\CuratorServiceProvider::class,
//
```

4. Migrate Curator's database tables. The following command should be performed in your Laravel project root folder.

> Be sure to delete Laravel's default migration files (/database/migration) as they will not be necessary. If you do not want to re-migrate any existing migration tables you've built, temporarily move your migration files from the database/migrations folder in your base Laravel project.

```php
php artisan migrate
```
