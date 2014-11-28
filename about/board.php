<?php
$pageTitle = 'Styret';
include "../includes/head.php"; ?>

<div class="pagewrap panel">
<section id="main">

	<h2>Styret</h2>

<script>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  var xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","board.xml",false);
xmlhttp.send();
console.log(xmlhttp);
var xmlDoc=xmlhttp.responseXML;
console.log(xmlDoc); 

document.write('<table class="boardTable"><tr><th>Stilling</th><th>Navn</th></tr>');
var x=xmlDoc.getElementsByTagName("member");
for (i=0;i<x.length;i++)
  { 
  document.write("<tr><td>");
  document.write(x[i].getElementsByTagName("position")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
  document.write("</td></tr>");
  }
document.write("</table>");
</script>	

</section>
</div>

<?php include "../includes/foot.php"; ?>