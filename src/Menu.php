<?php
declare(strict_types=1);

namespace SettingsBuilder;

use SettingsBuilder\Interfaces\MenuInterface;

class Menu implements MenuInterface{

    protected $page_title;
    protected $menu_title;
    protected $capability;
    protected $icon;
    protected $position;

    public function __construct() {
        
    }

    public function setPageTitle( $title ) {
        $this->page_title = $title;
        return $this;
    }

    public function getPageTitle() {
        return $this->page_title;
    }

    public function setMenuTitle( $title ) {
        $this->menu_title = $title;
        return $this;
    }

    public function getMenuTitle() {
        return $this->menu_title;
    }

    public function setCapability( $capability ) {
        $this->capability = $capability;
        return $this;
    }

    public function getCapability() {
        return $this->capability;
    }

    public function setIcon( $icon ) {
        $this->icon = $icon;
        return $this;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setPosition( $position ) {
        $this->position = $position;
        return $this;
    }

    public function getPosition() {
        return $this->position;
    }

}