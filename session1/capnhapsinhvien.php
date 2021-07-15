<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $tel = $_POST["tel"];
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "t2009m_php";
    $conn = new mysqli($severname, $username, $password, $dbname);
    // kiem tra ket noi
    if($conn->connect_error) {
        die("Connect err ...");
    }
    echo "Connected database successfully";
      $sql_tex = "update table sinhviens set name='$name', age=$age, tel='$tel'";
       if($conn->query($sql_tex) === true) {
           header( "Location: list.php");
       }else {
            echo "cap nhap that bai";
        }
?>
