<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)

Godaddy api library
===================
Godaddy api library

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist inquid/yii2-godaddy "*"
```

or add

```
"inquid/yii2-godaddy": "*"
```

to the require section of your `composer.json` file.


Usage
-----

## Configuration
Add as component
```php
$config = [
     // ...
    'components' => [
        'godaddy' => [
            'class' => 'inquid\godaddy\Godaddy',
            'apiKey' => 'API_KEY',
            'apiSecret' => 'API_SECRET'
        ],
        // ...
    ],
],
```

## Usage
Get domain aviability
```php
$response = Yii::$app->godaddy->getDomainAviability([
        'domain'=>'example.com'
    ]);
print_r($response);
```
Inserts a new record to a domain
```php
      $response = Yii::$app->godaddy->insertRecord("domain.com",[
    'data'=>'XX.XX.XX.XX', //IP
     'name'=>'subdomain',
    'ttl' => '600',
     'type'=>'A'
    ]);
    print_r($response);
```

Iniciativa Programa México: 
![Iniciativa Programa México](https://lh5.googleusercontent.com/k6u-DepqdgZzTk15Kxx6UPuZJ0ldiv6EPuhhJYRp8QfB89kLxU-D1D7YdYST-gGXnSxl9LFixzn5sYg=w1920-h990)

SUPPORT
-----
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=contact@inquid.co&item_name=Yii2+extensions+support&item_number=22+Campaign&amount=5%2e00&currency_code=USD)