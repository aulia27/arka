<?php
$arr = array(
		'itemId' => '12341822',
		'itemName' => 'FGX Flannel Shirt',
		'price' => 195000,
		'availableColorAndSize' => array(
			['color' => 'blue-black', 'size' => 'M','L','XL'],
			['color' => 'black-white', 'size' => 'L']),
		'freeShiping' => false,
);
$json = json_encode($arr)
;echo $json;
?>