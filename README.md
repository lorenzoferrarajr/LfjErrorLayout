LfjErrorLayout
==============

Version 1.0 Created By Lorenzo Ferrara Junior

Introduction
------------

LfjErrorLayout is a ZF2 module that allows you to use an alternative layout when a dispatch errors occur.

Usage
-----

Using the module simple. Just add the `layout/error`, `error/404` and `error/index` paths to the view_manager in any module configuration:

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
