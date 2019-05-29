<?php

class ConnectionManager {

    private $_host = '192.168.99.100';
    private $_username = 'root';
    private $_password = 'pass123';
    private $_database = 'training';
    
    protected $connection;

    public function __construct() {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }

}