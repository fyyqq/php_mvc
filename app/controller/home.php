<?php

class Home extends Controller {
    public function index() {
        // echo 'home/index';

        $data['name'] = $this->model('User_model')->getUser();
        $data['age'] = '22';

        $this->view('components/header', $data);
        $this->view('home/index', $data);
        $this->view('components/footer', $data);
    }
}