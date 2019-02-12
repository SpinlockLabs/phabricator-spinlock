<?php

class PhackagesApplication extends PhabricatorApplication {
    protected $baseURI = '/phackages/';

    public function getBaseURI() {
        return $this->baseURI;
    }

    public function setBaseURI($value) {
        $this->baseURI = $value;
    }

    public function getShortDescription() {
        return pht('Package tracker');
    }

    public function getIcon() {
        return 'fa-truck';
    }

    public function getName() {
        return pht('Phackages');
    }

    public function getApplicationGroup() {
        return self::GROUP_UTILITIES;
    }

    public function getRoutes() {
        return array(
            '/phackages/' => $this->getMainRoutes()
        );
    }

    public function getMainRoutes() {
        $routes = array(
            '' => 'PhackagesHomeController'
        );

        return $routes;
    }
}
