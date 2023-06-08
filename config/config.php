<?php

return [

    'styles' => [
        'navbar' => \Robsox\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \Robsox\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \Robsox\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \Robsox\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \Robsox\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \Robsox\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \Robsox\Menus\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \Robsox\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => false,

];
