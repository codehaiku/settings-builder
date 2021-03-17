<?php 
declare(strict_types=1);

namespace SettingsBuilder;

use PHPUnit\Framework\TestCase;
use SettingsBuilder;

class MenuTest extends TestCase{

    public $menu;

    public function setUp(): void {
        require_once(__DIR__ . "/../../../../wp-load.php");
        $this->menu = new Menu();
    }

    public function test_props_should_match(): void {

        $this->menu->setPageTitle('Custom Menu');
        $this->menu->setMenuTitle('Custom Menu Menu Title');
        $this->menu->setCapability('manage_options');
        
        // Test Cases.
        $this->assertEquals( $this->menu->getPageTitle(), 'Custom Menu');
        $this->assertEquals( $this->menu->getMenuTitle(), 'Custom Menu Menu Title');
        $this->assertEquals( $this->menu->getCapability(), 'manage_options');

    }

    public function test_render_method_should_match(): void  {

        $should_match = array(
            'page_title' => 'Burger Menu',
            'menu_title' => 'Burger Menu | Title',
            'capability' => 'manage_options',
            'menu_slug'  => 'burger-menu',
            'icon'       => 'dashicons-beer',
            'position'   => 100
        );

        $this->menu->setPageTitle('Burger Menu');
        $this->menu->setMenuTitle('Burger Menu | Title');
        $this->menu->setCapability('manage_options');
        $this->menu->setIcon('dashicons-beer');
        $this->menu->setPosition(100);

        $dispatch = new Menu\Dispatch( $this->menu );

        $this->assertEquals( $dispatch->getProps(), $should_match );

    }

}