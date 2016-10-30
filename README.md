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

5. Modify Laravel DatabaseSeeder to call Curator's seeds.

```php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Call Curator's Seeds.
        $this->call(CuratorDatabaseSeeder::class);
    }
}
```

Then run the following terminal command in your Laravel base folder. The required tables will be created in your database and be seeded with the appropriate default settings.

```
$ php artisan migrate --seed
Migrated: 2016_10_19_223416_create_status_table
Migrated: 2016_10_20_193702_create_user_table
Migrated: 2016_10_20_203139_create_flag_table
Migrated: 2016_10_20_204349_create_role_table
Migrated: 2016_10_20_215801_create_permission_table
Migrated: 2016_10_21_184917_create_setting_table
Migrated: 2016_10_21_193232_create_activity_table
Migrated: 2016_10_21_201637_create_userflag_table
Migrated: 2016_10_21_203234_create_userrole_table
Migrated: 2016_10_21_203811_create_userpermission_table
Migrated: 2016_10_21_204409_create_rolepermission_table
Seeded: StatusTableSeeder
Seeded: UserTableSeeder
Seeded: FlagTableSeeder
Seeded: RoleTableSeeder
Seeded: PermissionTableSeeder
Seeded: SettingTableSeeder
Seeded: ActivitySeeder
Seeded: UserRoleSeeder
Seeded: RolePermissionSeeder
Seeded: UserFlagTableSeeder
Seeded: CuratorDatabaseSeeder
```

6. Compile CSS and migrate resources to Laravel public. Run the following command in the \vendor\ila\curator\src\ directory.

```php
gulp
```
