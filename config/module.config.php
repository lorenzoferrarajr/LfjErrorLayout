<?php

return array(
    'view_manager' => array(
        'template_map' => array(
            'layout/error'           => __DIR__ . '/../view/layout/error.phtml',
            'error/404'              => __DIR__ . '/../view/error/404.phtml',
            'error/index'            => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'error' => __DIR__ . '/../view',
        ),
    )
);
