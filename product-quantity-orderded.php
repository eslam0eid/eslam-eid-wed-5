<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="product-quantity-orderded.php" method="get">
    
<input type="text" value="" name="product_name">
<input type="submit" value="submit" name="submit">


</form>
<?php
if(isset($_GET['submit']))
{
$product_name = $_GET['product_name'];

$conn = mysqli_connect("localhost" , "root" , "" , "route34_wed");
$query = "SELECT  products.productName , orderdetails.orderNumber , SUM(orderdetails.quantityOrdered) FROM `orderdetails` JOIN products
ON orderdetails.productCode = products.productCode and productName = '$product_name'
GROUP BY productName";


$result = mysqli_query($conn , $query);

$orders= mysqli_fetch_all($result , MYSQLI_ASSOC);

print_r($orders);


}



?>

</body>
</html>