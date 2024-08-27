<?php

class Home extends Controller {
    public function index() {
        // echo 'home/index';
        $this->view('components/header');
        $this->view('home/index');
        $this->view('components/footer');
    }
}