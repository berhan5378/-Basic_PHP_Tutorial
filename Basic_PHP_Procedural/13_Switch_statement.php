<?php
//Switch statement

$paymentStatus = 'paid';

switch($paymentStatus){
    case 'paid':
        echo 'paid';
        break;

    case 'declined':
        echo 'payment Declined';
        break;
        
    default:
    echo 'unknown payment status';    
}

/*
if the first case is true and doesn't have break then the out put is all case until the break of other case
$paymentStatus = 'paid';

switch($paymentStatus){
    case 'paid':
        echo 'paid';

    case 'declined':
        echo 'payment Declined';
        break;
        
    default:
    echo 'unknown payment status';    
}
// the out put is paid payment Declined
*/

$paymentStatus = 'rejected';

switch($paymentStatus){
    case 'paid':
        echo 'paid';
        break;

    case 'rejected':
    case 'declined':
        echo 'payment Declined'; //the out put is payment Declined if $paymentStatus = 'rejected' || $paymentStatus = 'Declined';
        break;
        
    default:
    echo 'unknown payment status';    
}
echo "\n";
$paymentStatuses = [1,3];
foreach($paymentStatuses as $paymentStatus){
   

switch($paymentStatus){
    case 1: // or case '1':
        echo 'paid';
        break;

    case 2:
    case 3:
        echo 'payment Declined';  
        break;
        
    default:
    echo 'unknown payment status';    
}
echo "\n";
/*
paid
payment Declined
*/
}
$paymentStatuses = [1,3];
foreach($paymentStatuses as $paymentStatus){
   

switch($paymentStatus){
    case 1: // or case '1':
        echo 'paid';
        continue 2; // continue;==break; but continue 2!=break

    case 2:
    case 3:
        echo 'payment Declined';  
        break;
        
    default:
    echo 'unknown payment status';    
}
echo "\n";
/*
paidpayment Declined
*/
}
?>