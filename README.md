# Getting started

The Akeneo API brought to you!

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the AKKBLFPIM23 library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=AKK-BLF-PIM%202.3-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=AKK-BLF-PIM%202.3-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=AKK-BLF-PIM%202.3-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |



API client can be initialized as following.

```php
$oAuthAccessToken = 'oAuthAccessToken'; // OAuth 2.0 Access Token

$client = new AKKBLFPIM23Lib\AKKBLFPIM23Client($oAuthAccessToken);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [ProductController](#product_controller)
* [AttributeController](#attribute_controller)
* [AttributeOptionController](#attribute_option_controller)
* [AttributeGroupsController](#attribute_groups_controller)
* [CategoryController](#category_controller)
* [ChannelController](#channel_controller)
* [CurrencyController](#currency_controller)
* [FamilyController](#family_controller)
* [FamilyVariant2XOnlyController](#family_variant2_x_only_controller)
* [MeasureFamily2XOnlyController](#measure_family2_x_only_controller)
* [MiscController](#misc_controller)

## <a name="product_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ProductController") ProductController

### Get singleton instance

The singleton instance of the ``` ProductController ``` class can be accessed from the API Client.

```php
$product = $client->getProduct();
```

### <a name="get_product"></a>![Method: ](https://apidocs.io/img/method.png ".ProductController.getProduct") getProduct

> Assuming that the given identifier is the identifier of an existing product


```php
function getProduct()
```

#### Example Usage

```php

$product->getProduct();

```


### <a name="get_products"></a>![Method: ](https://apidocs.io/img/method.png ".ProductController.getProducts") getProducts

> TODO: Add a method description


```php
function getProducts(
        $contentType,
        $cookie)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| contentType |  ``` Required ```  | TODO: Add a parameter description |
| cookie |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$contentType = 'application/json';
$cookie = 'Cookie';

$product->getProducts($contentType, $cookie);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="attribute_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AttributeController") AttributeController

### Get singleton instance

The singleton instance of the ``` AttributeController ``` class can be accessed from the API Client.

```php
$attribute = $client->getAttribute();
```

### <a name="get_attribute"></a>![Method: ](https://apidocs.io/img/method.png ".AttributeController.getAttribute") getAttribute

> Assuming that the given code is the code of an existing attribute


```php
function getAttribute()
```

#### Example Usage

```php

$attribute->getAttribute();

```


### <a name="get_attributes"></a>![Method: ](https://apidocs.io/img/method.png ".AttributeController.getAttributes") getAttributes

> TODO: Add Description


```php
function getAttributes()
```

#### Example Usage

```php

$attribute->getAttributes();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="attribute_option_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AttributeOptionController") AttributeOptionController

### Get singleton instance

The singleton instance of the ``` AttributeOptionController ``` class can be accessed from the API Client.

```php
$attributeOption = $client->getAttributeOption();
```

### <a name="get_attribute_option"></a>![Method: ](https://apidocs.io/img/method.png ".AttributeOptionController.getAttributeOption") getAttributeOption

> Assuming that the given codes are respectively the code of an existing attribute and an existing option of this attribute


```php
function getAttributeOption()
```

#### Example Usage

```php

$attributeOption->getAttributeOption();

```


### <a name="get_attribute_options"></a>![Method: ](https://apidocs.io/img/method.png ".AttributeOptionController.getAttributeOptions") getAttributeOptions

> TODO: Add Description


```php
function getAttributeOptions()
```

#### Example Usage

```php

$attributeOption->getAttributeOptions();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="attribute_groups_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AttributeGroupsController") AttributeGroupsController

### Get singleton instance

The singleton instance of the ``` AttributeGroupsController ``` class can be accessed from the API Client.

```php
$attributeGroups = $client->getAttributeGroups();
```

### <a name="get_attribute_group2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".AttributeGroupsController.getAttributeGroup2XOnly") getAttributeGroup2XOnly

> Assuming that the given code is the code of an existing attribute group


```php
function getAttributeGroup2XOnly()
```

#### Example Usage

```php

$attributeGroups->getAttributeGroup2XOnly();

```


### <a name="get_attribute_groups2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".AttributeGroupsController.getAttributeGroups2XOnly") getAttributeGroups2XOnly

> TODO: Add Description


```php
function getAttributeGroups2XOnly()
```

#### Example Usage

```php

$attributeGroups->getAttributeGroups2XOnly();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="category_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CategoryController") CategoryController

### Get singleton instance

The singleton instance of the ``` CategoryController ``` class can be accessed from the API Client.

```php
$category = $client->getCategory();
```

### <a name="get_category"></a>![Method: ](https://apidocs.io/img/method.png ".CategoryController.getCategory") getCategory

> Assuming that the given code is the code of an existing category


```php
function getCategory()
```

#### Example Usage

```php

$category->getCategory();

```


### <a name="get_categories"></a>![Method: ](https://apidocs.io/img/method.png ".CategoryController.getCategories") getCategories

> TODO: Add Description


```php
function getCategories()
```

#### Example Usage

```php

$category->getCategories();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="channel_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ChannelController") ChannelController

### Get singleton instance

The singleton instance of the ``` ChannelController ``` class can be accessed from the API Client.

