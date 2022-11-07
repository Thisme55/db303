<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        $conn = new mysqli('db303-mysql', 'root', 'P@ssw0rd', 'northwind');
        if($conn->connect_errno) {
            die($conn->connect_error);
        }
        $sql = 'select * from categories';
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
?>
    <li><?=$row['CategoryName']?></li>
        <?php
        }
        $conn->close();
        ?>
    </ul>




    
    <ol>
        <?php
        $conn = new mysqli('db303-mysql', 'root', 'P@ssw0rd', 'northwind');
        if($conn->connect_errno) {
            die($conn->connect_error);
        }
        $sql = 'select * from categories';
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
?>
    <li><?=$row['CategoryName']?></li>
        <?php
        }
        $conn->close();
        ?>
    </ol>
</body>
</html>