<?php

namespace Robsox\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use Robsox\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        // $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menus', [
            'styles' => [
                'navbar' => \Robsox\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \Robsox\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \Robsox\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \Robsox\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \Robsox\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \Robsox\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
