<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>testing</title>
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
</head>

<body>
    <?php
    echo"
    <form action='' method='POST'>
    pesan : <textarea name='pesan'></textarea><br>
    pesan : <textarea name='pesan2'></textarea><br>
    <input type='submit' value='kirim'>
    </form>
    ";
    
    if(isset($_POST['pesan']))
    if(isset($_POST['pesan2']))
    {
    $url="https://api.telegram.org/bot1374862774:AAHS8KC-wYropeui8mkKpC98eMMcP1jxSMw/sendMessage?chat_id=1005954201&parse_mode=HTML&text=".$_POST['pesan'].$_POST['pesan2'];
    
    $curlHandle=curl_init();
    curl_setopt($curlHandle, CURLOPT_URL, $url);
    curl_setopt($curlHandle, CURLOPT_HEADER, 0);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
    curl_setopt($curlHandle, CURLOPT_POST, 1);
    $result = curl_exec($curlHandle);
    curl_close($curlHandle);
    
    
    }
    
    ?>
<div class="content">
	<section class="content-header">
  	<i class="fa fa-home"></i> Home / <i class="fa fa-dashboard"></i> Dashboard / <b>wadagizig</b>
	</section>

	<div class="col-md-4">
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h4 class="box-title"><b>Telegram Message <i class="fa fa-send"></i></b></h4>
                  </div>

            <div class="box-body">
        	<form method="post" action="sendMessage.php">
                  <div class="form-group row">
                            <label class="col-md-4 col-form-label">Telegram ID</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="telegram_id" placeholder="Telegram ID">
                            </div>
                            </div>
                  <div class="form-group row">
                            <label class="col-md-4 col-form-label">Messages</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="message_text" placeholder="Custom Text Message">
                            </div>
                            </div>
                  <button type="submit" class="btn btn-primary pull-right">Send <i class="fa fa-send"></i></button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>