```php
$channel = $client->getChannel();
```

### <a name="get_channel"></a>![Method: ](https://apidocs.io/img/method.png ".ChannelController.getChannel") getChannel

> Assuming that the given code is the code of an existing channel


```php
function getChannel()
```

#### Example Usage

```php

$channel->getChannel();

```


### <a name="get_channels"></a>![Method: ](https://apidocs.io/img/method.png ".ChannelController.getChannels") getChannels

> TODO: Add Description


```php
function getChannels()
```

#### Example Usage

```php

$channel->getChannels();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="currency_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CurrencyController") CurrencyController

### Get singleton instance

The singleton instance of the ``` CurrencyController ``` class can be accessed from the API Client.

```php
$currency = $client->getCurrency();
```

### <a name="get_currency2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".CurrencyController.getCurrency2XOnly") getCurrency2XOnly

> Assuming that the given code is the code of an existing currency


```php
function getCurrency2XOnly()
```

#### Example Usage

```php

$currency->getCurrency2XOnly();

```


### <a name="get_currencies2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".CurrencyController.getCurrencies2XOnly") getCurrencies2XOnly

> TODO: Add Description


```php
function getCurrencies2XOnly()
```

#### Example Usage

```php

$currency->getCurrencies2XOnly();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="family_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FamilyController") FamilyController

### Get singleton instance

The singleton instance of the ``` FamilyController ``` class can be accessed from the API Client.

```php
$family = $client->getFamily();
```

### <a name="get_family"></a>![Method: ](https://apidocs.io/img/method.png ".FamilyController.getFamily") getFamily

> Assuming that the given code is the code of an existing family


```php
function getFamily()
```

#### Example Usage

```php

$family->getFamily();

```


### <a name="get_families"></a>![Method: ](https://apidocs.io/img/method.png ".FamilyController.getFamilies") getFamilies

> TODO: Add Description


```php
function getFamilies()
```

#### Example Usage

```php

$family->getFamilies();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="family_variant2_x_only_controller"></a>![Class: ](https://apidocs.io/img/class.png ".FamilyVariant2XOnlyController") FamilyVariant2XOnlyController

### Get singleton instance

The singleton instance of the ``` FamilyVariant2XOnlyController ``` class can be accessed from the API Client.

```php
$familyVariant2XOnly = $client->getFamilyVariant2XOnly();
```

### <a name="get_family_variant2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".FamilyVariant2XOnlyController.getFamilyVariant2XOnly") getFamilyVariant2XOnly

> Assuming that the given codes are respectively the code of an existing family and an existing family variant


```php
function getFamilyVariant2XOnly()
```

#### Example Usage

```php

$familyVariant2XOnly->getFamilyVariant2XOnly();

```


### <a name="get_family_variants2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".FamilyVariant2XOnlyController.getFamilyVariants2XOnly") getFamilyVariants2XOnly

> TODO: Add Description


```php
function getFamilyVariants2XOnly()
```

#### Example Usage

```php

$familyVariant2XOnly->getFamilyVariants2XOnly();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="measure_family2_x_only_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MeasureFamily2XOnlyController") MeasureFamily2XOnlyController

### Get singleton instance

The singleton instance of the ``` MeasureFamily2XOnlyController ``` class can be accessed from the API Client.

```php
$measureFamily2XOnly = $client->getMeasureFamily2XOnly();
```

### <a name="get_measure_family2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".MeasureFamily2XOnlyController.getMeasureFamily2XOnly") getMeasureFamily2XOnly

> Assuming that the given code is the code of an existing measure family


```php
function getMeasureFamily2XOnly()
```

#### Example Usage

```php

$measureFamily2XOnly->getMeasureFamily2XOnly();

```


### <a name="get_measure_families2_x_only"></a>![Method: ](https://apidocs.io/img/method.png ".MeasureFamily2XOnlyController.getMeasureFamilies2XOnly") getMeasureFamilies2XOnly

> TODO: Add Description


```php
function getMeasureFamilies2XOnly()
```

#### Example Usage

```php

$measureFamily2XOnly->getMeasureFamilies2XOnly();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="misc_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MiscController") MiscController

### Get singleton instance

The singleton instance of the ``` MiscController ``` class can be accessed from the API Client.

```php
$misc = $client->getMisc();
```

### <a name="create_authentification_by_password"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.createAuthentificationByPassword") createAuthentificationByPassword

> TODO: Add Description


```php
function createAuthentificationByPassword(
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\"username\":\"{{username}}\",\"password\":\"{{password}}\",\"grant_type\":\"password\"}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$misc->createAuthentificationByPassword($body, $contentType);

```


### <a name="create_authentification_by_refresh_token"></a>![Method: ](https://apidocs.io/img/method.png ".MiscController.createAuthentificationByRefreshToken") createAuthentificationByRefreshToken

> TODO: Add Description


```php
function createAuthentificationByRefreshToken(
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bodyValue = "{\"refresh_token\":\"{{refreshToken}}\",\"grant_type\":\"refresh_token\"}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$misc->createAuthentificationByRefreshToken($body, $contentType);

```


[Back to List of Controllers](#list_of_controllers)



