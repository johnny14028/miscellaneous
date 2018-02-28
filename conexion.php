<?php

class conexion {

    private $mysql;
    private $mysql_options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET sql_mode="TRADITIONAL"',];
    private $mysql_access = [
        'local' => [
            'username' => 'root',
            'password' => 'root',
            'host' => '127.0.0.1',
            'port' => 3306,
            'database' => 'test'
        ]
    ];
    private $enviroment = 'local';

    public function __construct() {
        $this->mysql = new PDO('mysql:host=' . $this->mysql_access[$this->enviroment]['host'] . ';dbname=' . $this->mysql_access[$this->enviroment]['database'], $this->mysql_access[$this->enviroment]['username'], $this->mysql_access[$this->enviroment]['password'], $this->mysql_options);
    }

    public function query($sql) {
        $returnValue = [];
        $returnValue = $this->mysql->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $returnValue;
    }

}
