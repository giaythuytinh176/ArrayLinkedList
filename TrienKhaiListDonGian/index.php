<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 27/10/2018
 * Time: 21:55
 */
include "ArrayList.php";
include_once "/Users/letam/Library/Mobile Documents/com~apple~CloudDocs/webroot/Inheritance/PointMoveablePoint/MoveablePoint.php";

$listInteger = new Array_List();
$listInteger->add(new MoveablePoint(5, 10, 50, 70));
$listInteger->add(new MoveablePoint(1, 2, 199, 222));
$listInteger->add(new MoveablePoint(3, 4, 333, 111));
//$listInteger->add(2);
//$listInteger->add(3);

//echo $listInteger->get(6);// error 6 ko nam trong trong chi so mang
//echo $listInteger->get(2);


print("<pre>" . print_r($listInteger, true) . "</pre>");