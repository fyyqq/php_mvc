<?php  

use Medoo\Medoo;

class Database {
    private $type = DB_TYPE;
    private $host = DB_HOST;
    private $name = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $connection;

    public function __construct() {
        $this->connection = new Medoo([
            'type' => $this->type,
            'host' => $this->host,
            'database' => $this->name,
            'username' => $this->user,
            'password' => $this->pass
        ]);
    }

    public function getConnection() {
        return $this->connection;
    }
}