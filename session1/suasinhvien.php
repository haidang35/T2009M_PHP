<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $id = $_GET();
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
    $sql_txt = "select * from sinhviens where id = $id";
    $rs = $conn->query($sql_txt);
    $listStudents = [];
    if ($rs->num_rows > 0) { // kiem tra co du lieu hay ko
        while($row = $rs->fetch_assoc()) {
            $listStudents = $row;
        }
    }
    ?>
<form action="capnhapsinhvien.php" method="post">
    <input name="id" type="hidden" value="<?php echo $id ?>"/>
    <input name="name" type="text" placeholder="Name" value="<?php echo $listStudents["name"]  ?>"/>
    <input name="age" type="text" placeholder="age" value="<?php echo $listStudents["age"]  ?>"/>
    <input name="tel" type="text" placeholder="Tel" value="<?php echo $listStudents["tel"]  ?>"/>
    <button type="submit">Submit</button>
</form>

</body>
</html>
