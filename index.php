
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Ayak İşleri</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  
<!-- harita -->
  
<div class="img-responsive" id="map" style="width:1000px;height:250px"> </div>

<script>
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.12),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZTbrle2noYDhHo0Oxli7byp5lqHNUAr0&callback=myMap"></script>

<br>

  <!-- formumsu bir şey -->

<div class="container">
  <h2>ayak işlerine itinayla koşulur </h2>
  <form class="form-inline" action="/action_page.php">
    <div class="form-group">
      <label for="ad">Ad:</label>
      <input type="text" class="form-control" placeholder="Adınız" name="FirstName">
    </div>
    <div class="form-group">
      <label for="soyad">Soyad:</label>
      <input type="text" class="form-control" placeholder="Soyadınız" name="LastName">
    </div>
    <div class="form-group">
      <label for="adres">Adres:</label>
      <input type="text" class="form-control" placeholder="Adresiniz" name="Address">
    </div>
    <div class="form-group">
      <label for="city">Şehir:</label>
      <input type="text" class="form-control" placeholder="Şehriniz" name="Vity">
    </div>
    <div class="form-group">
      <label for="problem">Neyi Halledelim?:</label>
      <input type="text" class="form-control" placeholder="Sebastian yetiş!!" name="Description">
    </div>
    <button type="submit" class="btn btn-default">YOLLA</button>
  </form>
</div>
<br>

  <!-- yolla gifi -->
  
<div class="container">
  
  <img class="img-responsive" src="http://68.media.tumblr.com/8923ff26df4bb9872638f4eb8ae2288b/tumblr_os9azijpTE1sms489o1_500.gif" alt="yolla kaderimi yolla"> 
  
</div>

<br>

<p>Hadi insh.</p>

</body>
</html>


