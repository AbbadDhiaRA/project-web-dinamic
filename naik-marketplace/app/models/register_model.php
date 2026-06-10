<?php
class register_model
{
    private $conn = CONN;
    public $error1 = false;
    public $error2 = false;
    public $error3 = false;
    

    
    function cekRegister($inputPost)
    {
        if (isset($inputPost["submit"])) {
            if ($this->register($inputPost) > 0) {
                echo "
            <script>
                alert('User baru berhasil ditambahkan');
                document.location.href='".BASEURL."/public/Login';
            </script>
        ";
            } else {
                echo mysqli_error($this->conn);
            }
        }
    }

    function register($inputPost)
    {
        $username = strtolower(stripcslashes($inputPost["username"]));
        $password = mysqli_real_escape_string($this->conn, $inputPost["password"]);
        $confirmPassword = mysqli_real_escape_string($this->conn, $inputPost["confirmPassword"]);

        $result = mysqli_query($this->conn, "SELECT username FROM users WHERE username = '$username'");

        if($username == '' || $password == '' || $confirmPassword == ''){
            $this -> error3 = true;
            return false;
        }

        if (mysqli_fetch_assoc($result)) {
            $this -> error1 = true;
            return false;
        }

        if ($password !== $confirmPassword) {
            $this -> error2 = true;
            return false;
        }

        

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($this->conn, "INSERT INTO users VALUES ('', '$username', '$password')");
        return mysqli_affected_rows($this->conn);
    }
}
