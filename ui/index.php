<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Verkkopankki</title>
   
      <script src="rest.js"></script>
  </head>
  <body>
<div id="login_status">
  <?php
  session_start();
    if(isset($_SESSION['username'])){
      echo 'Tervetuloa '.$_SESSION['username'].'<br>';
      echo '<a href="../api/logout.php"><button>Kirjaudu ulos</button></a>';
    }
    else {
      echo 'Tervetuloa vieras ';
      echo '<a href="../ui/login.html"><button>Kirjaudu</button></a>';
      
    }
  ?>
  <hr>
</div>

<div class="container">

    <p>
        <button class="btn btn-primary" onclick="Tilitapahtumat()">Tilitapahtumat</button>
        <button class="btn btn-primary" onclick="Pankkikortit()">Pankkikortit</button>
        <button class="btn btn-primary" onclick="Maksetutmaksut()">Maksetut maksut</button>
     <p>
        Uusi maksu
        <br>
        
        
        
        
        <form action="http://jukkajauhiainen.ipt.oamk.fi/~t8pito01/htyo_verkkopankki/api/uusimaksu.php" method="post">
Maksun numero: <input type="text" name="mn"> <br>
Saajan nimi: <input type="text" name="nimi"> <br>
Viite: <input type="text" name="viite"> <br>
Saajan Tilinumero: <input type="text" name="st"> <br>
Summa: <input type="text" name="summa"> <br>


<input type="submit">
</form>
            
            
            
  
        
        
    
    

    <div id="results"></div>
  </div>
  </body>
</html>
