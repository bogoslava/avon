<?php
class DB
{
    function DataBase(){
        $servername = "localhost";
        $username = "id3301712_ivan4ov4";
        $password = "ZXCzxc71951055";
        $dbname = "id3301712_bogiwebsite";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = array();
        array_push($result,$dbname);
        array_push($result,$conn);
        return $result;
    }
}
// $foo = new DB();
// $res = $foo->{'DataBase'}();
// var_dump($res);
?>