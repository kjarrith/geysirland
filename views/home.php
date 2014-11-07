<!DOCTYPE HTML>
<html>

<head>
  <meta name="author" content="Viktor Thulin: 692-6795">
  <meta name="keywords" content="Geysirland, Tourist information, Geysir Car rental, Iceland">
  <meta name="description" content="Tourist Information">
  <meta property="og:title" content="Geysirland.is: Tourist Information" >

  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Geysirland</title>
</head>

<body>

<!--HEADER-->

<div id="header">
<div id="logo"><a href="#section1"><IMG HEIGHT="50" WIDTH="300" SRC="img/geysirland.jpg"></a></div>​
  <div id="ul-wrapper">
    <ul>
      <a href="#section2"><li>Find us in Reykjavík</li></a>
      <a href="#section3"><li>What to do in Iceland</li></a>
      <a href="#section4"><li>Rent a Car</li></a>
      <a href="#section5"><li>About Us</li></a>
    </ul>
  </div>
</div>


<!--SECTIONS-->
<div id="section1"> <a name="section1">

<h1>Want to take a FREE tour around Downtown Reykjavík? <br> Sign up here!</h1>

  <div class="emailform">
      <form action="MAILTO:info@geysirland.is" method="post" enctype="text/plain">
      <p>Name:</p>
      <input class="frontInput" type="text" name="name" placeholder="f.x. Gunnar Nelson"><br>
      <p>E-mail:</p>
      <input class="frontInput" type="text" name="mail" placeholder="f.x. Gunnar@Nelson.com"><br>
      <p>Day of Arrival:</p>
      <input class="frontInput" type="text" name="dayofarrival" placeholder="f.x. dd/mm/yy"><br><br>
      <input class="frontSubmit" type="submit" value="Send" style="margin-right:35px; color:#333;">
      <input class="frontSubmit" type="reset" value="Reset" style="color:#666;">
    </form>
  </div>

</div>

<div id="section2"><a name="section2"><h1>Come visit us in Harpa,<br> the Music and Conference hall. <br> We have free Wi-Fi!</h1></div>
<div id="section3"><a name="section3"><h1 style="margin-bottom:30px;">What to do in Iceland?</h1></div>
<div id="section4"><a name="section4"><h1>Want to rent a car? <br>Look no further, <br>we got the best prices!</br></h1></div>
<div id="section5"><a name="section5"><h1></h1></div>


<!--KASSAR-->
<div id="kassi2"><p><b><br>Geysir Car Rental has everything you need.</br> Ranging from small economy cars to mountain climbing MONSTER TRUCKS!</b></p></div>
<div id="kassi3"><p><b><br>Geysirland is a <br>Tourist Info in Iceland.<br> We got everything you might need in your Icelandic adventure! <p> Come visit us in Harpa or contact us at info@geysirland.is<br>or just call +354 773-1125!</p></b></p></div>



<!--MYNDIR-->
<div id="hjol"><IMG HEIGHT="350" WIDTH="520"  SRC="img/hjol.jpg"></div>
<div id="car"><IMG HEIGHT="230" WIDTH="280"  SRC="img/car.jpg"></div>
<div id="wifi"><IMG HEIGHT="250" WIDTH="250"  SRC="img/wifi.jpg"></div>
<div id="help"><IMG HEIGHT="300" WIDTH="440"  SRC="img/help.jpg"></div>
<div id="house"><IMG HEIGHT="200" WIDTH="200"  SRC="img/house.jpg"></div>
<div id="cutlery"><IMG HEIGHT="200" WIDTH="200"  SRC="img/cutlery.jpg"></div>
<div id="directions"><IMG HEIGHT="200" WIDTH="200"  SRC="img/directions.jpg"></div>
<div id="bus"><IMG HEIGHT="200" WIDTH="200"  SRC="img/bus.jpg"></div>
<div id="info"><IMG HEIGHT="60" WIDTH="60"  SRC="img/info.jpg"></div>


<!-- 
<a href="http://www.kefairport.is/English/" id="kefairport_link">Kefairport</a>
<a href="http://bluelagoon.is/" id="bluelagoon_link">bluelagoon</a>
<a href="http://www.specialtours.is" id="whalewatching_link">whalewatching</a>
<a href="http://www.re.is/day-tours/the-golden-circle/" id="goldencircle_link">goldencircle</a>
<a href="http://en.wikipedia.org/wiki/Geysir" id="geysir_link">geysir</a>
<a href="http://en.wikipedia.org/wiki/Th%C3%B3rsm%C3%B6rk/" id="thorsmork_link">thorsmork</a>
<a href="http://geysir.is/" id="carrental_link">carrental</a>
<a href="http://greyline.is" id="jokulsarlon_link">jokulsarlon</a>
<a href="http://www.helo.is///" id="helicopter_link">helicopter</a>
<a href="http://www.sternatravel.com" id="nordurljos_link">nordurljos</a>
<a href="http://www.iheartreykjavik.net/2013/05/seljavallalaug-a-hiidden-gem-in-south-iceland/" id="hotsprings_link">hot springs</a>
<a href="http://www.harpayachts.is" id="seabird_link">seabirdtour</a>
<a href="http://www.glacierguides.is" id="glacier_link">glacier</a>
<a href="http://www.icelandichorsepark.com" id="hestar_link">hestar</a>
<a href="http://www.arcticrafting.com/" id="rafting_link">river rafting</a>
<a href="http://www.harpayachts.is/" id="harpayachts_link">Harpa Yacht</a>
<a href="http://www.harpa.is/" id="harpa_link">Harpa</a>
<a href="http://www.iheartreykjavik.net/2013/05/seljavallalaug-a-hiidden-gem-in-south-iceland/" id="hotsprings_link">Hot springs</a> -->


<script type="text/javascript">
$(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});´
</script>

</body>
</html>