<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR</title>
</head>

<body>
    <?php
    if($_POST['qrcode']){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 2,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer 7e5ee154961dd715793dfc8d4901538e",
                "Content-Type: application/json",
            ),
            CURLOPT_POSTFIELDS => json_encode(array (
          'type' => 'link',
          'data' => 'https://google.com',
          'background' => 'rgb(255,255,255)',
          'foreground' => 'rgb(0,0,0)',
          'logo' => 'https://site.com/logo.png',
        )),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
$huy= json_decode($response);
// var_dump($huy);
}
    ?>
  <h2>Tạo Mã QR</h2>
  <form action="#" method="post">
    <label for="">STK</label>
    <input type="text" name="stk" >
    <label for="">Số Tiền</label>
    <input type="text" name="sotien" >
    <label for="">Nội Dung</label>
    <input type="text" name="noidung" >
   <input type="submit" name="qrcode" value="Tao QR">

  </form>  
</body>

<img src="<?=$huy->link;?>" alt="">
ext | vcard | link | email | phone | sms | wifi

</html>