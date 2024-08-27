<?php

class About extends Controller {
    public function index($name = "afiq", $age = "22") {
        // echo "Hi, my name is $name. I'm age in $age";

        $data["name"] = "Afiq";
        $data["age"] = 22;
        $this->view('components/header', $data);
        $this->view('about/index', $data);
        $this->view('components/footer', $data);
    }

    public function page() {
        // echo "about/page";
        $this->view('components/header');
        $this->view('about/page');
        $this->view('components/footer');
    }
}