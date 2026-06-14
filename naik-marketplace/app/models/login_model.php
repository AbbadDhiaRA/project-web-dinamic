<?php
session_start();
class login_model
{
    public $error = true;
    public $username;

    

    function cekLogin()
    {

        if (isset($_POST["submit"])) {
            $loginUsername = mysqli_real_escape_string(CONN, $_POST["username"]);
            $loginPassword = $_POST["password"];

            $result = mysqli_query(CONN, "SELECT * FROM users WHERE username = '$loginUsername'");
            if (mysqli_num_rows($result) === 1) {
                $item = mysqli_fetch_assoc($result);

                //Kekuatan admin
                if (strtolower($loginUsername) == 'superadmin') {
                    $_SESSION["loginAdmin"] = true;
                }

                if (password_verify($loginPassword, $item["password"])) {
                    // CEK REMEMBER ME

                    if (isset($_POST["remember"])) {
                        setcookie('x', $item['id'], time() + 99999);
                        setcookie('key', hash('sha256', $item['username']), time() + 99999);
                    }

                    
                    $_SESSION["login"] = ucwords(strtolower($loginUsername));
                    header("Location: " . BASEURL . "/public/index.php");
                    exit;
                }
            }
            return $this->error;
        }
    }
}
