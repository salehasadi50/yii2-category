#Categories Management Yii2 Module
Complete category management module for Yii2 based web application, Ready to integrate

* Easy to install
* Create Unlimited Multilevel categories
* Category tree structure to visualize category depth
* Category Image
* Category SEO Meta (Title, keywords, Description)

### 1. Download

Yii2-categories can be installed using composer. Run following command to download and
install Yii2-categories:

```bash
php composer.phar require salehasadi/yii2-category "dev-master"
```

### 2. Configure

Add following lines to your main configuration file to access this module via web URL:
> **NOTE:** Along with category module you also need to configure redactor Module which installed as dependency in category module as below to add wysiwyg editor in category description.

```php
'modules' => [
	'redactor' => 'yii\redactor\RedactorModule',
    'category' => [
        'class' => 'salehasadi\category\Module',
    ],
],
```

### 3. Update database schema

The last thing you need to do is updating your database schema by applying the
migrations. Make sure that you have properly configured `db` application component
and run the following command:

```bash
$ php yii migrate/up --migrationPath=@vendor/salehasadi/yii2-category/migrations
```

