<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
    <title>Météo intérieure</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <header>    
      <nav>
        <ul>
            <li><a href="trombinoscope.html">Trombinoscope</a></li>
            <li><a href="evaluation.html">Evaluation</a></li>
            <li><a href="meteo.php">Météo</a></li>
        </ul>
      </nav>
    </header>

    <footer>
      <section>

          <h4><center>Comment te sens-tu aujourd'hui ?<center></h4>

          <form action="meteo.php" id="form" method="post">

          <article>

    				<figure class="humeur">
              <div class="zoom">
              <div class="image">
                <img src="soleil.png" alt="Soleil" class="imgClickable imgCursor">
              </div>
              </div>
            </figure>

            <figure class="humeur">
              <div class="zoom">
              <div class="image">
                <img src="nuage.png" alt="Nuage" class="imgClickable imgCursor">
              </div>
              </div>
            </figure>

            <figure class="humeur">
              <div class="zoom">
              <div class="image">
                <img src="pluie.png" alt="Pluie" class="imgClickable imgCursor">
              </div>
              </div>
            </figure>

            <figure class="humeur">
              <div class="zoom">
              <div class="image">
                <img src="eclair.png" alt="Eclair" class="imgClickable imgCursor">
              </div>
              </div>
            </figure>

            <figure class="humeur ">
              <div class="zoom">
              <div class="image">
                <img src="ange.png" alt="Ange" class="imgClickable imgCursor">
              </div>
              </div>
            </figure>
            
            <input type="hidden" name="imgClike" value="" id="imgClike">
            
            <figure class="humeur centerLink">
                <!--<a id="meteo2" href="meteo2.html">Météo extérieure</a>-->
                <a href="meteo2.html"><img src="meteo_ext.png" alt="Météo extérieure" class="imgCursor"></a>
            </figure>
            
          </article>

          </form>
      </section>
    </footer>  
  </main>
</body>

<script>
    var imgs = document.getElementsByClassName('imgClickable');
    for (var i = 0; i < imgs.length; i++) {
        imgs[i].addEventListener("click", function(){
            document.getElementById("imgClike").value = this.getAttribute("alt");
            document.getElementById("form").submit(); 
        });
    }
</script>

</html>

<?php
  
  extract($_POST);
  //echo '<pre>'.print_r($_POST).'</pre>';

  if ($_POST["imgClike"]=="Soleil") {
    echo "<script type=\"text/javascript\"> alert('Tout le monde il est beau, tout le monde il est gentil ?')</script>";
  }
  elseif ($_POST["imgClike"]=="Nuage") {
    echo "<script type=\"text/javascript\"> alert('Neutre comme la Suisse ?')</script>";
  }
  elseif ($_POST["imgClike"]=="Pluie") {
    echo "<script type=\"text/javascript\"> alert('En manque de câlins ?')</script>";
  }
  elseif ($_POST["imgClike"]=="Eclair") {
    echo "<script type=\"text/javascript\"> alert('Prêt à affronter Rocky ?')</script>";
  }
  elseif ($_POST["imgClike"]=="Ange") {
    echo "<script type=\"text/javascript\"> alert('Big Rémi is watching you ?')</script>";
  }
  //else ($_POST[imgClike]=="") {
    //echo "<script type=\"text/javascript\"> alert('Tu ne veux pas répondre ?')</script>";
  //}

?>