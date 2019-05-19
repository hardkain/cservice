## Laravel example ##

**Laravel example** is a tutorial application.

### Installation ###

* clone the repository 
* type `cd projectname`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate` to generate secure key in *.env* file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* if you use sqlite :
   * type `touch database/database.sqlite` to create the file
* type `php artisan vendor:publish --provider="Bestmomo\LaravelEmailConfirmation\ServiceProvider" --tag="confirmation:migrations"` to publish email confirmation migration
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* for emails configuration

### Tests ###

* type vendor/bin/phpunit
