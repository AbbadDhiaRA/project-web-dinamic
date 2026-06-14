<?php

class homepage_model
{
    function select($perintahsql)
    {
        $result = mysqli_query(CONN, $perintahsql);
        $wadah  = [];
        while ($item = mysqli_fetch_assoc($result)) {
            $wadah[] = $item;
        }
        return $wadah;
    }

    

}
