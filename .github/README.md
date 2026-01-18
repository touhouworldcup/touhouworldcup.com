# touhouworldcup.com
![website-status](https://img.shields.io/website?url=https://touhouworldcup.com/)

This is the repository for touhouworldcup.com, the official Touhou World Cup website.

## How to run
First, clone the repository in whatever way you prefer and navigate to its directory.
```
git clone https://github.com/touhouworldcup/touhouworldcup.com.git
cd touhouworldcup.com
```
Use the Dockerfile provided in the repository to build a [Docker image](https://docs.docker.com/). This website uses PHP-FPM, so a separate container should be run for that as well.

In the repository's parent directory, you may use a Docker Compose file:
```YAML
twc:
  image: twc
  container_name: twc
  restart: 'unless-stopped'
  depends_on:
    - mariadb
    - php
  volumes:
    - ./touhouworldcup.com:/var/www/twc
  ports:
    - <your_port_here>:80
  env_file:
    - ./touhouworldcup.com/.env.prod
php:
  image: bitnami/php-fpm
  ports:
    - 9000:9000
  volumes:
    - ./touhouworldcup.com:/var/www/touhouworldcup.com
  env_file:
    - ./touhouworldcup.com/.env.prod
```

Make sure [MariaDB](https://mariadb.org/) is running on your system, either natively or in a container.
Its address should be specified in your environment file. Default port is 3306; specify another if needed.
Copy the environment file from `.env.template` and name it for example `.env.dev` or `.env.prod`.

In the PHP-FPM container, enable the `gettext` module. Install the `locales` package and enable every locale listed in the `locale` directory in this repository, such as `en_GB.UTF-8 UTF-8`.

## Running without Docker
Prerequisites:
* PHP (version 8 or newer)
* MariaDB

Required PHP modules:
* gettext
* mysqli

You can use a Web server such as [Apache](https://apache.org/) or [Nginx](https://nginx.org/) to host the site.
Apache is assumed, for the purpose of the Docker image.

The `apache.conf` file contains the Apache virtual host used for the site. It assumes it is running behind a reverse proxy.
If you are not using a reverse proxy, remove the `LogFormat` line from `apache.conf` and replace `custom` with `common` for the `CustomLog`.

## Development
Once you have cloned the repository, start by configuring MariaDB.

Create a user called `twc_admin` and set the password in an environment variable named `DB_PASSWORD`.
Set the address where the database can be found in the environment variable `DB_HOST`.
If you are running on `localhost` then you do not need this variable.

Run the following command to import the tables.
```
mariadb -u root -p twc < init.sql
```
For the archived TWC results from past years, run the following command.
```
mariadb -u root -p twc_archive < init_archive.sql
```
For testing, you can use any tool to modify the data as you desire.

Then, run the PHP development server.
```
php -S 127.0.0.1:8000 router.php
```
Connect to `http://127.0.0.1:8000` using your browser. You can also specify a port other than 8000.
The router.php file must be specified for site navigation to work.

To update the translations after the locale files have been altered, restart the PHP development server.