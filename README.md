# touhouworldcup.com
This is the repository for touhouworldcup.com, the official Touhou World Cup website.

## How to run
Prerequisites:
* PHP (version 8 or newer)

Required PHP modules:
* gettext
* mysqli

First, clone the repository in whatever way you prefer and navigate to its directory.
```
git clone https://github.com/touhouworldcup/touhouworldcup.com.git
cd touhouworldcup.com
```
Create a `config.json` file like so:
```
{
    "auth_token": "",
    "scoring_table": "",
    "surv_table": "",
    "scoring_view": "",
    "surv_view": ""
}  
```
Then, run the PHP development server.
```
php -S 127.0.0.1:8000
```
Connect to `http://127.0.0.1:8000` using your browser. You can also specify a port other than 8000.

If you want, you can use a Web server such as [Apache](https://apache.org/) or [Nginx](https://nginx.org/) to host the site.