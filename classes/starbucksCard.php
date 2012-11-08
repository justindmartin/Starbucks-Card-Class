<?php
class starbucksCard{
	function __Construct($cardNum,$cardPin){
		$this->cardNum = $cardNum;
		$this->cardPin = $cardPin;
	}
	function checkCardBalance(){
    			$ch = curl_init();
    			$balanceURL = 'https://www.starbucks.com/card/guestbalance';
	    		curl_setopt($ch,CURLOPT_USERAGENT, 'Mozilla Firefox');
    			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	   		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    			curl_setopt($ch,CURLOPT_URL,$balanceURL);
    			curl_setopt($ch, CURLOPT_POST, "application/x-www-form-urlencoded");
	    		curl_setopt($ch, CURLOPT_POST, true);
    			curl_setopt($ch, CURLOPT_POSTFIELDS, 'Card.Number='.$this->cardNum.'&Card.Pin='.$this->cardPin);
    			$rawPage = curl_exec($ch);
	    		curl_close($ch);
    			$rawPage = trim($rawPage);
    			preg_match_all("/<span class=\"fetch_balance_value\">(.*?)<\/span>/si",$rawPage,$match);
	    		return $match[0][0];
	}
}
?>
