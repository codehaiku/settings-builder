<?php
declare(strict_types=1);

namespace SettingsBuilder\Menu;

use SettingsBuilder\Menu as Menu;
use SettingsBuilder\Interfaces;

class Dispatch {

    protected $menu;

    protected $menu_hook;
    
    public function __construct( Menu $menu ) {
        $this->menu = $menu;
        add_action( 'admin_menu', $this );
    }

    public function getProps() {

        return [
            'page_title' => $this->menu->getPageTitle(),
            'menu_title' => $this->menu->getMenuTitle(),
            'capability' => $this->menu->getCapability(),
            'icon'       => $this->menu->getIcon(),
            'position'   => $this->menu->getPosition(),
            'menu_slug'  => sanitize_title( $this->menu->getPageTitle() ),
        ];

    }

    public function __invoke() {

        $props = $this->getProps();

        $callback = function() { 
            echo 'Settings Page'; 
            echo '<p>Object ID: ' . spl_object_id( $this ) . '</p>';
        };

        $this->menu_hook = add_menu_page(
                $props['page_title'],
                $props['menu_title'],
                $props['capability'],
                $props['menu_slug'],
                $callback,
                $props['icon'],
                $props['position']
            );

    }

}