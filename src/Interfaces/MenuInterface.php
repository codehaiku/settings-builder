<?php
declare(strict_types=1);

namespace SettingsBuilder\Interfaces;

interface MenuInterface {
    
    public function setPageTitle( $title );

    public function getPageTitle();

    public function setMenuTitle( $title ) ;

    public function getMenuTitle();

    public function setCapability( $capability );

    public function getCapability();
    
}