<!DOCTYPE html>
<html lang="en">
<!-- POWERED BY HAKANNET55 -->
<head>
  <title>İAÜ NOT HESAPLAYICI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.w3-float-1{float:right!important;}
.w3-float-2{float:left!important;}
.w3-margin-1{margin:2px!important;}
.w3-margin-2{margin:4px!important;}
.w3-margin-3{margin:8px!important;}
.w3-margin-4{margin:10px!important;}
.w3-margin-5{margin:12px!important;}
.w3-padding-1{padding:2px!important;}
.w3-padding-2{padding:4px!important;}
.w3-padding-3{padding:8px!important;}
.w3-padding-4{padding:10px!important;}
.w3-padding-5{padding:12px!important;}
.w3-padding{padding:12px!important;}
.w3-margin{margin:12px!important;}
.w3-inline{
	display:inline-block!important;
}
.no_pointer{
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	cursor:default;
}
nav .mbr-table-cell > a.nav-link,{
margin-left:5px!important;
}
nav .mbr-table-cell > .btn{
	margin-right:3px;
	margin-left:3px;
}
nav .container{
padding:0px!important;
margin:0!important;
width:100vw!important;
min-width:100vw!important;
padding-right:35px!important;
}
nav.navbar{
	background:#da3737!important;
}
.badge1{
	font-family:'arial';
	font-size:0.83em;
	color:rgb(55,55,55);
	float:right;
	display:inline-block;
}
table{
	font-family:'arial';
	font-size:1em;
}
table:nth-child(1) thead,table:nth-child(2) thead{
	background:rgb(199,35,35);color:white;
}
</style>
</head>
<div class='w3-padding' style="background:rgb(230,230,230);">
<h3 class='w3-margin w3-padding w3-white no_pointer'>
<div style='height:100%;margin-right:8px;' class='w3-padding-1 no_pointer w3-red w3-inline w3-text-red'>.</div>IAU NOT HESAPLAYICI
</h3>

<div style="max-width:300px;margin:auto;" class='w3-block  w3-margin-bottom'>

<form id="hesaplama">
	<div class="table-responsive-md">
<table class='table table-hover w3-white'>
<thead>
	<tr>
		<th>NOT</th>
		<th>YÜZDE</th>
	</tr>
</thead>
<tbody>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric"  placeholder="Vize Notu" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Vize Yüzdesi" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
</tr>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Final Notu" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Final Yüzdesi" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
</tr>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Ödev 1 Notu" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Ödev 1 Yüzdesi" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
</tr>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Ödev 2 Notu" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Ödev 2 Yüzdesi" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
</tr>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Quiz 1 Notu" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Quiz 1 Yüzdesi" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
</tr>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Quiz 2 Notu" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Quiz 2 Yüzdesi" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
</tr>
<tr>
	<td>
		<input type="number" pattern="[0-9]*" inputmode="numeric" placeholder="Sınıf Ortalaması" style='width:150px;' class='w3-border w3-margin-1 w3-light-grey w3-padding-3' />
	</td>
	<td>
		
	</td>
</tr>
</tbody>
</table>
</div>
</form>

<div onclick="hesapla();" class='btn w3-block w3-white w3-padding-3 w3-hover-red w3-margin-top w3-margin-bottom' style='font-size:1em;'>HESAPLA ></div>
</div>
<br>

<center><label id="sonuc">Tüm alanları eksiksiz doldurun. Olmayan kısımları Boş Bırakınız.</label></center>

</div>

<script>
function hesapla() {
  var vize = document.getElementById("hesaplama").elements[0].value;
  var vyuzde = document.getElementById("hesaplama").elements[1].value;
  var final = document.getElementById("hesaplama").elements[2].value;
  var fyuzde = document.getElementById("hesaplama").elements[3].value;
  var odev1 = document.getElementById("hesaplama").elements[4].value;
  var o1yuzde = document.getElementById("hesaplama").elements[5].value;
  var odev2 = document.getElementById("hesaplama").elements[6].value;
  var o2yuzde = document.getElementById("hesaplama").elements[7].value;
  var quiz1 = document.getElementById("hesaplama").elements[8].value;
  var q1yuzde = document.getElementById("hesaplama").elements[9].value;
  var quiz2 = document.getElementById("hesaplama").elements[10].value;
  var q2yuzde = document.getElementById("hesaplama").elements[11].value;
  var sinif = document.getElementById("hesaplama").elements[12].value;

  var HBN = vize*(vyuzde/100) + final*(fyuzde/100) + odev1*(o1yuzde/100) + odev2*(o2yuzde/100) + quiz1*(q1yuzde/100) + quiz2*(q2yuzde/100);

  var YBN = (1/2)*((70/sinif)+1)*HBN;

  var ortalama = YBN.toFixed(3);
  var bn;

  if(YBN<0){
  	ortalama = "";
  }else{
  	ortalama = YBN.toFixed(3);
  }

  var hatayuzde = (vyuzde/100 + fyuzde/100+ o1yuzde/100 + o2yuzde/100 + q1yuzde/100 + q2yuzde/100)*100;

  

if(ortalama>=90 &&ortalama<=100) bn="AA";
if(ortalama>=85 &&ortalama<90) bn="BA";
if(ortalama>=80 &&ortalama<85) bn="BB";
if(ortalama>=75 &&ortalama<80) bn="CB";
if(ortalama>=70 &&ortalama<75) bn="CC";
if(ortalama>=60 &&ortalama<70) bn="DC";
if(ortalama>=50 &&ortalama<60) bn="DD";
if(ortalama>=40 &&ortalama<50) bn="FD";
if(ortalama>=0 &&ortalama<40) bn="FF";
if(final<30) bn="FF";
if(YBN>100){
	bn="AA";
	ortalama="100.00";

}
if(YBN<0) bn="ORTALAMANIZ 0'dan küçük olamaz.";

if(hatayuzde < 0 || hatayuzde > 100){

  	bn = "Yüzde oranlarının toplamı 0'dan küçük veya 100'den büyük olamaz."
  	ortalama = " ";

  }



document.getElementById("sonuc").innerHTML = "Harf Notunuz: "+ ortalama +" "+bn;

}
</script>
</body>
</html>