<?php


class Student_model extends Controller {
    private $db;
    
    public function __construct() {
        require_once __DIR__ . '/../core/Database.php';
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getStudents() {
        return $this->db->select('customers', [
            "id",
            "name",
            "ic_no",
            "country",
            ]) ?? "";
        }

        public function addStudents($name, $ic_number, $country) {
            return $this->db->insert("customers", [
            "name" => $name,
            "ic_no" => $ic_number,
            "country" => $country,
        ]);
    }
    public function deleteStudents($id) {
        return $this->db->delete("customers", [
            "id" => $id
        ]);
    }
}