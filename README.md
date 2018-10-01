> New and advanced version will be available soon.
> Mighty PHP will be releasing soon.

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

## Working with framework

### To create view of page

In `www\views\` folder create a file `welcome-view.php` and add the following code

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>Welcome, <?= $data['name'] ?>!</h3>
    <p>This is FMwork. The ultra light-weight HMVC Framework. </p>
</body>
</html>
```

In `www\Controller\` folder create a `Welcome.php` and add the following code

```php
<?php
class Welcome extends FM_Controller
{
    public function index()
    {
        $data['name'] = "Mohinish Sharma"
        FM_Render::RenderFile("welcome-view",$data);
    }   
}
?>
```

Thats it now navigate your browser to `localhost/welcome/index` you'll see the rendered page by framework.

if any problem arises. Please raise an issue.
