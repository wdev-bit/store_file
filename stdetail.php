<?php

require_once "db.php";
$data = $_POST;
if($data['uid'] == '')
{
    $returnArr = array(
        'ResponseCode'=>'401',
        'Result'=>'false',
        'ResponseMsg'=>'Something went wrong'
    );
}
else
{
    $uid        = $data['uid'];
    $trx_id     = $data['trx_id'];
    $reference  = $data['reference'];
    $amount     = $data['amount'];
    $channel    = $data['channel'];
    $card_type  = $data['card_type'];
    $bank       = $data['bank'];
    $c_code     = $data['country_code'];
    $currency   = $data['currency'];
    $message    = $data['message'];
    $fees       = $data['fees'];
    $status     = $data['status'];
    $date       = $data['date'];
    $con->query("INSERT INTO transactions(`user_id`,`trx_id`,`reference`,`amount`,`channel`,`card_type`,`bank`,`country_code`,`currency`,`message`,`fees`,`status`,`date`) VALUES('".$uid."','".$trx_id."''".$reference."''".$amount."''".$channel."''".$card_type."''".$bank."''".$c_code."''".$currency."''".$message."''".$fees."''".$status."''".$date."')");
    $returnArr = array(
        'ResponseCode'=>'200',
        'Result'=>'true',
        'ResponseMsg'=>'Transaction detail saved successfully'
    );
}

echo json_encode($returnArr);

?>