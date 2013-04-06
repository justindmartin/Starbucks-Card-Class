<?php
require_once('../classes/starbucksCard.php');

$myStarbucksCard = new starbucksCard('STARBUCKS_CARD_NUMBER_HERE','STARBUCKS_CARD_PIN_HERE');
$balance = $myStarbucksCard->checkCardBalance();
echo 'Your card balance is '.$balance;
?>
