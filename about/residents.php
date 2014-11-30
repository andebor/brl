<?php
$pageTitle = 'Beboere';
include "../includes/head.php"; ?>

<div class="pagewrap">
  <div class="panel">
    <section id="main">
      <h2>Beboere</h2>

      <script>
      if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
        var xmlhttp=new XMLHttpRequest();
        }
      else
        {// code for IE6, IE5
        var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      xmlhttp.open("GET","residents.xml",false);
      xmlhttp.send();
      console.log(xmlhttp);
      var xmlDoc=xmlhttp.responseXML;
      console.log(xmlDoc);

      document.write('<table class="table residentsTable"><tr><th>Navn</th><th>Tlf</th><th>Mail</th><th>Bygg</th><th>Leilighet</th></tr>');
      var x=xmlDoc.getElementsByTagName("person");
      for (i=0;i<x.length;i++)
        {
        document.write("<tr><td>");
        document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
        document.write("</td><td>");
        document.write(x[i].getElementsByTagName("phone")[0].childNodes[0].nodeValue);
        document.write("</td><td>");
        document.write(x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue);
        document.write("</td><td>");
        document.write(x[i].getElementsByTagName("building")[0].childNodes[0].nodeValue);
        document.write("</td><td>");
        document.write(x[i].getElementsByTagName("appartement")[0].childNodes[0].nodeValue);
        document.write("</td></tr>");
        }
      document.write("</table>");
      </script>

      </section>
  </div>
</div>

<?php include "../includes/foot.php"; ?>