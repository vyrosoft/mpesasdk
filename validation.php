<?php 
header("Content-Type:application/json"); 
if (!isset($_GET["token"]))
{
echo "Technical error";
exit();
}
if ($_GET["token"]!='yoPURstrongPasswordGoeshere$')
{
echo "Invalid authorization";
exit();
}
/* 

92d1ad7123b3c4b24e027a770ffaea7e8d8f0863a08bb556399392ebdd28ca0c
here you need to parse the json format 
and do your business logic e.g. 
you can use the Bill Reference number 
or mobile phone of a customer 
to search for a matching record on your database. 
*/ 
/* 
Reject an Mpesa transaction 
by replying with the below code 
*/ 
echo '{"ResultCode":1, "ResultDesc":"Failed", "ThirdPartyTransID": 0}'; 
/* 
Accept an Mpesa transaction 
by replying with the below code 
*/ 
echo '{"ResultCode":0, "ResultDesc":"Success", "ThirdPartyTransID": 0}';
 
?>





