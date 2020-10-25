<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Chat</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container">
  <header>
  <h2>test</h2>
</header>
<section class='content-header'>
   
  
   <div class='container'>
   <h4> Isi data dengan benar sebelum dikirim </h4>
 <div class='row'>
     <div class='col-md-3>
           test
     </div>
     <div class='col-md-6' >
<?php
echo"



      <form action='' method='POST'>
        <div class='form-group'>
          <label for='nama'>Nama:</label>
            <input type='text' class='form-control' id='email' placeholder='Nama' name='pesan' required>
        </div>
        <div class='form-group'>
          <label for='sel1'>Alamat:</label>
          <select class='form-control' placeholder='alamat' id='sel1' name='pesan2'>
          <option>Aceh</option>
          <option>Bali</option>
          <option>Banten</option>
          <option>Bengkulu</option>
          <option>Gorontalo</option>
          <option>Jakarta</option>
          <option>Jambi</option>
          <option>Jawa Barat</option>
          <option>Jawa Tengah</option>
          <option>Jawa Timur</option>
          <option>Kalimantan Barat</option>
          <option>Kalimantan Selatan</option>
          <option>Kalimantan Tengah</option>
          <option>Kalimantan Timur</option>
          <option>Kalimantan Utara</option>
          <option>Kepulauan Bangka Belitung</option>
          <option>Kepulauan Riau</option>
          <option>Lampung</option>
          <option>Maluku</option>
          <option>Maluku Utara</option>
          <option>Nusa Tenggara Barat</option>
          <option>Nusa Tenggara Timur</option>
          <option>Papua</option>
          <option>Papua Barat</option>
          <option>Riau</option>
          <option>Sulawesi Barat</option>
          <option>Sulawesi Selatan</option>
          <option>Sulawesi Tengah</option>
          <option>Sulawesi Tenggara</option>
          <option>Sulawesi Utara</option>
          <option>Sumatra Barat</option>
          <option>Sumatra Selatan</option>
          <option>Sumatra Utara</option>
          <option>Yogyakarta</option>
          </select>
        </div>
        <div class='input-group'>
  <div class='input-group-prepend'>
    <span class='input-group-text'>First and last name</span>
  </div>
  <input type='text' aria-label='First name' class='form-control' name='pesan4'>
  <input type='text' aria-label='Last name' class='form-control' name='pesan5'>
</div>
              <div class='form-group'>
                <label for='number'>Nomor hp:</label>
                <input type='number' class='form-control' id='email' placeholder='Nomor Handphone' name='pesan3' required>
              </div>

              <button type='submit' class='btn btn-primary'>Send <i class='fa fa-send'></i></button>
          
        </form>
      </div>
    <div class='col-md-3></div>
  </div>
</div>
</div>
</div>

";

if(isset($_POST['pesan']))
if(isset($_POST['pesan2']))
if(isset($_POST['pesan3']))
if(isset($_POST['pesan4']))
if(isset($_POST['pesan5']))
{
$url="https://api.telegram.org/bot1080582433:AAGzRaidRvUe3SuMBzCtIoTau9weoi8d-4Y/sendMessage?chat_id=143660853&parse_mode=HTML&text=".'R.'.$_POST['pesan'].'/'.$_POST['pesan2'].'/'.$_POST['pesan3'].'/'.$_POST['pesan4'].'.'.$_POST['pesan5'].'.1234';

echo "<script>alert('Pesan berhasil terkirim!'); window.location.href = './';</script>";
//.$_POST['pesan']
//id chat web bot 1374862774
//ab reload bot 1005954201:AAGXBEjXIuA1A8Kkcc6oySEnpSza-lkRlkA
//id adambasri  


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
  </div>

</body>

</html>