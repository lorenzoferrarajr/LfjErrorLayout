LfjErrorLayout
==============

Version 1.0 Created By Lorenzo Ferrara Junior

Introduction
------------

LfjErrorLayout is a ZF2 module that allows you to use an alternative layout when a dispatch errors occur.

Usage
-----

To enable the module just add it to your `application.config.php` file.

**Note that you must add it before any other module or your custom configuration options could be replaced with the default ones!**

Configuration
-----

Optionally, you can configure your custom `layout/error`, `error/404` and `error/index` paths in the view_manager option in any module configuration:

```php
return array(
    [...]
    'view_manager' => array(
        [...]
        'layout/error'           => __DIR__ . '/../view/layout/error.phtml',
        'error/404'              => __DIR__ . '/../view/error/404.phtml',
        'error/index'            => __DIR__ . '/../view/error/index.phtml',
        [...]
    )
    [...]
);
```
