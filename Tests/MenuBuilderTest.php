<?php

namespace Robsox\Menus\Tests;

use Illuminate\Config\Repository;
use Robsox\Menus\MenuBuilder;
use Robsox\Menus\MenuItem;

class MenuBuilderTest extends BaseTestCase
{
    /** @test */
    public function it_makes_a_menu_item()
    {
        $builder = new MenuBuilder('main', app(Repository::class));

        self::assertInstanceOf(MenuItem::class, $builder->url('hello', 'world'));
    }
}
