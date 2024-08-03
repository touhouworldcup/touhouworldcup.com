# touhouworldcup.com
This is the repository for touhouworldcup.com, the official Touhou World Cup website.

## How to run
Prerequisites:
* PHP (version 8 or newer)
* MariaDB

Required PHP modules:
* gettext
* mysqli

First, clone the repository in whatever way you prefer and navigate to its directory.
```
git clone https://github.com/touhouworldcup/touhouworldcup.com.git
cd touhouworldcup.com
```
Make sure [MariaDB](https://mariadb.org/) is running on your system. You may refer to their website for more information.
Create a user called `twc_admin` and store the password in a file named `.pw` in the website root directory.
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
php -S 127.0.0.1:8000
```
Connect to `http://127.0.0.1:8000` using your browser. You can also specify a port other than 8000.

If you want, you can use a Web server such as [Apache](https://apache.org/) or [Nginx](https://nginx.org/) to host the site.