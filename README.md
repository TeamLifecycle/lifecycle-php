# lifecycle-php

## Installation

### Using [Composer](https://getcomposer.org)

To install unirest-php with Composer, just add the following to your `composer.json` file:

```json
{
    "require-dev": {
        "lifecycle/lifecycle-api"
    }
}
```

or by running the following command:

```shell
composer require lifecycle/lifecycle-api
```

Composer installs autoloader at `./vendor/autoloader.php`. to include the library in your script, add:

```php
require_once 'vendor/autoload.php';
```

If you use Symfony2, autoloader has to be detected automatically.

*You can see this library on [Packagist](https://packagist.org/packages/lifecycle/lifecycle-api).*


## Usage

### Creating a Request

So you're probably wondering how to use this library for quick and easy api calls to Lifecycle. Check out this example.


TO INITIALIZE:
```php
lifecycle = new Lifecycle('YOUR_LIFECYCLE_API_KEY');
```

TO IDENTIFY:
```php
lifecycle::identify('$params');  //check out the example params below.
```

TO TRACK:
```php
lifecycle::track('$event_id, $unique_id');
```


```php
//Example of params variable to use with identify call
params = array( "unique_id" => "1234",
        		"first_name" => "Nathan",
        		"last_name" => "Mooney",
    			"email_address" => "someone@lifecycle.io",
        		"phone_number" => "12345678913")

```






