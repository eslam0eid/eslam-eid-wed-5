<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="search-customers.php" method="get">
    
    <input type="text" value="" name="search_keyword">
    <input type="submit" value="submit" name="submit">
    
    
    </form>
    <?php
if(isset($_GET['submit']))
{
$search_keyword = $_GET['search_keyword'];

$conn = mysqli_connect("localhost" , "root" , "" , "route34_wed");
$query = "SELECT customerName FROM customers
WHERE customerName LIKE '%$search_keyword%' "; 


$result = mysqli_query($conn , $query);

$orders= mysqli_fetch_all($result , MYSQLI_ASSOC);

print_r($orders);


}
?>
    
</body>
</html>