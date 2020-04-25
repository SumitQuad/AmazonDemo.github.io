<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'amazondb');

// db name:- amazondb
// 	table name:- amazontable


$query = " SELECT `Name`,`Thumbnail1`,`Thumbnail2`,`Thumbnail3`,`Thumbnail4`,`Image`, `MRP`, `DealOfDay`,
`Delivered By`,`FastestDelivery`,`Sold By`,`Description1`,`Description2`,`Description3`,`Description4`,
`Description5`,`Description6`,`Description7`
 FROM `amazontable` where Id = '$_GET[pid]'";

$queryfire = mysqli_query($con, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
        ?>

<h1><?php echo $product['DealOfDay'];  ?></h1>