<?php

class homepage_model
{
    private $conn;

    function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'naik_marketplace');
    }

    function select($perintahsql)
    {
        $result = mysqli_query($this -> conn, $perintahsql);
        $wadah  = [];
        while ($item = mysqli_fetch_assoc($result)) {
            $wadah[] = $item;
        }
        return $wadah;
    }
}
