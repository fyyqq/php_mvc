<?php

class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
    
    public function component($view) {
        require_once '../app/components/' . $view . '.php';
    }
}