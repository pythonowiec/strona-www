<?php
    session_start();
    require_once "conn1.php";

    $conn = @new mysqli($hn, $un, $pw, $db_name);

    if($conn->connect_errno != 0)
    {
        echo "error ".$conn->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM pythonowcy WHERE login='$login' AND password='$pass'";
        if($result = @$conn->query($query))
        {
            $number = $result->num_rows;
            if($number > 0)
            {
                $row = $result->fetch_assoc();
                $_SESSION['user'] = $row['login'];


                unset($_SESSION['error']);
                $result->close();
                header('Location: content.php');
            }
            else
            {
                $_SESSION['error'] = '<span style="color: red">Nie prawidłowy login lub hasło';
                header('Location: login1.php');
            }
        }
        $conn->close();
    }

?>
    