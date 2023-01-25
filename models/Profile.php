<?php
class Profile{
    public static function getProfileImg(): string
    {
        $dbConn = new mysqli("localhost", "root", "","gotrip");

        $sql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";
        $result = $dbConn->query($sql );
        $row = $result->fetch_assoc();
        return '
        ';
    }
}