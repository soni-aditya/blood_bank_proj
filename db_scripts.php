<?php
require_once('../db_settings.php');

//Handling DB operations for Registeration page

class Register_Db_Operation{
    private function getConnection()
    {
        $db = new Db_Conn();
        $connetion=$db::connect_db();
        return $connetion;
    }
    public static function insertData($type_id,$uname,$email,$age,$gender,$mobile,$password,$address,$blood_group_id,$created,$modified)
    {
        $connection = self::getConnection();
        $sql = "INSERT INTO users(type_id,uname,email,age,gender,mobile,password,address,blood_group_id,created,modified) VALUES($type_id,'$uname','$email',$age,'$gender','$mobile','$password','$address','$blood_group_id','$created','$modified')";

        try{
            $stmt = $connection->prepare($sql);
            $stmt->execute();
        }
        catch (PDOException $e){
            return $e->getMessage();
        }
        return 1;
    }
}

class Login_Db_Operation{
    private function getConnection()
    {
        $db = new Db_Conn();
        $connetion=$db::connect_db();
        return $connetion;
    }
    public static function getData($username,$password){
        $connection = self::getConnection();
        $sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";

        try{
            $stmt = $connection->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();

            if (sizeof($results) >= 1){
                return $results[0];
            }
        }
        catch (PDOException $e)
        {
            return 2;
        }
        return 1;
    }
}



//class Db_Operation{
//    private function getConnection()
//    {
//        $db = new Db_Conn();
//        $connetion=$db::connect_db();
//        return $connetion;
//    }
//    public static function getData($dbname){
//        $connection = self::getConnection();
//        $sql = 'SELECT * FROM '.$dbname;
//        $stmt = $connection->prepare($sql);
//        $stmt->execute();
//
//        $results = $stmt->fetchAll();
//
//        foreach ($results as $result){
//            echo $result[1]."<br>";
//        }
//    }
//    public static function insertData($dbname){
//        $connection = self::getConnection();
//        $sql = 'INSERT INTO tableName(column1,column2) VALUES()';
//        $sql_new="DELETE FROM types WHERE name='TEST TYPE'";
//
//        $stmt = $connection->prepare($sql_new);
//        $stmt->execute();
//    }
//}
//$a=new Db_Operation();
//Db_Operation::insertData('types');