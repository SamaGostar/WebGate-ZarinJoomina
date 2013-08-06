<?php

	include_once('zarin_nusoap.php');
	$some=$_POST['tedad'];
	$merchantID = $_POST['TransactionAccountID'];
	$amount =  $_POST['TransactionAmount']; //Amount will be based on Toman
    $amount=$some*$amount;
	$callBackUrl = $_POST['TransactionRedirectUrl']."?option=com_zarinjoomina&amount=".$amount."&des=".$_POST['TransactionDesc']."&merchantID=".$merchantID;

	$client = new nusoap_client('https://de.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
	$res = $client->call('PaymentRequest', 
	array(
					'MerchantID' 	=> $merchantID ,
					'Amount' 		=> $amount ,
					'Description' 	=> $_POST['TransactionDesc'] ,
					'Email' 		=> $_POST['mail'] ,
					'Mobile' 		=> $_POST['tel'] ,
					'CallbackURL' 	=> $callBackUrl
		)
	);
	
	//Redirect to URL You can do it also by creating a form
	Header('Location: https://www.zarinpal.com/pg/StartPay/' . $res->Authority . '/');

?>
