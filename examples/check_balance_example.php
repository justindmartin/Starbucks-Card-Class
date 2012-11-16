<?php
require_once('../classes/starbucksCard.php');

$myStarbucksCard = new starbucksCard('6069381974847839','01640273');
$balance = $myStarbucksCard->checkCardBalance();
echo 'Your card balance is '.$balance;
?>
