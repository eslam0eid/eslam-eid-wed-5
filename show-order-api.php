
<form action="show-order-api.php" method="get">
    
    <input type="number" value="" name="order-number">
    <input type="submit" value="submit" name="submit">
    
    
    </form>

<?php
if(isset($_GET['submit']))
{
$orderNumber = $_GET['order-number'];

$conn = mysqli_connect("localhost" , "root" , "" , "route34_wed");


$query = "SELECT * FROM orders 
where orderNumber = $orderNumber 
";


$result = mysqli_query($conn , $query);

$customers = mysqli_fetch_all($result , MYSQLI_ASSOC);

header("Content-Type:Application/json");

echo json_encode($customers);
}
?>