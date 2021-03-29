



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="latest-order.php" method="get">
    
    <input type="number" value="" name="num">
    <input type="submit" value="submit" name="submit">

    </form>
    <?php

if(isset($_GET['submit']))
{
$num = $_GET['num'];

$conn = mysqli_connect("localhost" , "root" , "" , "route34_wed");
$query = "SELECT orderNumber FROM `orders`
ORDER BY orderNumber DESC
LIMIT $num";


$result = mysqli_query($conn , $query);

$orders= mysqli_fetch_all($result , MYSQLI_ASSOC);

print_r($orders);

}

?>

</body>
</html>






