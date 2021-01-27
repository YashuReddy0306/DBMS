<?php
if(isset($_POST['submit'])){
   $m=$_POST['mob'];
   $msg=$_POST['msg'];

  $message = urlencode($msg);
 
 $authKey="";
 $senderId="";
 $route=4;
 $postData=array(
  'authKey'=> $authKey,
  'mobiles'=> $m,
  'message'=> $message,
  'sender'=> $senderId,
  'route'=> $route
 );
 
  $url="http://api.msg91.com/api/sendhttp.php";
 
  // Send the POST request with cURL
  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL=> $url,
    CURLOPT_RETURNTRANSFER=> true,
    CURLOPT_POST=> true,
    CURLOPT_POSTFIELDS=>$postData
  ));
  
  curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  $response= curl_exec($ch);
  if(curl_errno($ch))
  {
    echo 'error:' . curl_error($ch);
  }
  curl_close($ch);
}
?>

<form action="extra.php" method="post">
  <div class="form-group">
    <label for="tel">phone:</label>
    <input type="number" name="mob" class="form-control" id="phone">
  </div>
  <div class="form-group">
    <label for="msg">message:</label>
    <textarea class="form-control" name="msg" ></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>