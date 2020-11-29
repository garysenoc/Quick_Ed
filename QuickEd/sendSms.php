
<?php
    require_once('smsGatewayV4.php');
//HTML
?>
<form method='post' action="sendSms.php">
    <input type="text" name="msg" id="msg" placeholder="Message">
    <input type="number" name="reciever" id="receiver" placeholder="Reciever's Phone Number">
    <button type="submit" name='send'>Send</button>

</form>

<form action="sendSms.php" method="post">
    <input type="text" name="msg" id="msg" placeholder="Message">
    <p>Recievers</p>
    <input type="checkbox" name="recievers[]" value="09551264400" />Josephus Mabanag<br />
    <input type="checkbox" name="recievers[]" value="09098564986" />Gary Senoc<br />
    <input type="checkbox" name="recievers[]" value="09617559048" />Jam Dale<br />
    <input type="submit" name="sendToMany" value="Send" />

</form>
<?php
if(isset($_POST['send'])){
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTYwNjQ4NDc4OSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjg1Njc2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.W4GOq54kz6IikMVTTP_AtmFRwXgR7MWsFFkywoR1Rdc";

    $phone_number = $_POST['reciever'];
    $message = $_POST['msg'];
    $deviceID = 121845;
    $options = [];

    $smsGateway = new SmsGateway($token);
    $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
}
if(isset($_POST['sendToMany'])){
    $recievers = $_POST['recievers'];
    $n = count($recievers);
    for($i = 0; $i < $n; $i++){
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTYwNjQ4NDc4OSwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjg1Njc2LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.W4GOq54kz6IikMVTTP_AtmFRwXgR7MWsFFkywoR1Rdc";

        $phone_number = $recievers[$i];
        $message = $_POST['msg'];
        $deviceID = 121845;
        $options = [];

        $smsGateway = new SmsGateway($token);
        $result = $smsGateway->sendMessageToNumber($phone_number, $message, $deviceID, $options);
    }
}

// print_r($result);
?>
