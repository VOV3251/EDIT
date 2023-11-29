<?php 
$USERNAME = filter_input(INPUT_POST, 'USERNAME');
$password = filter_input(INPUT_POST, 'password');

if (!empty($USERNAME)) {
    if (!empty($password)) {
        $host = "localhost";
        $dbUSERNAME = "root";
        $dbpassword = "";
        $dbname = "con";

        $conn = new mysqli ($host, $dbUSERNAME, $dbpassword, $dbname);

        if (mysqli_connect_error()) {
            die('connect Error ('.mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO nect(USERNAME, password) 
            values('$USERNAME','$password')";
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }
            else{
                echo "Error".$sql."<br>".$conn->error;
            }
            $conn->close();

        }

    }
    else{
        echo "Username should not be empty";
        die();
    }

}
else{
    echo "Username should not be empty";
    die();
}


?>