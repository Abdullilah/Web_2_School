<?php
    error_reporting(0);
    mysql_connect("localhost","root","abdullilah706");
    mysql_select_db("loginStudents");

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    
    
    $result = mysql_query("SELECT * FROM students WHERE stu_username = '$username' AND stu_password = '$password'") 
              or die("Faild query in the database" . mysql_error());

    $row = mysql_fetch_array($result);

    if($row["stu_username"] == $username && $row["stu_password"] == $password){
        session_start();
        $_SESSION['newSession'] = $row["stu_id"];
        header("Location:index.php");
        exit();
    } else{
        session_start();
        $_SESSION['newSession'] = null;
        echo "Sorry ... Your Username or Password are worng" . "<br>";
        echo "Please try again";
    }

?>