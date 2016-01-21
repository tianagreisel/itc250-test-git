<?php
//item-test.php

/*

This serves as a resource for our second group project

*/

include 'Item.php';

$items[] = new Item("Burrito", "Includes awesome sauce!", 7.95);
$items[] = new Item("Taco", "Includes cheese and lettuce", 3.95);
$items[] = new Item("Fried Ice Cream", "Includes free sprinkles!", 2.95);

echo '<pre>';
var_dump($items);
echo '</pre>';









