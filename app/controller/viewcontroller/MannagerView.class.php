<?php

class MannagerView {

    private static $_file = 'app/config/routes.json';
    private $_routes;
    private $_path;
    private $_routeError;
    
    public function __construct() {
        $this->_routes = array();
        $this->loadRoute();
    }

    public function loadView(string $key, $arguments) {
        if($this->is_exists_route($key)) {
            include $this->_path.$this->_routes[$key];
        } else {
            include $this->_path.$this->_routeError;
        }
    }

    private function is_exists_route(string $key): bool {
        foreach($this->_routes as $index => $value) {
            if($index == $key) {
                return true;
            }
        }
        return false;
    }

    private function loadRoute() {
        $json = loadFile(self::$_file);
        if ($json) {
            $this->_path = $json['path'];
            $this->_routeError = $json['error'];
            $this->_routes = $json['routes'];
        }
    }
    
}


?>