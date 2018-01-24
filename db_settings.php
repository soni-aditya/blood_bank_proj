<?php
class Db_Conn{
    static function connect_db(){
        $HOST="localhost";
        $DB="blood_bank";
        $USERNAME="root";
        $PASSWORD="mysql";
        $connection = new PDO("mysql:host=".$HOST.";dbname=".$DB, $USERNAME, $PASSWORD);

        return $connection;
    }
}
