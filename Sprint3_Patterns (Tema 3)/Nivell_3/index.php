<?php
include'BmwCouponGenerator.php';
include'MercedesCouponGenerator.php';
include'carCouponGenerator.php';

$bmwCoupon = new BmwCouponGenerator();
echo $bmwCoupon->generateCoupon() . "\n";

$mercedesCoupon = new MercedesCouponGenerator();
echo $mercedesCoupon->generateCoupon() . "\n";
?>