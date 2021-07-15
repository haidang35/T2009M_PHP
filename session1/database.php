<?php

function connectDB() {
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
    return $conn;
}

function queryDB($txt_sql) {
    $conn = connectDB();
    $rs = $conn->query($txt_sql);
    $list = [];
    if($rs->num_rows > 0) {
        while($row = $rs->fetch_assoc()) {
            $list[] = $row;
        }
    }
    return $list;
}

function updateDB($txt_sql) {
    $conn = connectDB();
    return $conn->query($txt_sql) === true;
}



