<?php

class About {
    public function index($name = "afiq", $passion = "php developer") {
        echo "Hi, my name is $name. I'm passion in $passion";
    }

    public function page() {
        echo "about/page";
    }
}