FMwork

# Introduction
This is a ultra light-weight framework designed by me to quickly create Website with minimal line of coding and setup requirement.
Its Implementation reuires minimum number of steps to get your website up and running.


## Steps to setup Enivironment

Install Xampp or your any favourite server. which should support `PHP >= 5`.

1. Download the framework from the github page. [Visit page to download](https://github.com/mohinishsharma/FMwork).
2. Extract Files to your `htdocs` OR `www` folder.
3. Now open `Config.php` file.


## Configuration of framework

In `config.php` file change the following.

1. `AppName` => `YOUR_APP_NAME`.
2. `DomainName` => `DOMAIN_NAME` OR if running on localhost > `localhost`.
3. `defaults` will conatn the default controller and method to use if Any controller or method is not found.
4. `paths` will contain all the necessary paths of the core directory, app dirctory, views and model directory.
5. `database` in database enter the necessary data of the mysql server.
6. `routes` are the predefined routs of the application.
7. `smarty` if you want to use smarty as template engine then set `in_use = true` and leave rest as it is.
