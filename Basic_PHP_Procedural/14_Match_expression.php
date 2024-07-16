<?php
// Match expression
/* this work for php v=8.0
$paymentStatus = 1;
match($paymentStatus){
    1 => print 'paid', 
    2 => print 'payment declined',
    default => print 'unknown payment',
    // out put = paid
};
$paymentDisplay=match($paymentStatus){
    1 => print 'paid', 
    2 => print 'payment declined', 
    default => print 'unknown payment',
};
echo $paymentDisplay; // paid1

$paymentDisplay=match($paymentStatus){
    1 => 'paid', 
    2 => 'payment declined',
    default => 'unknown payment', 
};
echo $paymentDisplay; // paid

$paymentDisplay=match($paymentStatus){
    1 => 'paid', 
    2,3 => 'payment declined', // 2,3 means 2 || 3
    default => 'unknown payment',
};
echo $paymentDisplay; // paid

$paymentStatus='1';
$paymentDisplay=match($paymentStatus){
    1 => 'paid', 
    2,3 => 'payment declined', // 2,3 means 2 || 3
    default => 'unknown payment',
};
echo $paymentDisplay; // unknown payment

$paymentStatus=false;
$paymentDisplay=match($paymentStatus){
    1 > 2 => 'paid', 
    2,3 => 'payment declined', // 2,3 means 2 || 3
    default => 'unknown payment',
};
echo $paymentDisplay; // paid
*/
?>