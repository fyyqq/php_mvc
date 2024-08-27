<?php

class Student extends Controller {
    public function index() {
        $data["title"] = "List Of Students";
        $data["students"] = $this->model("Student_model")->getStudents();

        $this->view("components/header", $data);
        $this->view("student/index", $data);
        $this->view("components/footer", $data);
    }
}