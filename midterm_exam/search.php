<?php
session_start();
include 'db_connect.php';
$sql = "select CategoryID, CategoryName from categories";
try{
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}
catch(Exception $e){
    echo $e->getMessage();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">  
        <option value="">Beverages</option>
        <option value="1">Condiments</option>
        <option value="2">Confections</option>
        <option value="3">Dairy Products</option>
        <option value="4">Grains/Cereals</option>
        <option value="5">Meat/Poultry</option>
        <option value="6">Produce</option>
        <option value="7">Seafood</option>
          <!-- add options hear ex.
          <option value="1">Beverages</option>
          -->
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>