<?php
$pageTitle = 'Styret';
include "../includes/head.php"; ?>

<div class="pagewrap row">
  <div class="col-2-3">
    <section id="main" class="panel clearfix">
      <h2>Styremedlemmer</h2>

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

      <div class="card">
        <div class="content">
          <div class="cardface front">
              <h2>Morten Noddeland</h2>
              <img src="/assets/img/morten.jpg" alt="Bilde av borettslaget">
            <i class="flip-button flip-open fa fa-info-circle"></i>
          </div>
          <div class="cardface back">
            <h2>Morten Noddeland</h2>
            <h3>Varamedlem</h3>
            <p>
              <i class="fa fa-phone"></i><br>
              (+47) 91 83 38 35
            </p>
            <p>
              <i class="fa fa-envelope"></i><br>
              morten@noddeland.no
            </p>

            <i class="flip-button close fa fa-remove"></i>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="col-1-3">
    <section class="panel">
      <h2>Om styret</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>
  </div>

</div>


<?php include "../includes/foot.php"; ?>