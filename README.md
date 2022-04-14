# touhouworldcup.com
This is the repository for touhouworldcup.com, the official Touhou World Cup website.

## How to run
Prerequisites:
* PHP (version 8 or newer)
* gettext module

First, clone the repository in whatever way you prefer and navigate to its directory.
```
git clone https://github.com/touhouworldcup/touhouworldcup.com.git
cd touhouworldcup.com
```
Then, run the PHP development server.
```
php -S 127.0.0.1:8000
```
Connect to `http://127.0.0.1:8000` using your browser. You can also specify a port other than 8000.

If you want, you can use a Web server such as [Apache](https://apache.org/) or [Nginx](https://nginx.org/) to host the site.

## Troubleshooting
```
[500]: GET / - Uncaught Error: Call to undefined function bindtextdomain()
```
This error means that the PHP gettext module is not enabled. To enable it, open up your `php.ini` file and search for "gettext". You should find the following line:
```
;extension=gettext
```
Uncomment it by removing the semicolon at the front, then save the file. PHP will detect the change and run the gettext module.
