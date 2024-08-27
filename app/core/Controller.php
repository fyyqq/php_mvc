<?php

class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
<<<<<<< HEAD
    
    public function component($view) {
        require_once '../app/components/' . $view . '.php';
    }
}
=======
}
>>>>>>> f08a6e0ed37f42b9262090f69062484cf823f53e
