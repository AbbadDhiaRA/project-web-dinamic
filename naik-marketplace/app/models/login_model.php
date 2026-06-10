<?php
session_start();
class login_model
{
    public $error = true;
    public $username;
    function cekLogin()
    {
        if (isset($_SESSION["login"])) {
            header("Location: " . BASEURL . "/public/index.php");
            exit;
        }

        if (isset($_POST["submit"])) {
            $loginUsername = $_POST["username"];
            $loginPassword = $_POST["password"];

            $result = mysqli_query(CONN, "SELECT * FROM users WHERE username = '$loginUsername'");
            if (mysqli_num_rows($result) === 1) {
                $item = mysqli_fetch_assoc($result);
                if (strtolower($loginUsername) == 'superadmin') {
                    $_SESSION["loginAdmin"] = true;
                }

                if (password_verify($loginPassword, $item["password"])) {
                    // CEK REMEMBER ME

                    if (isset($_POST["remember"])) {
                        setcookie('login', 'true', time() + 999999);
                    }

                    header("Location: " . BASEURL . "/public/index.php");
                    $_SESSION["login"] = ucwords(strtolower($loginUsername));
                    exit;
                }
            }
            return $this->error;
        }
    }
}
