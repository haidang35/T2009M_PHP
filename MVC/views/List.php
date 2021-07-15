
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

<h1>Danh sach sinh vien</h1>
<ul>

</ul>

<ul>
    <?php foreach ( $listStudents as $std ){ ?>

        <li> <a href="chitietsinhvien.php?id=<?php echo $std["id"];?>"> <?php echo "Name: ".$std["name"]." --- Tel: ".$std["tel"] ?> </a>
            <a href="suasinhvien.php?id=<?php echo $std["id"];?>">Edit</a>
            <a href="sinhvienxuatsac.php?id=<?php echo $std["id"];?>">SV xuat sac</a>
        </li>
    <?php } ?>

</ul>

</body>
</html>


