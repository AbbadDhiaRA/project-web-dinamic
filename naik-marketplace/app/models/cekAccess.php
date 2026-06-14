<?php
class cekAccess
{
    function __construct()
    {
        if (isset($_COOKIE['x']) && isset($_COOKIE['key'])) {
            $id = $_COOKIE['x'];
            $key = $_COOKIE['key'];
            $result = mysqli_query(CONN, "SELECT username FROM users WHERE id = $id");
            $item = mysqli_fetch_assoc($result);

            if ($key === hash('sha256', $item['username'])) {
                $_SESSION['login'] = ucwords(strtolower($item['username']));
            }
        };
        
    }
}
