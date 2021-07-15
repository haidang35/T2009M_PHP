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
    $id = $_GET["id"];
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
    $sv = [];
    if ($rs->num_rows > 0) { // kiem tra co du lieu hay ko
        while($row = $rs->fetch_assoc()) {
            $sv = $row;
        }
    }
    if($sv == null) header("Location: list.php");
    ?>
    <ul>
        <?php foreach ($sv as $key => $value) { ?>
        <li> <?php echo $key." --".$value;  ?></li>
        <?php } ?>
    </ul>
</body>
</html>