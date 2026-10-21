<?php
    session_start();
    include ("db.php");

    $defaultUsername = "john123";
    $defaultPassword = "password123";

    $errors = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)){
            $errors[] = "Username is required";
        }

        $sql = "SELECT * FROM 'users' WHERE 'username' = '$username'";
        $result = $conn->pg_query($sql);

        if($result->){}
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method = "POST">

        <label for = "Username"> 
            Enter your Username 
            <input type = "text" name = "username">
        </label>

        <label for = "Password"> 
            Enter your Password
            <input type = "password" name = "password">
        </label>

        <button type = "submit"> Submit </button>

    </form>
</body>

</html>