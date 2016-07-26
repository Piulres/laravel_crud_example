# Laravel Crud - Post Example
System Developed for tests and for fun. Made in Laravel 4.1 because client want.

----
### Author
* [Piulres]

----
### Version
1.0

----
### Requirement
You need the Apache, Mysql e PHP to run this application.

----
### Tech
Tonca uses a number of open source projects to work properly:

* [jQuery]
* [Bootstrap]
* [Isotope]
* [Wordpress]
* [Composer]
* [Laravel]

----
### Installation
I hope you are familiar with [Xampp](https://www.apachefriends.org/pt_br/index.html) and the initial steps of the [Composer](https://scotch.io/tutorials/a-beginners-guide-to-composer) and [Laravel](http://www.darwinbiler.com/how-to-install-laravel-on-wamp-for-beginners/), but if not, follow the instructions to install on Windows:

Install Xampp and follow the commands in console

```sh
cd c:\xamp\htdocs\
md site_example
cd site_example
cd c:\xamp\htdocs\
md composer
cd composer
```

Set the environment variable the path of the folder created [PATH]

```sh
C:\xamp\htdocs\composer;
```

Install Composer

```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
echo @php "%~dp0composer.phar" %*>composer.bat
```

Create Laravel Project

```sh
cd c:\xamp\htdocs\site_example
composer create-project laravel/laravel site_example 4.1
composer update
php artisan migrate:make posts --table=posts --create
```

Edit app/database/migrations/ like:

```sh
class Posts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('slug', 255);            
            $table->string('title', 255);
            $table->string('content', 255);
            $table->string('published', 1);
            $table->string('featured', 1);
            $table->string('category', 255);            

            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

	public function down()
	{
		Schema::drop('posts');
	}

}
```

----
### Demo [Offline]
http://renan.zz.mu/laravel_crud/


   [Piulres]: <https://github.com/Piulres/>
   [Composer]: <https://getcomposer.org/>
   [jQuery]: <http://jquery.com/>
   [Laravel]: <https://laravel.com/>
   [Bootstrap]: <http://getbootstrap.com/>
   [Isotope]: <http://isotope.metafizzy.co/>
   [Wordpress]: <https://github.com/Piulres/WordPress/>